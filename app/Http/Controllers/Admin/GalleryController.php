<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::query();

        if($keyword = request('search')){
            $galleries->where('title' , 'LIKE' , "%{$keyword}%")->orWhere('id',$keyword);
        }

        $galleries = $galleries->latest()->paginate(20);
        return view('admin.galleries.all' , compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageUrl = $this->uploadImages($request->file('image'),'galleries');

        Gallery::create(array_merge($request->all(),['image'=>$imageUrl]));

        alert()->success('گالری با موفقیت درج شد');
        return redirect(route('admin.galleries.index'));
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
    public function edit(Gallery  $gallery)
    {
        return view('admin.galleries.edit' , compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $file = $request->file('image');
        $inputs = $request->all();

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'galleries');
        } else {
            $inputs['image'] = $gallery->image;

        }

        $gallery->update($inputs);

        alert()->success('گالری با موفقیت ویرایش شد');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
