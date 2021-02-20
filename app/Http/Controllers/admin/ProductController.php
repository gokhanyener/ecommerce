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
       $categories = Category::all();

        return view('admin.product.add',compact('categories'));

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
        $product = Product::create([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'description' => request()->description,
            'price' => request()->price,
            /*     'up_id' => $up_id*/
        ]);

        $product->productDetail()->create([
            'featured_product' => request()->featured_product,
            'slider_product' => request()->slider_product,
            'latest_product' => request()->latest_product,
            'opportunity_product' => request()->opportunity_product,
        ]);

        $product->categories()->attach(request()->up_id);


        return redirect()
            ->route('admin.product')
            ->with('messages', 'Kaydedildi')
            ->with('type', 'success');
    }

    public function edit($id)
    {

        $list = Product::with('categories')->whereId($id)->first();
        $selectedCategory = $list->categories->pluck('id')->toArray();
        $categories = Category::all();

        return view('admin.product.edit', compact('list','categories','selectedCategory'));

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

        $product = Product::where('id', $id)->firstOrFail();
        /*      $up_id = null;
              if (request()->filled('up_id')) {
                  $up_id = request()->up_id;
              }*/
        $product->update([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'description' => request()->description,
            'price' => request()->price,
            /*     'up_id' => $up_id*/
        ]);

        $product->productDetail()->update([
            'featured_product' => request()->featured_product,
            'slider_product' => request()->slider_product,
            'latest_product' => request()->latest_product,
            'opportunity_product' => request()->opportunity_product,
        ]);

        $product->categories()->sync(request()->up_id);

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
        $product->productDetail()->delete();

        return redirect()->route('admin.product')
            ->with('messages', 'Silindi')
            ->with('type', 'success');
    }

}
