<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\OrderSuccessMail;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Experience;
use App\Models\Faq;
use App\Models\Order;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function about()
    {
        $data['skill']        = DB::table('homepage_sections')->where('url_slug', "skill-section")->first();
        $data['experience']   = DB::table('homepage_sections')->where('url_slug', "experience-section")->first();

        $data['about_us']       = AboutUs::first();
        $data['skills']         = Skill::where('status', 1)->get();
        $data['experiences']    = Experience::where('status', 1)->get();
        return view('frontend.pages.about', $data);
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function portfolio()
    {
        $data['portfolio']       = DB::table('homepage_sections')->where('url_slug', "portfolio-section")->first();
        $data['testimonial']     = DB::table('homepage_sections')->where('url_slug', "testimonial-section")->first();

        $data['portfolios']      = Portfolio::where('status', 1)->get();
        $data['testimonials']    = Testimonial::where('status', 1)->get();
        return view('frontend.pages.portfolio', $data);
    }


    public function service()
    {
        $data['service']       = DB::table('homepage_sections')->where('url_slug', "service-section")->first();

        $data['services']      = Service::where('status', 1)->get();
        $data['brands']        = Brand::where('status', 1)->get();
        return view('frontend.pages.service', $data);
    }

    public function blog_details()
    {
        return view('frontend.pages.blog_details');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function faq()
    {        
        $data['faq']       = DB::table('homepage_sections')->where('url_slug', "faq-section")->first();

        $data['faqs']      = Faq::where('status', 1)->get();
        return view('frontend.pages.faq', $data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function contact_post(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required|max:255',
            'message'  => 'required',
        ]);

        DB::beginTransaction();
        try {
            $contact                     = new Contact();

            $contact->name               = $request->name;
            $contact->email              = $request->email;
            $contact->message            = $request->message;
            $contact->status             = 1;

            $contact->save();
        }
        catch (\Exception $e) {
            DB::rollback();
            // dd($e);
            Toastr::error('Oops! Something went wrong. Please try again later.', 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success('Thank you for reaching out! We appreciate your feedback and will respond as quickly as possible', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
