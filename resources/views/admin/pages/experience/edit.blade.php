@extends('admin.layouts.master')

@section('title')
    {{ $title }}
@endsection

@section('experience', 'mm-active')
@push('css')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" /> --}}
@endpush

@section('content')
    {{-- Breadcrumb --}}
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>
        <a href="{{ route('admin.experience.index') }}" class="btn btn-primary waves-effect waves-light">Back</a>
    </div>


    {{-- Body --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">

                    <form action="{{ route('admin.experience.update', $row->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="company_name" class="form-label">Company Name <span
                                            class="text-danger">*</span></label>
                                    <input name="company_name" id="company_name" placeholder="Write here...." type="text"
                                        class="form-control" value="{{ old('company_name', $row->company_name) }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="designation" class="form-label">
                                        Designation <span class="text-danger">*</span>
                                    </label>
                                    <input name="designation" id="designation" placeholder="Write here...." type="text"
                                        class="form-control" value="{{ old('designation', $row->designation) }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="year" class="form-label">Year <span
                                            class="text-danger">*</span></label>
                                    <input name="year" id="year" placeholder="Write here...." type="text"
                                        class="form-control" value="{{ old('year', $row->year) }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sstatus" class="form-label">Status <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="status" id="sstatus">
                                        <option value="1" @if( $row->status == 1 ) selected @endif>Active</option>
                                        <option value="0" @if( $row->status == 0 ) selected @endif>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="short_desc" class="form-label">Short Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="short_desc" id="short_desc" placeholder="Write description here...." rows="8">{{ old('short_desc', $row->short_desc) }}</textarea>
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
@endsection

@push('script')
    <script>
        document.getElementById('formFile').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('previewImage');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush
