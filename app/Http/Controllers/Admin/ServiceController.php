<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\CategoryService;
use App\Content;
use App\Http\Requests\ContentRequest;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $services = Service::query();

        if($keyword = request('search'))
        {
            $services->where('title' , 'LIKE' , "%{$keyword}%")->orwereHas('category_services' , function($query) use ($keyword){
                $query->where('title' , 'LIKE' , "%{$keyword}%");
            });
        }
        $services = $services->latest()->paginate(25);
        return view('admin.services.all',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryService::all();
        return view('admin.services.create',compact('categories'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param ContentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageUrl = $this->uploadImages($request->file('image'),'service');

        auth()->user()->services()->create(array_merge($request->all(),['image'=>$imageUrl]));

        alert()->success('مطلب با موفقیت درج شد');
        return redirect(route('admin.services.index'));
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
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $categories = CategoryService::all();

        return view('Admin.services.edit',compact('service','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, Content $content)
    {
        $file = $request->file('image');
        $inputs = $request->all();

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'contents');
        } else {
            $inputs['image'] = $content->image;

        }

        $content->update($inputs);

        alert()->success('مطلب با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();

        alert()->success('مطلب با موفقیت حذف');

        return back();
    }
}
