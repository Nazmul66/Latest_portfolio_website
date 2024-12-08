<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function index()
    {
        $data['title']       = "Manage Experience Section";
        $data['section']     = HomePage::where('url_slug', 'experience-section')->first();
        $data['rows']        = Experience::orderBy('id', 'asc')->get();
        return view('admin.pages.experience.index', $data);
    }

    public function create()
    {
        $data['title']       = "Create Experience";
        return view('admin.pages.experience.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name'          => 'required|max:155|unique:experiences,company_name',
            'designation'           => 'required',
            'year'                  => 'required',
            'short_desc'            => 'required',
        ]);

        DB::beginTransaction();
        try {
            $experience       = new Experience();

            $experience->company_name       = $request->company_name;
            $experience->designation        = $request->designation;
            $experience->year               = $request->year;
            $experience->short_desc         = $request->short_desc;
            $experience->status             = $request->status;

            $experience->save();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Experience Create Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Experience Create Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.experience.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']       = "Update Experience";
        $data['row']         =  Experience::findOrFail($id);
        return view('admin.pages.experience.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name'          => 'required|max:155|unique:experiences,company_name,' .$id,
            'designation'           => 'required',
            'year'                  => 'required',
            'short_desc'            => 'required',
        ]);

        DB::beginTransaction();
        try {
            $experience       =  Experience::findOrFail($id);

            $experience->company_name       = $request->company_name;
            $experience->designation        = $request->designation;
            $experience->year               = $request->year;
            $experience->short_desc         = $request->short_desc;
            $experience->status             = $request->status;

            $experience->update();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Experience Updated Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Experience Updated Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.experience.index');
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
            Toastr::error("Experience section updated error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Experience section updated successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $experience   =   Experience::findOrFail($id);
        $experience->delete();

        Toastr::success("Experience deleted successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
