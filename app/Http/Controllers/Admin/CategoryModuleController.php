<?php

namespace App\Http\Controllers\Admin;

use App\CategoryModule;
use App\Http\Controllers\Controller;
use App\Module;
use Illuminate\Http\Request;

class CategoryModuleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryModule::query();

        if($keyword = request('search'))
        {
            $categories = Module::where('name','LIKE',"%$keyword%")->orwhereHas('id',$keyword);
        }

        $categories = $categories->latest()->paginate(20);

        return view('admin.categoriesmodule.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoriesmodule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
           'name'=>'required',
           'description'=>'required',
           'image'=>'required',
        ]);
        $imageUrl = $this->uploadImages($request->file('image'),'categorymodule');
        CategoryModule::create(array_merge($request->all(),['image'=>$imageUrl]));
        alert()->success('دسته بندی با موفقیت ایجاد شد');
        return redirect(route('admin.categoriesmodule.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryModule $categoriesmodule)
    {

        return view('admin.categoriesmodule.edit',compact('categoriesmodule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryModule $categoriesmodule)
    {
        $file = $request->file('image');
        $inputs = $request->all();

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'categorymodule');
        } else {
            $inputs['image'] = $categoriesmodule->image;

        }

        $categoriesmodule->update($inputs);

        alert()->success('دسته بندی با موفقیت ویرایش  شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryModule $categoriesmodule)
    {
        $categoriesmodule->delete();

        alert()->success('دسته بندی با موفقیت حذف شد');
        return back();
    }
}
