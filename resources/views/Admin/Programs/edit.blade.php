@extends('Admin.Layouts.app')

@section('title', 'Create Package')
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
            <form id="packageForm" action="{{ route('admin.programs.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card border-top-0">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                        <div class="card-body personal-info">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" value="{{  }}">
                                    </div>
                                    <div class="mb-3">
                                        <label>Slug</label>
                                        <input type="text" name="slug" class="form-control" >
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                         <textarea name="description" id="editor" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <input type="text" name="location" class="form-control" >
                                    </div>
                                    <div class="mb-3">
                                        <label>Date & Time</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="date" name="date" class="form-control">
                                            </div>
                                            <div class="col-6">
                                                <input type="time" name="time" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>status</label>
                                        <select name="status" class="form-control">
                                            <option value="published">Publish</option>
                                            <option value="draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                     <!-- Featured Image -->
                                    <div class="mb-3">
                                        <label>Featured Image</label>
                                        <input type="file" name="featured_image" class="form-control">
                                    </div>

                                    <!-- Image Gallery -->
                                    <div class="mb-3">
                                        <label>Gallery Images</label>
                                        <input type="file" name="image[]" class="form-control" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="submit" class="btn btn-success w-80 m-3">Save</button>

            </div>
        </div>

    </form>
    </div>
    </div>

</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("textarea").forEach(textarea => {
            ClassicEditor
                .create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });
    });
</script>
@endsection
