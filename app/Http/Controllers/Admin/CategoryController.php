<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::query();

        if($keyword = request('search'))
        {
            $categories->where('title' , 'LIKE' , "%{$keyword}%")->orwereHas('parent' , function($query) use ($keyword){
                $query->where('title' , 'LIKE' , "%{$keyword}%");
            });
        }
        $categories = $categories->latest()->paginate(25);
        return view('admin.categories.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create',compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $imageUrl = $this->uploadImages($request->file('image'),'category');
        Category::create(array_merge($request->all(),['image'=>$imageUrl]));

        alert()->success('دسته بندی با موفقیت درج شد');

        return redirect(route('admin.categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::all()->except($category->id);
        return view('Admin.categories.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $file = $request->file('image');
        $inputs = $request->all();

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'category');
        } else {
            $inputs['image'] = $category->image;

        }

        $category->update($inputs);

        alert()->success('دسته بندی با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        alert()->success('دسته بندی با موفقیت حذف');

        return back();
    }
}
