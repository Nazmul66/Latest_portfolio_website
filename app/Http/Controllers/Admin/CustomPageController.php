<?php

namespace App\Http\Controllers\Admin;

use App\Models\CustomPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CustomPageController extends Controller
{
    public function index()
    {
        $data['title'] = __('messages.common.custom_page_list');
        $data['rows'] = CustomPage::get();
        return view('admin.pages.custom-page.index', $data);
    }

    public function create()
    {
        $data['title'] = "custom page create";
        return view('admin.pages.custom-page.create', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:60|required|unique:custom_pages,title',
            'url_slug' => 'required',
            'meta_title'=>'required|max:60',
            'meta_description'=>'required|max:160',
        ]);

        DB::beginTransaction();
        try {
            $page                   = new CustomPage();
            $page->title            = $request->title;
            $page->url_slug         = $request->url_slug;
            $page->body             = $request->body;
            $page->is_active        = $request->is_active;
            $page->order_id         = CustomPage::max('order_id') ? CustomPage::max('order_id') + 1 : 1;
            $page->meta_title       = $request->meta_title;
            $page->meta_keywords    = $request->meta_keywords;
            $page->meta_description = $request->meta_description;
            $page->created_by       = Auth::user()->id;
            $page->created_at       = date('Y-m-d H:i:s');
            $page->save();
        } catch (\Exception $e) {
            Toastr::error("There is something wrong", 'Error', ["positionClass" => "toast-top-right"]);
            DB::rollback();
            dd($e);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success("Created new page", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.cpage.index');
    }


    public function edit($id)
    {
        $data['row'] = CustomPage::find($id);
        $data['title'] =  $data['row']->title . ' Edit';
        return view('admin.pages.custom-page.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|max:60|unique:custom_pages,title,' . $id,
            'meta_title'=>'required|max:60',
            'meta_description'=>'required|max:160',
         ]);

         DB::beginTransaction();
         try {
             $page                   = CustomPage::findOrFail($id);
             $page->title            = $request->title;
             $page->url_slug         = Str::slug($request->title);
             $page->body             = $request->body;
             $page->is_active        = $request->is_active;
             $page->order_id         = $request->order_id;
             $page->meta_title       = $request->meta_title;
             $page->meta_keywords    = $request->meta_keywords;
             $page->meta_description = $request->meta_description;
             $page->updated_by       = Auth::user()->id;
             $page->updated_at       = date('Y-m-d H:i:s');
             $page->save();

         } catch (\Exception $e) {
             dd($e->getMessage());
             DB::rollback();
             Toastr::error('Page update error', 'Error', ["positionClass" => "toast-top-right"]);
             return redirect()->back();
         }
         DB::commit();
         Toastr::success('Page updated successfully', 'Success', ["positionClass" => "toast-top-right"]);
         return redirect()->back();

    }


    public function view($id)
    {
        $data['row'] = CustomPage::find($id);
        $data['title'] =  $data['row']->title . ' View List';

        return view('admin.pages.custom-page.view', compact('data'));
    }

    public function toggleStatus(Request $request)
    {
        $row = CustomPage::find($request->id);
        if ($row) {
            $row->is_active = $request->is_active;
            $row->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Status updated successfully!'
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Failed to update status.'
        ], 400);
    }


    public function getDelete($id)
    {
        DB::begintransaction();
        try {
            CustomPage::where('id',$id)->update([
                'is_active' => 0
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollback();
            Toastr::success("Delete Successfully", 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
        DB::commit();
        Toastr::success("Delete Successfully", 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    // public function changeActiveStatus(Request $request)
    // {
    //     $id                     = $request->id;
    //     $article                = Page::findOrFail($id);
    //     $page->is_active        = !$page->is_active;
    //     $page->updated_by   = Auth::user()->PK_NO;
    //     $page->update();
    //     return response()->json($article);
    // }
}
