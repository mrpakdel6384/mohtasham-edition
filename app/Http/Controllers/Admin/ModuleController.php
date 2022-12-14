<?php

namespace App\Http\Controllers\Admin;

use App\CategoryModule;
use App\Http\Controllers\Controller;
use App\Module;
use Illuminate\Http\Request;

class ModuleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::query();

        if($keyword = request('search'))
        {
            $modules = Module::where('name','LIKE',"%$keyword%")->orwereHas('category' , function($query) use ($keyword){
                $query->where('name' , 'LIKE' , "%{$keyword}%");
            });
        }

        $modules = $modules->latest()->paginate(20);

        return view('admin.modules.all',compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryModule::all();
        return view('admin.modules.create',compact('categories'));
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
            'category_module_id'=>'required'
        ]);


        $imageUrl = $this->uploadImages($request->file('image'),'module');
        Module::create(array_merge($request->all(),['image'=>$imageUrl]));
        alert()->success('ماژول با موفقیت ایجاد شد');
        return redirect(route('admin.modules.index'));
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
    public function edit(Module $module)
    {
        $categories = CategoryModule::all();
        return view('admin.modules.edit',compact('module','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $file = $request->file('image');
        $inputs = $request->all();

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'modules');
        } else {
            $inputs['image'] = $module->image;

        }

        $module->update($inputs);

        alert()->success('مطلب با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();

        alert()->storage('ماژول با موفقیت حذف شد');
        return back();
    }
}
