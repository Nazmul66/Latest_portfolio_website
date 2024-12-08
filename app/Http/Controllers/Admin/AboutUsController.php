<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title']     = 'About Us';
        $data['row']       = AboutUs::first();

        return view('admin.pages.about_us.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image'        => 'image|mimes:png,jpg,jpeg,webp',
        ]);

        DB::beginTransaction();
        try {
            $aboutUs = AboutUs::first();

            if (!$aboutUs) {
                $aboutUs = new AboutUs();
            }

            $aboutUs->title             = $request->title;
            $aboutUs->sub_title         = $request->sub_title;
            $aboutUs->description       = $request->description;
            $aboutUs->status            = $request->status;

            if ($request->hasFile('image')) {
                $images = $request->file('image');

                if( !empty($aboutUs->image) && file_exists($aboutUs->image)) {
                    @unlink($aboutUs->image);
                }

                $imageName          = rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'adminpanel/images/about_us/';
                $images->move($imagePath, $imageName);
    
                $aboutUs->image        =  $imagePath . $imageName;
            }
            // dd($aboutUs);

            $aboutUs->save();
        } catch (\Exception $e) {
            // dd($e->getMessage());
            Toastr::error(trans('About Us Updated error!'), 'Error', ["positionClass" => "toast-top-right"]);
            DB::rollback();
            return redirect()->back();
        }

        DB::commit();
        Toastr::success(trans('About Us Updated Successfully!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
