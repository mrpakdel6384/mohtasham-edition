<?php

namespace App\Http\Controllers;

use App\Agent;
use App\CategoryService;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(CategoryService $service)
    {
        $serviceCategories = CategoryService::all();
        return view('front.templates.royal.services.service',compact('service' ,'serviceCategories'));
    }

    public function show(Service $service)
    {

    }
}
