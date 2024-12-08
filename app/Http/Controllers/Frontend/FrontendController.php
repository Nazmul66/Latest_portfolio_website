<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\OrderSuccessMail;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Order;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('frontend.pages.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }


    public function service()
    {
        return view('frontend.pages.service');
    }

    public function blog_details()
    {
        return view('frontend.pages.blog_details');
    }



}
