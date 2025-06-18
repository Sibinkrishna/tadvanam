@extends('Admin.Layouts.app')

@section('title', isset($program) ? 'Edit Program' : 'Create Program')
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
            <form  action="{{ isset($program) ? route('admin.programs.update', $program->id) : route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($program))
                    @method('PUT')
                @endif
            <div class="card border-top-0">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                        <div class="card-body personal-info">
                            <div class="row">
                                <div class="col-xl-6">
                                     <div class="mb-3">
                                        <label>Select Category</label>
                                        <select name="program_cata_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach($program_cata as $cata)
                                                <option value="{{ $cata->id }}" {{ (old('program_cata_id', $program->program_cata_id ?? '') == $cata->id) ? 'selected' : '' }}>
                                                    {{ $cata->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Title</label>
                                        <input type="text" name="title" id="title-input" class="form-control" value="{{ old('title', $program->title ?? '') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label>Slug</label>
                                        <input type="text" name="slug" id="slug-input" class="form-control" value="{{ old('slug',$program->slug ?? '') }}">
                                        <small class="text-muted">Slug must be unique and will be auto-generated from the title.</small>
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const titleInput = document.getElementById('title-input');
                                            const slugInput = document.getElementById('slug-input');
                                            let slugManuallyChanged = false;

                                            // Listen for manual changes to slug
                                            slugInput.addEventListener('input', function() {
                                                slugManuallyChanged = slugInput.value.trim().length > 0;
                                            });

                                            // Auto-generate slug from title if slug not manually changed
                                            titleInput.addEventListener('input', function() {
                                                if (!slugManuallyChanged || slugInput.value.trim() === '') {
                                                    let slug = titleInput.value
                                                        .toLowerCase()
                                                        .replace(/[^a-z0-9\s-]/g, '') // Remove invalid chars
                                                        .replace(/\s+/g, '-')         // Replace spaces with hyphens
                                                        .replace(/-+/g, '-')          // Collapse multiple hyphens
                                                        .replace(/^-+|-+$/g, '');     // Trim hyphens
                                                    slugInput.value = slug;
                                                }
                                            });
                                        });
                                    </script>
                                    <div class="mb-3">
                                        <label>Description</label>
                                         <textarea name="description" id="editor" class="form-control" rows="" style="height: 400px !important;">{{ old('description',$program->description ?? '') }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Date & Time</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="date" name="date" class="form-control" value="{{ old('date', isset($program) && $program->date ? $program->date->format('Y-m-d') : '') }}">
                                            </div>
                                            <div class="col-6">
                                                <input type="time" name="time" class="form-control" value="{{ old('time',$program->time ?? '') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <label>Location</label>
                                                <input type="text" name="location" class="form-control" value="{{ old('location',$program->location ?? '') }}">
                                            </div>
                                            <div class="col-6">
                                                <label>status</label>
                                                <select name="status" class="form-control">
                                                    <option value="published" {{ (old('status',$program->status ?? '') == 'published') ? 'selected' : '' }}>Publish</option>
                                                    <option value="draft" {{ (old('status',$program->status ?? '') == 'draft') ? 'selected' : '' }}>Draft</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-6">
                                     <!-- Featured Image -->
                                    <div class="mb-3">
                                        <label>Featured Image</label>
                                        <div class="form-input" style="width:100%;">

                                            <div id="featured_image_preview_container" style="text-align:center; margin-bottom:10px;">
                                                @if (isset($program) && $program->featured_image)
                                                    <img id="featured_image_preview" src="{{ asset('storage/'.$program->featured_image) }}" alt="current photo" width="100" style="display:block; margin:auto;">
                                                @else
                                                    <img id="featured_image_preview" src="#" alt="Preview" width="100%" style="display:none; margin:auto;">
                                                @endif
                                            </div>
                                            <input type="file" id="featured_image" name="featured_image" accept="image/*" onchange="previewFeaturedImage(event)">
                                            <label for="featured_image" class="btn btn-teal w-100">Browse</label>
                                        </div>
                                    </div>
                                    <script>
                                    function previewFeaturedImage(event) {
                                        const input = event.target;
                                        const preview = document.getElementById('featured_image_preview');
                                        if (input.files && input.files[0]) {
                                            const reader = new FileReader();
                                            reader.onload = function(e) {
                                                preview.src = e.target.result;
                                                preview.style.display = 'block';
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        } else {
                                            preview.src = '#';
                                            preview.style.display = 'none';
                                        }
                                    }
                                    </script>

                                    <!-- Image Gallery -->
                                    <div class="mb-3">
                                        <label>Gallery Images</label>
                                        <div id="gallery-preview-container" class="d-flex flex-wrap mb-2">
                                            @if (isset($program) && $program->programgalleries && $program->programgalleries->isNotEmpty())
                                                @foreach ($program->programgalleries as $gallery)
                                                    <div class="position-relative m-1 gallery-image-existing">
                                                        <img src="{{ asset('storage/'.$gallery->image) }}" alt="current photo" width="100" height="100" style="object-fit:cover;">
                                                        <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 gallery-remove-existing" data-image-id="{{ $gallery->id }}" style="border-radius:50%;padding:0 6px;">&times;</button>
                                                        <input type="hidden" name="existing_gallery_images[]" value="{{ $gallery->id }}">
                                                    </div>
                                                @endforeach
                                            @elseif (isset($program))

                                            @endif
                                        </div>
                                        <input type="file" id="gallery-images-input" name="image[]" class="form-control" multiple accept="image/*">
                                        <script>
                                            // Preview selected images
                                            document.getElementById('gallery-images-input').addEventListener('change', function(event) {
                                                const container = document.getElementById('gallery-preview-container');
                                                // Remove previews of newly added images (not existing ones)
                                                container.querySelectorAll('.gallery-image-new').forEach(el => el.remove());

                                                Array.from(event.target.files).forEach((file, idx) => {
                                                    const reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        const wrapper = document.createElement('div');
                                                        wrapper.className = 'position-relative m-1 gallery-image-new';
                                                        wrapper.style.display = 'inline-block';

                                                        const img = document.createElement('img');
                                                        img.src = e.target.result;
                                                        img.width = 100;
                                                        img.height = 100;
                                                        img.style.objectFit = 'cover';

                                                        const btn = document.createElement('button');
                                                        btn.type = 'button';
                                                        btn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 gallery-remove-new';
                                                        btn.style.borderRadius = '50%';
                                                        btn.style.padding = '0 6px';
                                                        btn.innerHTML = '&times;';
                                                        btn.onclick = function() {
                                                            // Remove this preview
                                                            wrapper.remove();
                                                            // Remove file from input
                                                            removeFileFromInput(event.target, idx);
                                                        };

                                                        wrapper.appendChild(img);
                                                        wrapper.appendChild(btn);
                                                        container.appendChild(wrapper);
                                                    };
                                                    reader.readAsDataURL(file);
                                                });
                                            });

                                            // Remove file from input (for new images)
                                            function removeFileFromInput(input, removeIndex) {
                                                const dt = new DataTransfer();
                                                Array.from(input.files).forEach((file, idx) => {
                                                    if (idx !== removeIndex) dt.items.add(file);
                                                });
                                                input.files = dt.files;
                                            }

                                            // Remove existing gallery image (mark for deletion)
                                            document.addEventListener('click', function(e) {
                                                if (e.target.classList.contains('gallery-remove-existing')) {
                                                    const wrapper = e.target.closest('.gallery-image-existing');
                                                    const imageId = e.target.getAttribute('data-image-id');
                                                    const input = document.createElement('input');
                                                    input.type = 'hidden';
                                                    input.name = 'delete_gallery_images[]';
                                                    input.value = imageId;
                                                    wrapper.appendChild(input);
                                                    wrapper.style.display = 'none';
                                                }
                                            });
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <button type="submit" class="btn btn-success w-80 m-3"> {{ isset($program) ? 'Update' : 'Save' }}</button>
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
