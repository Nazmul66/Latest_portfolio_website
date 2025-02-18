<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function index()
    {
        $data['title']       = "Manage Skill Section";
        $data['section']     = HomePage::where('url_slug', 'skill-section')->first();
        $data['rows']        = Skill::orderBy('id', 'asc')->get();
        return view('admin.pages.skills.index', $data);
    }

    public function create()
    {
        $data['title']       = "Create Skill";
        return view('admin.pages.skills.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required|max:155|unique:skills,name',
            'image'           => 'required|image|mimes:png,jpg,jpeg,webp',
            'percentage'      => 'required|integer',
        ]);

        DB::beginTransaction();
        try {
            $skill       = new Skill();

            $skill->name             = $request->name;
            $skill->percentage       = $request->percentage;
            $skill->status           = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');
                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'public/adminPanel/images/skills/';
                $images->move($imagePath, $imageName);
                $skill->image        =  $imagePath . $imageName;
            }
            $skill->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Skill Create Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Skill Create Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.skills.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']       = "Update Skill";
        $data['row']         = Skill::findOrFail($id);
        return view('admin.pages.skills.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'            => 'required|max:155|unique:skills,name,' .$id,
            'image'           => 'image|mimes:png,jpg,jpeg,webp',
            'percentage'      => 'required|integer',
        ]);

        DB::beginTransaction();
        try {
            $skill       = Skill::findOrFail($id);

            $skill->name             = $request->name;
            $skill->percentage       = $request->percentage;
            $skill->status           = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');

                if( !empty($skill->image) && file_exists($skill->image) ){
                       @unlink($skill->image);
                }

                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'public/adminPanel/images/skills/';
                $images->move($imagePath, $imageName);
                $skill->image        =  $imagePath . $imageName;
            }
            $skill->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Skill Updated Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Skill Updated Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.skills.index');
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
            Toastr::error("Skill section updated error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Skill section updated successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $skill   =  Skill::findOrFail($id);

        if( !empty($skill->image) && file_exists($skill->image) ){
            @unlink($skill->image);
        }

        $skill->delete();

        Toastr::success("Skill deleted successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
