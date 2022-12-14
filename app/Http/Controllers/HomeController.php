<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryService;
use App\CategoryPortfolio;
use App\Content;
use App\Gallery;
use App\Module;
use App\Portfolio;
use App\PriceEstimation;
use App\Rules\Recaptcha;
use App\Service;
use App\SiteRequest;
use App\Slider;
use App\Testimonial;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    use SEOToolsTrait;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $this->seo()
        ->setTitle('Home page ')
        ->setDescription('Professor Hesham Mohtasham Professor official website')
        ->opengraph()
        ->setTitle('Home page')
        ->setDescription('Professor Hesham Mohtasham Professor official website');

        $portfolios = Portfolio::latest()->take(6)->get();
		$news = Category::where('slug','blog')->first()->contents()->where('status',1)->get();
		$skills = Content::whereIn('id',[51,52,53])->get();
		$about = Content::where('slug','About-Us')->first();
       
        return view('front.templates.mohtasham.home.index', compact( 'portfolios','news','about','skills'));
    }

    public function comment(Request $request)
    {

        $validData = $request->validate([
            'commentable_id' => 'required',
            'commentable_type' => 'required',
            'parent_id' => 'required',
            'comment' => 'required',
            'g-recaptcha-response'=>['required', new Recaptcha],
        ],[
        'g-recaptcha-response.required' => 'لطفا روی من ربات نیستم کلیک کنید'
    ]);
        auth()->user()->comments()->create($validData);

        alert()->success('نظر با موفقیت ثبت شد');
        return back();
    }


    public function commentajax(Request $request)
    {
        if(! $request->ajax()) {
            return response()->json([
                'status' => 'just ajax request'
            ]);
        }

        $validData = $request->validate([
            'commentable_id' => 'required',
            'commentable_type' => 'required',
            'parent_id' => 'required',
            'comment' => 'required',
            'g-recaptcha-response'=>['required', new Recaptcha],
        ],[
            'g-recaptcha-response.required' => 'لطفا روی من ربات نیستم کلیک کنید'
        ]);

        auth()->user()->comments()->create($validData);

        return response()->json([
            'status' => 'success'
        ]);
//        alert()->success('نظر با موفقیت ثبت شد');
//        return back();
    }

    public function priceestimation()
    {
        $this->seo()
            ->setTitle('تخمین قیمت طراحی سایت')
            ->setDescription('تخمین آنلاین قیمت طراحی وب سایت های فروشگاهی و اختصاصی ')
            ->opengraph()
            ->setTitle('تخمین قیمت طراحی سایت')
            ->setDescription('تخمین آنلاین قیمت طراحی وب سایت های فروشگاهی و اختصاصی ');
        $modules = Module::where('category_module_id',2)->get();
        return view('front.templates.mohtasham.home.price',compact('modules'));
    }

    public function getpricerequest(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required','g-recaptcha-response'=>['required', new Recaptcha],
        ],[
            'g-recaptcha-response.required' => 'لطفا روی من ربات نیستم کلیک کنید'
        ]);
        $order = SiteRequest::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
        ]);

        $order->modules()->attach($request->module_id);
        alert()->success('اطلاعات شما با موفقیت ثبت شد بزودی با شما تماس خواهیم گرفت');
        return back();
    }
}
