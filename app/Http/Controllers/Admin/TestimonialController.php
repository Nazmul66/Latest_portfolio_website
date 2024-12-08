<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index()
    {
        $data['title']       = "Manage Testimonial Section";
        $data['section']     = HomePage::where('url_slug', 'testimonial-section')->first();
        $data['rows']        = Testimonial::orderBy('id', 'asc')->get();
        return view('admin.pages.testimonials.index', $data);
    }

    public function create()
    {
        $data['title']       = "Create Testimonials";
        $data['categories']  = Testimonial::where('status', 1)->get();
        return view('admin.pages.testimonials.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name'           => 'required|max:155|unique:testimonials,client_name',
            'client_image'          => 'required|image|mimes:png,jpg,jpeg,webp',
            'client_designation'    => 'required',
            'client_desc'           => 'required',
            'rating'                => 'required|integer',
        ]);

        DB::beginTransaction();
        try {
            $testimonial       = new Testimonial();

            $testimonial->client_name             = $request->client_name;
            $testimonial->client_designation      = $request->client_designation;
            $testimonial->client_desc             = $request->client_desc;
            $testimonial->rating                  = $request->rating;
            $testimonial->status                  = $request->status;

            if( $request->hasFile('client_image') ){
                $images = $request->file('client_image');
                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminPanel/images/testimonial/';
                $images->move($imagePath, $imageName);
                $testimonial->client_image        =  $imagePath . $imageName;
            }
            $testimonial->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Testimonials Create Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Testimonials Create Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.testimonials.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']       = "Update testimonials";
        $data['row']         = Testimonial::findOrFail($id);
        return view('admin.pages.testimonials.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'client_name'           => 'required|max:155|unique:testimonials,client_name,' . $id,
            'client_image'          => 'image|mimes:png,jpg,jpeg,webp',
            'client_designation'    => 'required',
            'client_desc'           => 'required',
            'rating'                => 'integer',
        ]);

        DB::beginTransaction();
        try {
            $testimonial       = Testimonial::findOrFail($id);

            $testimonial->client_name             = $request->client_name;
            $testimonial->client_designation      = $request->client_designation;
            $testimonial->client_desc             = $request->client_desc;
            $testimonial->rating                  = $request->rating;
            $testimonial->status                  = $request->status;

            if( $request->hasFile('client_image') ){
                $images = $request->file('client_image');

                if( !empty($testimonial->client_image) && file_exists($testimonial->client_image) ){
                    unlink($testimonial->client_image);
                }

                $imageName         =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath         = 'adminPanel/images/testimonial/';
                $images->move($imagePath, $imageName);
                $testimonial->client_image        =  $imagePath . $imageName;
            }
            $testimonial->update();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Testimonials update Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Testimonials update Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.testimonials.index');
    }

    public function sectionupdate(Request $request, $id)
    {
        // dd( $request->all());

        $request->validate([
            'title'       => 'required',
            'subtitle'    => 'required',
        ]);

        DB::beginTransaction();
        try {
            $homePage                   = HomePage::findOrFail($id);
            $homePage->title            = $request->title;
            $homePage->subtitle         = $request->subtitle;
            $homePage->is_active        = $request->is_active;
            $homePage->save();

        } catch (\Exception $e) {
            // dd($e);
            DB::rollback();
            Toastr::error("Testimonial section updated error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Testimonial section updated successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $testimonial   =   Testimonial::findOrFail($id);

        if( !empty($testimonial->client_image) && file_exists($testimonial->client_image) ){
            @unlink($testimonial->client_image);
        }

        $testimonial->delete();

        Toastr::success("Testimonials deleted successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
