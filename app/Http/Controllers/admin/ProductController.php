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

            $list = Product::with('productDetail')->where('title', 'like', "%$search%")
                ->orderByDesc('id')
                ->paginate(5)
                ->appends('search', $search);


        } else {
            $list = Product::with('productDetail')->orderByDesc('id')
                ->paginate(5);
        }
        //   dd($list);
        return view('admin.product.product', compact('list'));
    }

    public function form()
    {

        //  $data = request()->only('title','slug','up_id');
        $categories = Category::all();

        return view('admin.product.add', compact('categories'));

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


        if (request()->hasFile('image')) {

            $this->validate(request(), [
                'image' => 'required|mimes:jpg,png,gif,svg,jpeg|max:4096'
            ]);

            $image = request()->file('image');
            // $image = request()->image;
            $originalName = $image->getClientOriginalName();
            // explode('.',$originalName);
            $extension = Str::of($originalName)->explode('.');
            $name = $extension->shift();
            $fileName = $name . '-' . time() . '.' . $image->extension();
            //  $fileName = $image->hashName();

            if ($image->isValid()) {
                // $image->move('uploads/products', $fileName);
                $image->move(public_path('uploads/products'), $fileName);
            }

        }

        $product = Product::create([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'description' => request()->description,
            'price' => request()->price,
        ]);

        $product->productDetail()->create([
            'featured_product' => request()->featured_product,
            'slider_product' => request()->slider_product,
            'latest_product' => request()->latest_product,
            'opportunity_product' => request()->opportunity_product,
            'image' => 'uploads/products/' . $fileName
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

        return view('admin.product.edit', compact('list', 'categories', 'selectedCategory'));

    }

    public function update($id)
    {


        request()->merge(['slug' => Str::slug(request()->slug)]);

        if (request()->hasFile('image')) {

            $this->validate(request(), [
                'image' => 'required|mimes:jpg,png,gif,svg,jpeg|max:4096'
            ]);

            $image = request()->file('image');
            // $image = request()->image;
            $originalName = $image->getClientOriginalName();
            // explode('.',$originalName);
            $extension = Str::of($originalName)->explode('.');
            $name = $extension->shift();
            $fileName = $name . '-' . time() . '.' . $image->extension();
            $filePath = 'uploads/products/' . $fileName;
            //  $fileName = $image->hashName();

            if ($image->isValid()) {
                // $image->move('uploads/products', $fileName);
                $image->move(public_path('uploads/products'), $fileName);
            }

            $path = request()->old_image;
            if (file_exists($path)) {
                unlink($path);
            }

        } else {
            $filePath = request()->old_image;
        }


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

        $product->update([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'description' => request()->description,
            'price' => request()->price,
        ]);

        $product->productDetail()->update([
            'featured_product' => request()->featured_product,
            'slider_product' => request()->slider_product,
            'latest_product' => request()->latest_product,
            'opportunity_product' => request()->opportunity_product,
            'image' => $filePath
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
