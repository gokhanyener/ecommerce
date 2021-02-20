<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
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

            $list = Product::where('title', 'like', "%$search%")
                ->orderByDesc('id')
                ->paginate(5)
                ->appends('search', $search);


        } else {
            $list = Product::orderByDesc('id')
                ->paginate(5);
        }
        // dd($list);
        return view('admin.product.product', compact('list'));
    }

    public function form()
    {

        //  $data = request()->only('title','slug','up_id');
        //   $categories = Category::whereNull('up_id')->get();

        return view('admin.product.add');

    }

    public function create()
    {


        request()->merge(['slug' => Str::slug(request()->slug)]);

        $this->validate(request(), [
            'title' => 'required',
            'slug' => 'nullable|unique:products,slug',
            'description' => 'required|max:1000',
            'price' => 'required|numeric',
        ]);


        /*     $up_id = null;
             if (request()->filled('up_id')) {
                 $up_id = request()->up_id;
             }*/
        Product::create([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'description' => request()->description,
            'price' => request()->price,
            /*     'up_id' => $up_id*/
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
        //  $categories = Category::whereNull('up_id')->get();
        $list = Product::findOrFail($id);

        return view('admin.product.edit', compact('list'));

    }

    public function update($id)
    {

        request()->merge(['slug' => Str::slug(request()->slug)]);

        if (request()->slug === request()->old_slug) {
            $data = [
                'title' => 'required',
                'description' => 'required|max:1000',
                'price' => 'required|numeric',
            ];
        } else {
            if (!request()->filled('slug')) {
                $slug = Str::slug(request()->title);
                request()->merge(['slug' => $slug]);
            }
            $data = [
                'title' => 'required',
                'slug' => 'unique:products,slug',
                'description' => 'required|max:1000',
                'price' => 'required|numeric',
            ];

        }
        $this->validate(request(), $data);

        $item = Product::where('id', $id)->firstOrFail();
        /*      $up_id = null;
              if (request()->filled('up_id')) {
                  $up_id = request()->up_id;
              }*/
        $item->update([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'description' => request()->description,
            'price' => request()->price,
            /*     'up_id' => $up_id*/
        ]);

        return redirect()->route('admin.product')
            ->with('messages', 'Güncellendi')
            ->with('type', 'success');

    }

    public function delete($id)
    {

        //  Category::destroy($id);
        $product = Product::findOrFail($id);
   /*     $category->products()->detach();
        $category->delete();*/
        $product->delete();

        return redirect()->route('admin.product')
            ->with('messages', 'Silindi')
            ->with('type', 'success');
    }

}
