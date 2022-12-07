<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\CategoryService;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryServiceRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryServiceController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = CategoryService::query();

        if($keyword = request('search'))
        {
            $categories->where('title' , 'LIKE' , "%{$keyword}%")->orwereHas('parent' , function($query) use ($keyword){
                $query->where('title' , 'LIKE' , "%{$keyword}%");
            });
        }
        $categories = $categories->latest()->paginate(25);
        return view('admin.categoriesservice.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryService::all();
        return view('admin.categoriesservice.create',compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $imageUrl = $this->uploadImages($request->file('image'),'categotyservice');
        CategoryService::create(array_merge($request->all(),['image'=>$imageUrl]));

        alert()->success('دسته بندی با موفقیت درج شد');

        return redirect(route('admin.categoriesservice.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryService $categoriesservice)
    {
        $categories = CategoryService::all()->except($categoriesservice->id);

        return view('Admin.categoriesservice.edit',compact('categoriesservice','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryServiceRequest $request, CategoryService $categoriesservice)
    {
        $file = $request->file('image');
        $inputs = $request->all();

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'categotyservice');
        } else {
            $inputs['image'] = $categoriesservice->image;

        }

        $categoriesservice->update($inputs);

        alert()->success('دسته بندی با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryService $categoriesservice)
    {
        $categoriesservice->delete();

        alert()->success('دسته بندی با موفقیت حذف');

        return back();
    }
}
