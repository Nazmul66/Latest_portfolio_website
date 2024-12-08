@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('about_us', 'mm-active')
@push('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" /> --}}
@endpush

@section('content')

<div class="container-fluid">
                        
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">Update About Us</h4>
    </div>


    
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ route('admin.about_us.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                    <input name="title" id="title" placeholder="Title here...." type="text" value="{{ old('title', $row->title ?? "") }}" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sub_title" class="form-label">Sub-Title <span class="text-danger">*</span></label>
                                    <input name="sub_title" id="sub_title" placeholder="Sub Title here...." type="text" value="{{ old('title', $row->sub_title ?? "") }}" class="form-control" value="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="question" class="form-label">Image <span class="text-danger">* Recommended (
                                        800px X 800px )</span></label>
                                <input id="formFile" type="file" name="image" accept=".jpg, .jpeg, .png, .webp" class="form-control form-control">

                                @php
                                    if( !empty($row->image) ){
                                        $image = $row->image;  
                                    }
                                    else{
                                        $image = 'adminpanel/images/team-01.png';  
                                    }
                                @endphp
                                <img id="previewImage" src="{{ asset($image) }}" class="mt-3 mb-3" alt="Preview" style="display: block; width: 200px; height: 120px;">
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sstatus" class="form-label">Status <span class="text-danger">*</span></label>
                                    <select class="form-control" name="status" id="sstatus">
                                        <option value="1" @if(old('status', $row->status ?? 1) == 1) selected @endif>Active</option>
                                        <option value="0" @if(old('status', $row->status ?? 1) == 0) selected @endif>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Write description here...." rows="8" style="display: none;">{{ old('description', $row->description ?? "") }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-info waves-effect waves-light w-md">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- container-fluid -->
</div>

@endsection

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        let jReq;
        ClassicEditor
        .create(document.querySelector('#description'))
        .then(newEditor => {
            jReq = newEditor;
        })
        .catch(error => {
            console.error(error);
        });
    });
</script>
@endpush