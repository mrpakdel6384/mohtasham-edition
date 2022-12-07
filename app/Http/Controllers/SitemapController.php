<?php

namespace App\Http\Controllers;

use App\CategoryPortfolio;
use App\Content;
use App\Portfolio;
use App\Service;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap', 60);
        if(! $sitemap->isCached() ) {
            $sitemap->add(url()->to(route('sitemap.articles')),'2017-08-25T20:10:00+02:00','0.9','daily');
            $sitemap->add(url()->to(route('sitemap.portfolio')),'2017-08-25T20:10:00+02:00','0.9','daily');
            $sitemap->add(url()->to(route('contact')),'2017-08-25T20:10:00+02:00','0.9','daily');
            $sitemap->add(url()->to(route('priceestimation')),'2017-08-25T20:10:00+02:00','0.9','daily');
            $sitemap->add(url()->to(route('sitemap.category.portfolio')),'2017-08-25T20:10:00+02:00','0.9','daily');
        }

        return $sitemap->render();
    }


    public function articles()
    {
        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.articles',60);

        if(! $sitemap->isCached()){
            $articles = Content::all();
            foreach ($articles as $article) {
                $sitemap->add(url()->to(route('content.single',['category'=>$article->category->slug,'content'=>$article->slug])),$article->created_at ,'0.9','Weekly');
            }
        }

        return $sitemap->render();
    }

    public function portfolio()
    {
        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.portfolio',60);

        if(! $sitemap->isCached()){
            $projects = Portfolio::all();
            foreach ($projects as $project) {
                $sitemap->add(url()->to(route('portfolio.show.single',['category'=>$project->categories[0]->slug,'portfolio'=>$project->slug])),$project->created_at ,'0.9','Weekly');
            }
        }

        return $sitemap->render();
    }

    public function categoryPortfolio(){
        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.category.portfolio',60);

        if(! $sitemap->isCached()){
            $categoryportfolios = CategoryPortfolio::all();
            foreach ($categoryportfolios as $category) {
                $sitemap->add(url()->to(route('portfolio.service',['category'=>$category->slug])),$category->created_at ,'0.9','Weekly');
            }
        }

        return $sitemap->render();
    }

    public function services()
    {
        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.services',60);

        if(! $sitemap->isCached()){
            $services = Service::all();
            foreach ($services as $service) {
                $sitemap->add(url()->to(route('landing.show',['service'=>$service->slug])),$service->created_at ,'0.9','Weekly');
            }
        }

        return $sitemap->render();
    }


    public function portfolios()
    {
        $sitemap = app()->make('sitemap');
        $sitemap->setCache('laravel.sitemap.portfolios',60);

        if(! $sitemap->isCached()){
            $portfolios = Portfolio::all();
            foreach ($portfolios as $service) {
                $sitemap->add(url()->to(route('landing.show',['service'=>$service->slug])),$service->created_at ,'0.9','Weekly');
            }
        }

        return $sitemap->render();
    }

}
