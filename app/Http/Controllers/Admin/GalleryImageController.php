<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;

class GalleryImageController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Gallery $gallery)
    {
        $images = Image::query();

        if($keyword = request('search')){
            $images->where('alt' , 'LIke' , "%{$keyword}%")->orWhere('id',$keyword);
        }

        $images = $images->latest()->paginate(20);

        return view('admin.galleries.images.all' , compact('images','gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Gallery $gallery)
    {

        return view('admin.galleries.images.create' , compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Gallery $gallery)
    {
        $imageUrl = $this->uploadImages($request->file('image'),'galleries');

        $gallery->images()->create(array_merge($request->all(),['image'=>$imageUrl]));

        alert()->success('فایل با موفقیت درج شد');

        return back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery,Image $image)
    {
        $image->delete();

        alert()->success('عکس با موفقیت حذف شد');

        return back();
    }
}
