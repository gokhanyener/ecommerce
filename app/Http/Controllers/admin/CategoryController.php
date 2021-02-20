<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;

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

            $list = Category::with('upCategory')
                ->where('title', 'like', "%$search%")
                ->orderByDesc('id')
                ->paginate(5)
                ->appends('search', $search);


        } else {
            $list = Category::with('upCategory')
                ->orderByDesc('id')->paginate(5);
        }
       // dd($list);
        return view('admin.category.category', compact('list'));
    }

    public function form()
    {

        //  $data = request()->only('title','slug','up_id');
        $categories = Category::whereNull('up_id')->get();

        return view('admin.category.add', compact('categories'));

    }

    public function create()
    {


        request()->merge(['slug' => Str::slug(request()->slug)]);

        $this->validate(request(), [
            'title' => 'required',
            'slug' => 'nullable|unique:categories,slug',
        ]);

        //   dd(request()->all());
        $up_id = null;
        if (request()->filled('up_id')) {
            $up_id = request()->up_id;
        }
        Category::create([
            'title' => Str::title(request()->title),
            'slug' => Str::slug(request()->slug),
            'up_id' => $up_id
        ]);

        return redirect()
            ->route('admin.category')
            ->with('messages', 'Kaydedildi')
            ->with('type', 'success');
    }

    public function edit($id)
    {

        //$list =  Category::whereId($id)->firstOrFail();
        //return   $list =  Category::findOrFail($id);
        $categories = Category::whereNull('up_id')->get();
        $list = Category::where('id', $id)->first();

        return view('admin.category.edit', compact('list', 'categories'));

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
                'slug' => 'unique:categories,slug',
            ];

        }
        $this->validate(request(), $data);

        $item = Category::where('id', $id)->firstOrFail();
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

        return redirect()->route('admin.category')
            ->with('messages', 'Silindi')
            ->with('type', 'success');
    }

}
