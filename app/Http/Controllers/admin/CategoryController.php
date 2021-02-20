<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use function React\Promise\all;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {

        if (request()->filled('search')) {
            request()->flash();
            $search = request()->search;

            $list = Product::with('upCategory')
                ->where('title', 'like', "%$search%")
                ->orderByDesc('id')
                ->paginate(5)
                ->appends('search', $search);


        } else {
            $list = Product::with('upCategory')
                ->orderByDesc('id')->paginate(5);
        }
       // dd($list);
        return view('admin.product.product', compact('list'));
    }

    public function form()
    {

        //  $data = request()->only('title','slug','up_id');
        $products = Product::whereNull('up_id')->get();

        return view('admin.product.add', compact('products'));

    }

    public function create()
    {


        request()->merge(['slug' => Str::slug(request()->slug)]);

        $this->validate(request(), [
            'title' => 'required',
            'slug' => 'nullable|unique:products,slug',
        ]);

        //   dd(request()->all());
        $up_id = null;
        if (request()->filled('up_id')) {
            $up_id = request()->up_id;
        }
        Product::create([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'up_id' => $up_id
        ]);

        return redirect()
            ->route('admin.product')
            ->with('messages', 'Kaydedildi')
            ->with('type', 'success');
    }

    public function edit($id)
    {

        //$list =  Category::whereId($id)->firstOrFail();
        //return   $list =  Category::findOrFail($id);
        $products = Product::whereNull('up_id')->get();
        $list = Product::where('id', $id)->first();

        return view('admin.product.edit', compact('list', 'products'));

    }

    public function update($id)
    {

        request()->merge(['slug' => Str::slug(request()->slug)]);

        if (request()->slug === request()->old_slug) {
            $data = [
                'title' => 'required'
            ];
        } else {
            if (!request()->filled('slug')) {
                $slug = Str::slug(request()->title);
                request()->merge(['slug' => $slug]);
            }
            $data = [
                'title' => 'required',
                'slug' => 'unique:products,slug',
            ];

        }
        $this->validate(request(), $data);

        $item = Product::where('id', $id)->firstOrFail();
        $up_id = null;
        if (request()->filled('up_id')) {
            $up_id = request()->up_id;
        }
        $item->update([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'up_id' => $up_id
        ]);

        return redirect()->route('admin.category')
            ->with('messages', 'Güncellendi')
            ->with('type', 'success');

    }

    public function delete($id)
    {

        //  Category::destroy($id);
        $category = Category::find($id);
        $category->products()->detach();
        $category->delete();
        while(0==0){
        $products = Category::where('up_id')->get();
        $item = Category::where('up_id', $id)->firstorFail();
        $up_id = $id;
        if (request()->filled('up_id')) {
            $up_id = request()->id;
        }
        $item->update([
            'up_id' => 0
        ]);
        }

        return redirect()->route('admin.category')
            ->with('messages', 'Silindi')
            ->with('type', 'success');
    }

}
