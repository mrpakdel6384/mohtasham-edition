<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Content;
use App\Http\Requests\ContentRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contents = Content::query();

        if($keyword = request('search'))
        {
            $contents->where('title' , 'LIKE' , "%{$keyword}%")->orwereHas('category' , function($query) use ($keyword){
                $query->where('title' , 'LIKE' , "%{$keyword}%");
            });
        }
        $contents = $contents->latest()->paginate(25);
        return view('admin.contents.all',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.contents.create',compact('categories'));
    }


    public function ajax_single_content(Request $request){
    $contents = Content::whereLang(app()->getLocale())->get();
    $local = app()->getLocale();
    $title = __('admin.Contents');
    if($contents){
        $listContent= "";
        $listContent = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input madule_id\" name=\"madule_id\"  data-lang=\"$local\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

        foreach ($contents as $content){
            $listContent .= "<option data-model='Content' value='$content->id'>$content->title</option>";
        }
        $listContent .= "</select>";
    }
    return response()->json([
        'listContent'=>$listContent,
        'success'=>1,
    ]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param ContentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {
        $imageUrl = $this->uploadImages($request->file('image'),'contents');
		if(!$request->status){
			$request->status = 0;
		}

        auth()->user()->contents()->create(array_merge($request->all(),['image'=>$imageUrl]));
        alert()->success('مطلب با موفقیت درج شد');
        return redirect(route('admin.contents.index'));
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
    public function edit(Content $content)
    {
        $categories = Category::all();

        return view('admin.contents.edit',compact('content','categories'));
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
