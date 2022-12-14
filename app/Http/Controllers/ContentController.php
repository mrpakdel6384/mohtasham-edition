<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    use SEOToolsTrait;
    public function index(Category $category)
    {
        $this->seo()->setTitle($category->title)
            ->setDescription(\Str::limit(strip_tags($category->description),250));
        $this->seo()->opengraph()
            ->setUrl(route('content.blog',['category'=>$category->slug ]))
            ->setTitle($category->title)
            ->setDescription(\Str::limit(strip_tags($category->description),250))
            ->addImage($category->image)
            ->addProperty('type', 'articles');
        $this->seo()->jsonLd()->setType('Article')
            ->setTitle($category->title)
            ->setDescription(\Str::limit(strip_tags($category->description),250))
            ->addImage($category->image);

        $contents = $category->contents()->where('status','1')->latest()->paginate(10);
        $relatedPosts = $category->contents()->where('status','1')->latest()->take(10)->get();
        return view('front.templates.mohtasham.contents.blog' ,compact('category','contents','relatedPosts'));
    }


    public function all()
    {
        $this->seo()->setTitle('بلاگ')
            ->setDescription('مقالات و مطالب جذاب و بروز در زمینه طراحی و بسایت فناوری و اپلیکیشن های موبایل در وب سایت طراحی سایت آرون');
        $this->seo()->opengraph()
            ->setUrl(route('content.all'))
            ->setTitle('بلاگ')
            ->setDescription('مقالات و مطالب جذاب و بروز در زمینه طراحی و بسایت فناوری و اپلیکیشن های موبایل در وب سایت طراحی سایت آرون')

            ->addProperty('type', 'articles');
        $this->seo()->jsonLd()->setType('Article')
            ->setTitle('بلاگ')
            ->setDescription('مقالات و مطالب جذاب و بروز در زمینه طراحی و بسایت فناوری و اپلیکیشن های موبایل در وب سایت طراحی سایت آرون');

        $contents = Content::where('status','1')->latest()->paginate(10);
        $relatedPosts = Content::where('status','1')->latest()->take(10)->get();
        return view('front.templates.mohtasham.contents.all' ,compact('contents','relatedPosts'));
    }

    public function show(Category $category,Content $content)
    {


        $this->seo()->setTitle($content->title)
            ->setDescription(\Str::limit(strip_tags($content->description),250));
        $this->seo()->opengraph()
            ->setUrl(route('content.single',['category'=>$category->slug , 'content'=>$content->slug]))
            ->setTitle($content->title)
            ->setDescription(\Str::limit(strip_tags($content->description),250))
            ->addImage($content->thumbImage(300))
            ->addProperty('type', 'articles');
        $this->seo()->jsonLd()->setType('Article')
            ->setTitle($content->title)
            ->setDescription(\Str::limit(strip_tags($content->description),250))
            ->addImage($content->thumbImage(300));
        $content->increment('viewCount');
        $category = $content->category;
        $next_post = Content::where('id','>',$content->id)->where('status','1')->first();
        $prev_post = Content::where('id','<',$content->id)->where('status','1')->first();
        $relatedPosts = $category->contents()->latest()->where('status','1')->take(6)->get()->except($content->id);
        $comments = $content->comments()->where('approved' , 1)->where('parent_id',0)->latest()->get();
        return view('front.templates.mohtasham.contents.single-content' ,compact('category','content','relatedPosts','next_post','prev_post','comments'));
    }
}
