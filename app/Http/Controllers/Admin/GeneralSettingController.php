<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function general_setting()
    {
        $data['title'] = 'Settings';
        $settings = Setting::first();

        return view('admin.pages.settings.general_setting', [
            'settings' => $settings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // Update Setting
    public function generalStore(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'profile_photo'        => 'image|mimes:png,jpg,jpeg,webp',
            'favicon'              => 'image|mimes:png,jpg,jpeg,webp',
            'logo'                 => 'image|mimes:png,jpg,jpeg,webp',
            'pdf'                  => 'mimes:pdf',
        ]);

        DB::beginTransaction();
        try {
            $setting = Setting::first();

            if (!$setting) {
                $setting = new Setting();
            }

            $setting->site_name              = $request->site_name;
            $setting->phone                  = $request->phone;
            $setting->phone_optional         = $request->phone_optional;
            $setting->email                  = $request->email;
            $setting->email_optional         = $request->email_optional;
            $setting->address                = $request->address;

            $setting->exp_year               = $request->exp_year;
            $setting->exp_name               = $request->exp_name;
            $setting->project_count          = $request->project_count;
            $setting->project_name           = $request->project_name;
            $setting->client_count           = $request->client_count;
            $setting->client_name            = $request->client_name;

            $setting->multiple_name          = $request->multiple_name;
            $setting->first_skill            = $request->first_skill;
            $setting->second_skill           = $request->second_skill;
            $setting->location               = $request->location;

            $setting->facebook_url           = $request->facebook_url;
            $setting->instagram_url          = $request->instagram_url;
            $setting->twitter_url            = $request->twitter_url;
            $setting->linkedin_url           = $request->linkedin_url;
            $setting->github_url             = $request->github_url;
            $setting->pinterest_url          = $request->pinterest_url;
            $setting->copyright              = $request->copyright;
            $setting->description            = $request->description;
            $setting->google_map             = $request->google_map;

            if ($request->hasFile('favicon')) {
                $images = $request->file('favicon');

                if( !empty($setting->favicon) && file_exists($setting->favicon)) {
                    @unlink($setting->favicon);
                }

                $imageName          = rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'public/adminpanel/images/settings/';
                $images->move($imagePath, $imageName);
    
                $setting->favicon        =  $imagePath . $imageName;
            }


            if ($request->hasFile('profile_photo')) {
                $images = $request->file('profile_photo');

                if( !empty($setting->profile_photo) && file_exists($setting->profile_photo)) {
                    @unlink($setting->profile_photo);
                }

                $imageName          = rand(1, 99999999) . '.' . $images->getClientOriginalExtension();
                $imagePath          = 'public/adminpanel/images/settings/';
                $images->move($imagePath, $imageName);
    
                $setting->profile_photo        =  $imagePath . $imageName;
            }


            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');

                if( !empty($setting->logo) && file_exists($setting->logo)) {
                    @unlink($setting->logo);
                }

                $imageName          =  rand(1, 99999999) . '.' . $logo->getClientOriginalExtension();
                $imagePath          = 'public/adminpanel/images/settings/';
                $logo->move($imagePath, $imageName);
    
                $setting->logo        =  $imagePath . $imageName;
            }

            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');

                if( !empty($setting->pdf) && file_exists($setting->pdf)) {
                    @unlink($setting->pdf);
                }

                $imageName          =  rand(1, 99999999) . '.' . $pdf->getClientOriginalExtension();
                $imagePath          = 'public/adminpanel/images/settings/';
                $pdf->move($imagePath, $imageName);
    
                $setting->pdf        =  $imagePath . $imageName;
            }

            // dd($setting);
            $setting->save();

        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            return redirect()->back()->with('error', 'Settings not Updated');
        }

        DB::commit();
        Toastr::success(trans('Settings Updated Successfully!'), 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

}
