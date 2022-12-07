<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\CategoryPortfolio;
use App\CategoryProduct;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Product;
use Illuminate\Http\Request;

class PortfolioController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::query();

        if($keyword = request('search')){
            $portfolios->where('title', 'LIKE' ,"%$keyword%");
        }

        $portfolios = $portfolios->latest()->paginate(20);

        return view('admin.portfolios.all' ,compact('portfolios' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = CategoryPortfolio::all();
        return view('admin.portfolios.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'category_portfolio_id'=>'required',
            'link'=>'required',
        ]);


        $imageUrl = $this->uploadImages($request->file('image'),'portfolios');
        $portfolio = auth()->user()->portfolios()->create(array_merge($request->all(),['image'=>$imageUrl]));

        $portfolio->categories()->sync($data['category_portfolio_id']);


        alert()->success('پروژه با موفقیت اضافه شد');

        return redirect(route('admin.portfolios.index'));
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
    public function edit(Portfolio $portfolio)
    {
        $categories  = CategoryPortfolio::all();
        return view('admin.portfolios.edit', compact('portfolio','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $validData = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'category_portfolio_id'=>'required',
            'link'=>'required'
        ]);

        $file = $request->file('image');
        $inputs = $validData;

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'portfolios');
        } else {
            $inputs['image'] = $portfolio->image;

        }

        $portfolio->update($inputs);
        $portfolio->categories()->sync($validData['category_portfolio_id']);



        alert()->success('پروژه مورد نظر با موفقیت ویرایش شد' , 'با تشکر');
        return redirect(route('admin.portfolios.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        alert()->success('محصول مورد نظر شما با موفقیت حذف شد');
        return back();
    }


    /**
     * @param Product $product
     * @param array $validData
     */
    protected function attachAttributesToProduct(Product $product, array $validData): void
    {
        $attributes = collect($validData['attributes']);
        $attributes->each(function ($item) use ($product) {
            if (is_null($item['name']) || is_null($item['value'])) return;

            $attr = Attribute::firstOrCreate(
                ['name' => $item['name']]
            );

            $attr_value = $attr->values()->firstOrCreate(
                ['value' => $item['value']]
            );

            $product->attributes()->attach($attr->id, ['value_id' => $attr_value->id]);
        });
    }
}
