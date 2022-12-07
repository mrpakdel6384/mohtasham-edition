<?php

namespace App\Http\Controllers;

use App\CategoryPortfolio;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Http\Request;

class CategoryPortfolioController extends Controller
{
    use SEOToolsTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryPortfolio $category)
    {
        $projects = $category->portfolios()->latest()->paginate(15);
        $categories = CategoryPortfolio::all();
        return view('front.templates.aronv1.categoryportfolio.blog' , compact('category','projects','categories'));
    }

    public function service(CategoryPortfolio $category)
    {
        $this->seo()
            ->setTitle($category->name)
            ->setDescription($category->description)
            ->opengraph()
            ->addProperty('type', 'category Portfolio')
            ->setTitle($category->name)
            ->setDescription($category->description);
        $portfolios = $category->portfolios;
        return view('front.templates.aronv1.categoryportfolio.service',compact( 'category','portfolios'));
    }
}
