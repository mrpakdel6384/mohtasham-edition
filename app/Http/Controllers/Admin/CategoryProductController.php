<?php

namespace App\Http\Controllers\Admin;

use App\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryProduct::latest()->paginate(10);
        return view('admin.categoriesproduct.all' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoriesproduct.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->parent_id) {
            $request->validate([
                'parent_id' => 'exists:category_products,id'
            ]);
        }

        $request->validate([
            'name' => 'required|min:3'
        ]);

        CategoryProduct::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id ?? 0
        ]);

        alert()->success('دسته مورد نظر ثبت شد');
        return redirect(route('admin.categoriesproduct.index'));
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
    public function edit(CategoryProduct $categoriesproduct)
    {
        return view('admin.categoriesproduct.edit' , compact('categoriesproduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProduct $categoriesproduct)
    {
        if($request->parent) {
            $request->validate([
                'parent_id' => 'exists:category_products,id'
            ]);
        }

        $request->validate([
            'name' => 'required|min:3'
        ]);

        $categoriesproduct->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);

        alert()->success('دسته مورد نظر ویرایش شد');
        return redirect(route('admin.categoriesproduct.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $categoriesproduct)
    {
        $categoriesproduct->delete();

        alert()->success('دسته مورد نظر حذف شد');
        return back();
    }
}
