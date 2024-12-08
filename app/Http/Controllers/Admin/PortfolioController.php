<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function index()
    {
        $data['title']       = "Manage Portfolio Section";
        $data['section']     = HomePage::where('url_slug', 'portfolio-section')->first();
        $data['rows']        = Portfolio::orderBy('id', 'asc')->get();
        return view('admin.pages.portfolio.index', $data);
    }

    public function create()
    {
        $data['title']       = "Create Portfolio";
        return view('admin.pages.portfolio.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name'          => 'required|max:155|unique:portfolios,project_name',
            'project_category'      => 'required|string',
            'image'                 => 'required|image|mimes:png,jpg,jpeg,webp',
            'url_link'              => 'required|url',
        ]);

        DB::beginTransaction();
        try {
            $portfolio       = new Portfolio();

            $portfolio->project_name         = $request->project_name;
            $portfolio->project_category     = $request->project_category;
            $portfolio->url_link             = $request->url_link;
            $portfolio->status               = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');
                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminPanel/images/portfolio/';
                $images->move($imagePath, $imageName);
                $portfolio->image        =  $imagePath . $imageName;
            }
            $portfolio->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Portfolio Create Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Portfolio Create Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.portfolio.index');
    }


    public function edit($id)
    {
        // if (is_null($this->user) || !$this->user->can('admin.faq.edit')) {
        //     abort(403, 'Sorry !! You are Unauthorized.');
        // }

        $data['title']       = "Update Portfolio";
        $data['row']         = Portfolio::findOrFail($id);
        return view('admin.pages.portfolio.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'project_name'          => 'required|max:155|unique:portfolios,project_name,' . $id,
            'project_category'      => 'required|string',
            'image'                 => 'image|mimes:png,jpg,jpeg,webp',
            'url_link'              => 'required|url',
        ]);

        DB::beginTransaction();
        try {
            $portfolio       = Portfolio::findOrFail($id);

            $portfolio->project_name         = $request->project_name;
            $portfolio->project_category     = $request->project_category;
            $portfolio->url_link             = $request->url_link;
            $portfolio->status               = $request->status;

            if( $request->hasFile('image') ){
                $images = $request->file('image');

                if( !empty($portfolio->image) && file_exists($portfolio->image)  ){
                        @unlink($portfolio->image);
                }

                $imageName          =  rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminPanel/images/portfolio/';
                $images->move($imagePath, $imageName);
                $portfolio->image        =  $imagePath . $imageName;
            }
            $portfolio->save();

        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Portfolio Updated Error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Portfolio Updated Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.portfolio.index');
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
            Toastr::error("Portfolio section updated error", 'Error', ["positionClass" => "toast-top-right"]);
            return back();
        }
        DB::commit();
        Toastr::success("Portfolio section updated successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $portfolio   =   Portfolio::findOrFail($id);

        if( !empty($portfolio->image) && file_exists($portfolio->image) ){
            @unlink($portfolio->image);
        }

        $portfolio->delete();

        Toastr::success("Portfolio deleted successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
