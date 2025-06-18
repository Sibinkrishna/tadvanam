@extends('Admin.Layouts.app')

@section('title', isset($member) ? 'Edit Member' : 'Create Member')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
<style>

  .image-upload-container{
    display: grid;
    grid-template-areas: 'img-u-one img-u-two img-u-three img-u-four img-u-five img-u-six';
  }
  .center {
    display:inline;
    margin: 3px;
  }

  .form-input {
    width:110px;
    padding:3px;
    background:#fff;
    border:2px dashed dodgerblue;
  }
  .form-input input {
    display:none;
  }
  .form-input label {
    display:block;
    width:100px;
    height: auto;
    max-height: 100px;
    background:#333;
    border-radius:10px;
    cursor:pointer;
  }

  .form-input img {
    width:100px;
    height: 100px;
    /* margin: 2px; */
    opacity: .4;
  }

  .imgRemove{
    position: relative;
    bottom: 114px;
    left: 68%;
    background-color: transparent;
    border: none;
    font-size: 30px;
    outline: none;
  }
  .imgRemove::after{
    content: ' \21BA';
    color: #fff;
    font-weight: 900;
    border-radius: 8px;
    cursor: pointer;
  }

  .small{
    color: #272727;
  }
  .image-upload-one{
    grid-area: img-u-one;
    /* display: flex; */
    justify-content: center;
  }
  .image-upload-two{
    grid-area: img-u-two;
    /* display: flex; */
    justify-content: center;
  }

  @media only screen and (max-width: 700px){
    .image-upload-container{
      grid-template-areas: 'img-u-one img-u-two img-u-three'
       'img-u-four img-u-five img-u-six';
    }
  }
</style>
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
        <div class="col-lg-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form  action="{{ isset($member) ? route('admin.governing_body.update', $member->id) : route('admin.governing_body.store') }}" method="POST" enctype="multipart/form-data">
                 @csrf
                @if(isset($member))
                @method('PUT')
                @endif
            <div class="card border-top-0">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                        <div class="card-body personal-info">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control mb-2" placeholder="Name" value="{{ old('name', $member->name ?? '') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control mb-2" placeholder="Designation" value="{{ old('designation', $member->designation ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label>Write Up</label>
                                        <textarea name="description"id="editor" class="form-control mb-2" placeholder="Description">{{ old('description', $member->description ?? '') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control mb-2">
                                    </div>
                                    <div class="mb-3">
                                    @if (isset($member->image))
                                        <div style="position: relative; display: inline-block;">
                                            <img src="{{ asset('storage/'.$member->image) }}" alt="current photo" style="width: 100px;height: 100px;">
                                            <button type="button" class="btn btn-danger btn-sm" style="position: absolute; top: 0; right: 0;" onclick="removeImage(this)">
                                                &times;
                                            </button>
                                        </div>
                                        <input name="remove_image" type="checkbox" value="1" style="display: none;">
                                        <label style="display: none;">Remove photo</label>
                                    @endif

                                    <script>
                                        function removeImage(btn) {
                                            // Hide the image and button
                                            btn.previousElementSibling.style.display = 'none';
                                            btn.style.display = 'none';
                                            // Show the hidden checkbox and label, and check the checkbox
                                            var checkbox = btn.parentElement.nextElementSibling;
                                            var label = checkbox.nextElementSibling;
                                            checkbox.checked = true;
                                            checkbox.style.display = 'none';
                                            label.style.display = 'none';
                                        }
                                    </script>
                                    </div>

                                    <div class="mb-3">
                                        <label>status</label>
                                        <select name="status" class="form-control">
                                            <option value="active" {{ (old('status',$member->status ?? '') == 'active') ? 'selected' : '' }}>Active</option>
                                            <option value="inactive" {{ (old('status',$member->status ?? '') == 'inactive') ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100"> {{ isset($member) ? 'Update' : 'Create' }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
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
