<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $data['title']       = "Manage Service Section";
        $data['section']     = HomePage::where('url_slug', 'service-section')->first();
        $data['rows']        = Service::orderBy('id', 'asc')->get();
        return view('admin.pages.service.index', $data);
    }

    public function create()
    {
        $data['title']       = "Create Service";
        return view('admin.pages.service.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'                 => 'required|max:155|unique:services,title',
            'image'                 => 'required|image|mimes:png,jpg,jpeg,webp',
            'short_desc'            => 'required',
        ]);

        DB::beginTransaction();
        try {
            $service       = new Service();

            $service->title           = $request->title;
            $service->short_desc      = $request->short_desc;
            $service->status          = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');


                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminPanel/images/service/';
                $images->move($imagePath, $imageName);
                $service->image        =  $imagePath . $imageName;
            }

            $service->save();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Service Create Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Service Create Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.service.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']       = "Update Service";
        $data['row']         =  Service::findOrFail($id);
        return view('admin.pages.service.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'                 => 'required|max:155|unique:services,title,'. $id,
            'image'                 => 'image|mimes:png,jpg,jpeg,webp',
            'short_desc'            => 'required',
        ]);

        DB::beginTransaction();
        try {
            $service       = Service::findOrFail($id);

            $service->title           = $request->title;
            $service->short_desc      = $request->short_desc;
            $service->status          = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');

                if( !empty($service->image) && file_exists($service->image) ){
                       @unlink($service->image);
                }

                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminPanel/images/service/';
                $images->move($imagePath, $imageName);
                $service->image        =  $imagePath . $imageName;
            }

            $service->save();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Service Updated Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Service Updated Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.service.index');
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
            Toastr::error("Service section updated error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Service section updated successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $service   =   Service::findOrFail($id);
        
        if( !empty($service->image) && file_exists($service->image) ){
            @unlink($service->image);
        }

        $service->delete();

        Toastr::success("Service deleted successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
