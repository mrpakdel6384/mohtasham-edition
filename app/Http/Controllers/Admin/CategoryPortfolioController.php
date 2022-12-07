<?php

namespace App\Http\Controllers\Admin;

use App\CategoryPortfolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryPortfolio::latest()->paginate(10);
        return view('admin.categoriesportfolio.all' , compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.categoriesportfolio.create');
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
            'name' => 'required|min:3',
            'description' => 'required',
        ]);

        CategoryPortfolio::create([
            'name' => $request->name,
            'description' => $request->description,
            'parent_id' => $request->parent_id ?? 0
        ]);

        alert()->success('دسته مورد نظر ثبت شد');
        return redirect(route('admin.categoriesportfolio.index'));
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
    public function edit(CategoryPortfolio $categoriesportfolio)
    {

        return view('admin.categoriesportfolio.edit' , compact('categoriesportfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryPortfolio $categoriesportfolio)
    {
        if($request->parent) {
            $request->validate([
                'parent_id' => 'exists:category_products,id'
            ]);
        }

        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required'
        ]);

        $categoriesportfolio->update([
            'name' => $request->name,
            'description' => $request->description,
            'parent_id' => $request->parent_id
        ]);

        alert()->success('دسته مورد نظر ویرایش شد');
        return redirect(route('admin.categoriesportfolio.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryPortfolio $categoriesportfolio)
    {
        $categoriesportfolio->delete();

        alert()->success('دسته مورد نظر حذف شد');
        return back();
    }
}
