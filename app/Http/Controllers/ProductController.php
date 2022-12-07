<?php

namespace App\Http\Controllers;

use App\CategoryProduct;
use App\Product;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class ProductController extends Controller
{
    public  function index()
    {
        $products = Product::latest()->paginate(12);
        $productsCategories =  CategoryProduct::all();
        $newProducts = Product::latest()->take(7)->get();
        return view('front.templates.royal.products.products' , compact('products','productsCategories','newProducts'));
    }

    public  function single(Product $product)
    {
        $productsCategories =  CategoryProduct::all();
        $newProducts = Product::latest()->take(7)->get();
        return view('front.templates.royal.products.single-product' , compact('product','newProducts','productsCategories'));
    }

    public  function category(CategoryProduct $categoryproduct)
    {
        $products = $categoryproduct->products()->paginate(12);
        $productsCategories =  CategoryProduct::all();
        $newProducts = Product::latest()->take(7)->get();
        return view('front.templates.royal.products.category' , compact('products','productsCategories','newProducts','categoryproduct'));
    }
}
