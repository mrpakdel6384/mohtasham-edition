<?php

namespace App\Http\Controllers\Admin;

use App\Attribute;
use App\CategoryProduct;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query();

        if($keyword = request('search')){
            $products->where('title', 'LIKE' ,"%$keyword%")->orwhere('inventory',$keyword);
        }

        $products = $products->latest()->paginate(20);

        return view('admin.products.all' ,compact('products' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = CategoryProduct::all();
        return view('admin.products.create' , compact('categories'));
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
            'price'=>'required',
            'inventory'=>'required',
            'category_product_id'=>'required',
            'attributes' => 'array'
        ]);
        $imageUrl = $this->uploadImages($request->file('image'),'products');
        $product = auth()->user()->products()->create(array_merge($request->all(),['image'=>$imageUrl]));
        $product->categories()->sync($data['category_product_id']);

        if(isset($data['attributes']))
            $this->attachAttributesToProduct($product, $data);


        alert()->success('محصول با موفقیت اضافه شد');

        return redirect(route('admin.products.index'));
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
    public function edit(Product $product)
    {
        $categories  = CategoryProduct::all();
        return view('admin.products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'inventory' => 'required',
            'category_product_id' => 'required',
        ]);

        $file = $request->file('image');
        $inputs = $validData;

        if($file) {
            $inputs['image'] = $this->uploadImages($request->file('image'),'products');
        } else {
            $inputs['image'] = $product->image;

        }

        $product->update($inputs);
        $product->categories()->sync($validData['category_product_id']);

        $product->attributes()->detach();
        if(isset($validData['attributes']))
            $this->attachAttributesToProduct($product, $validData);


        alert()->success('محصول مورد نظر با موفقیت ویرایش شد' , 'با تشکر');
        return redirect(route('admin.products.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
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
