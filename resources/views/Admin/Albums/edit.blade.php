@extends('Admin.Layouts.app')

@section('title', 'Edit Gallery')
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
                    <div class="row">
                            <div class="col-lg-6">
                            <form action="{{ route('admin.gallery.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" name="title" placeholder="Album Title"
                                                class="form-control" value="{{ $album->title }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea name="description" placeholder="Album Description"
                                                class="form-control">{{ $album->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Image<span class="text-danger"></span>
                                            </label>
                                            <input type="file" name="images[]" multiple class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Status<span class="text-danger">*</span> </label>
                                            <select name="status" class="form-control">
                                                <option value="active" {{ $album->status == 'active' ? 'selected' : '' }}>Active
                                                </option>
                                                <option value="inactive" {{ $album->status == 'inactive' ? 'selected' : '' }}>Inactive
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary w-100">Update
                                                gallery</button>
                                        </div>
                                    </div>
                                </div>
                                 </form>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    @foreach($album->images as $image)
                                    <div class="col-3">
                                        <div class="d-flex position-relative mb-3" style="width: 120px; height: 120px;">
                                            <img src="{{ asset('storage/' . $image->image_path) }}" width="120" height="120" style="object-fit: cover; width: 100%; height: 100%; border-radius: 6px;">
                                            <!-- Delete button at top right -->
                                            <form action="{{ route('admin.albums.image.delete', $image->id) }}" method="POST" class="position-absolute" style="top: 5px; right: 5px; z-index: 2;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="ConfirmDelete(this)" style="background: rgba(255,255,255,0.8); border: none; border-radius: 50%; padding: 4px 7px; cursor: pointer;">
                                                    <i class="feather-trash-2" style="color: #dc3545; font-size: 16px;"></i>
                                                </button>
                                            </form>
                                            <!-- Replace button at bottom, shown on hover -->
                                            <form action="{{ route('admin.albums.image.update', $image->id) }}" method="POST" enctype="multipart/form-data" class="w-100 position-absolute start-0 bottom-0 d-flex align-items-center justify-content-center replace-form" style="background: rgba(0,0,0,0.5); height: 35px; display: none; border-radius: 0 0 6px 6px;">
                                                @csrf
                                                <label class="w-100 text-center text-white mb-0" style="cursor:pointer;">
                                                    <span style="font-size: 13px;">Replace</span>
                                                    <input type="file" name="image" required style="display:none;" onchange="this.form.submit()">
                                                </label>
                                            </form>
                                        </div>
                                    </div>
                                    <script>
                                        document.querySelectorAll('.col-3.d-flex.position-relative').forEach(function (el) {
                                            el.addEventListener('mouseenter', function () {
                                                el.querySelector('.replace-form').style.display = 'flex';
                                            });
                                            el.addEventListener('mouseleave', function () {
                                                el.querySelector('.replace-form').style.display = 'none';
                                            });
                                        });
                                    </script>
                                    @endforeach
                                </div>
                            </div>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection
