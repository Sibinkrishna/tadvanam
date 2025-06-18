@extends('Admin.Layouts.app')

@section('title', 'Add New Page')
@section('content')
<div class="page-header">
    <div class="page-header-left d-flex align-items-center">
        <div class="page-header-title">
            <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item">@yield('title')</li>
        </ul>
    </div>
    <div class="page-header-right ms-auto">
        <div class="page-header-right-items">
            <div class="d-flex d-md-none">
                <a href="javascript:void(0)" class="page-header-right-close-toggle">
                    <i class="feather-arrow-left me-2"></i>
                    <span>Back</span>
                </a>
            </div>
            <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                    </div>
                    <div class="avatar avatar-sm">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none d-flex align-items-center">
        </div>
    </div>
</div>
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="card stretch stretch-full">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.page-manage.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input  type="text" name="title" placeholder="Title"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" id="editor" placeholder="Description" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Add Image<span class="text-danger"></span> </label>
                                            <input type="file" name="images[]" multiple class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Status<span class="text-danger">*</span> </label>
                                            <select name="status" class="form-control">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mt-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Save</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    document.querySelectorAll("textarea").forEach(textarea => {
    ClassicEditor
        .create(textarea)
        .then(editor => {
            // Apply custom height to the editable area
            editor.ui.view.editable.element.style.height = "400px";
        })
        .catch(error => console.error(error));
});

</script>
@endsection
