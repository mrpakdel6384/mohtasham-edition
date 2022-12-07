<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Rules\Recaptcha;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ContactController extends Controller
{

    use SEOToolsTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->seo()->setTitle('تماس با ما');
        $this->seo()->setDescription('طراحی سایت آرون - ارائه دهنده راهکارهای مبتنی بروب :طراحی سایت, طراحی طراحی فروشگاه اینترنتی, سئو, طراحی اپلیکیشن ');
        $this->seo()->twitter()->setSite('طراحی سایت آرون');
        return view('front.templates.aronv1.contact.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'message'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'g-recaptcha-response'=>['required', new Recaptcha],
        ],[
            'g-recaptcha-response.required' => 'لطفا روی من ربات نیستم کلیک کنید'
        ]);
        $contact = Contact::create($request->all());
        alert()->success('پیام شما با موفقیت ثبت شد ');
        return back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
