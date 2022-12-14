<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\ProductGallery;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $images = $product->gallery()->latest()->paginate(30);
        return view('admin.products.gallery.all' , compact('product','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('admin.products.gallery.create' , compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Product $product)
    {

        $validated = $request->validate([
            'images.*.image' => 'required',
            'images.*.alt' => 'required|min:3'
        ]);
        collect($validated['images'])->each(function($image) use ($product) {

            $product->gallery()->create($image);
        });

        alert()->success('عکس ها با موفقیت اضافه شد');

        return redirect(route('admin.products.gallery.index' , ['product' => $product->id]));
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
    public function edit(Product $product , ProductGallery $gallery)
    {

        return view('admin.products.gallery.edit' , compact('product','gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product,PRODUCTGallery $gallery)
    {
        $validated = $request->validate([
            'image' => 'required',
            'alt' => 'required|min:3'
        ]);

        $gallery->update($validated);

        alert()->success('عکس با موفقیت ویرایش شد');

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,ProductGallery  $gallery)
    {
        $gallery->delete();
        alert()->success('عکس مورد نظر حذف شد');
        return back();
    }
}
