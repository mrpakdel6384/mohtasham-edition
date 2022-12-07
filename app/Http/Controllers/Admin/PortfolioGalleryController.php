<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use App\PortfolioGallery;
use App\Product;
use App\ProductGallery;
use Illuminate\Http\Request;

class PortfolioGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Portfolio $portfolio)
    {

        $images = $portfolio->gallery()->latest()->paginate(30);
        return view('admin.portfolios.gallery.all' , compact('portfolio','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Portfolio $portfolio)
    {
        return view('admin.portfolios.gallery.create' , compact('portfolio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Portfolio $portfolio)
    {
        $validated = $request->validate([
            'images.*.image' => 'required',
            'images.*.alt' => 'required|min:3'
        ]);
        collect($validated['images'])->each(function($image) use ($portfolio) {

            $portfolio->gallery()->create($image);
        });

        alert()->success('عکس ها با موفقیت اضافه شد');

        return redirect(route('admin.portfolios.gallery.index' , ['portfolio' => $portfolio->id]));
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
    public function edit(Portfolio $portfolio , PortfolioGallery $gallery)
    {

        return view('admin.portfolios.gallery.edit' , compact('portfolio','gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Portfolio $portfolio,PortfolioGallery $gallery)
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
    public function destroy(Portfolio $portfolio,PortfolioGallery  $gallery)
    {
        $gallery->delete();
        alert()->success('عکس مورد نظر حذف شد');
        return back();
    }
}
