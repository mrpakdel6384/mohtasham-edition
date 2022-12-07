<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(Category $category)
    {

        $contents = $category->contents()->paginate(10);
        $relatedPosts = $category->contents()->take(10)->get();
        return view('front.templates.aron.contents.blog' ,compact('category','contents','relatedPosts'));
    }

    public function show(Category $category,Content $content)
    {
        $content->increment('viewCount');
        $category = $content->category;
        $next_post = Content::where('id','>',$content->id)->first();
        $prev_post = Content::where('id','<',$content->id)->first();
        $relatedPosts = $category->contents()->take(5)->get()->except($content->id);
        $comments = $content->comments()->where('approved' , 1)->where('parent_id',0)->latest()->get();
        return view('front.templates.aron.contents.single-content' ,compact('category','content','relatedPosts','next_post','prev_post','comments'));
    }
}
