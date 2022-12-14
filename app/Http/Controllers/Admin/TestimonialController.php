<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::query();

        if($keyword = request('search'))
        {
            $testimonials->where('name' , 'LIKE' , "%{$keyword}%")->orWhere('role', 'LIKE' , "%{$keyword}%")->orWhere('id',$keyword);
        }

        $testimonials = $testimonials->latest()->paginate(20);

        return view('admin.testimonials.all' , compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'comment'=>'required',
        ]);
        $file = $request->file('image');
        if($file)
        {
            $imageUrl = $this->uploadImages($request->file('image'),'testimonials');
            Testimonial::create(array_merge($request->all(),['image'=>$imageUrl]));
        }
        Testimonial::create($request->all());

        alert()->success('نظر با موفقیت ثبت شد');

        return redirect(route('admin.testimonials.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit' , compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validData = $request->validate([
            'name'=>'required',
            'comment'=>'required',
        ]);
        $file = $request->file('image');
        $inputs = $request->all();
        if($file)
        {
            $imageUrl = $this->uploadImages($request->file('image'),'testimonials');
            $inputs['image'] = $imageUrl;
        }else{
            $inputs['image'] = $testimonial->image;
        }

       $testimonial->update($inputs);

        alert()->success('نظر با موفقیت ثبت شد');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        alert()->success('نظر با موفقیت حذف شد');

        return back();
    }
}
