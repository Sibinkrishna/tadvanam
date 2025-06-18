@extends('Admin.Layouts.app')

@section('title', 'Edit Admin')
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
                    <div class="row">
                        <div class="col-lg-6">
                                <div class="row">
                                    <form action="{{ route('admin.register.update', $admin->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">User Name <span class="text-danger">*</span></label>
                                            <input type="text" id="name" name="name" class="form-control" value="{{ $admin->name }}" placeholder="Enter your user name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email<span class="text-danger">*</span></label>
                                            <input type="email" id="email" name="email" class="form-control" value="{{ $admin->email }}" placeholder="Enter your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-4 generate-pass">
                                            <label class="form-label">Password<span class="text-danger">*</span></label>

                                            <div class="input-group field">
                                                <input type="password" class="form-control password" id="newPassword" name="password" placeholder="Password" value="">
                                                <div class="input-group-text c-pointer gen-pass" data-bs-toggle="tooltip" title="Generate Password"><i class="feather-hash"></i></div>
                                                <div class="input-group-text border-start bg-gray-2 c-pointer show-pass" data-bs-toggle="tooltip" title="Show/Hide Password"><i></i></div>
                                            </div>
                                            <div class="progress-bar mt-2">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Confirm Password<span class="text-danger">*</span></label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Role<span class="text-danger">*</span></label>
                                            <select class="form-control" name="role_id">
                                                 @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ $admin->role_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-2">
                                            <label class="form-label">Status<span class="text-danger">*</span></label>
                                            <select class="form-control" name="status" id="status-select">
                                                <option value="Active" {{ $admin->status == 'Active' ? 'selected' : '' }} data-bg="#d4edda">Active</option>
                                                <option value="Inactive" {{ $admin->status == 'Inactive' ? 'selected' : '' }} data-bg="#f8d7da">Inactive</option>
                                            </select>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const select = document.getElementById('status-select');
                                                    function updateColor() {
                                                        const selectedOption = select.options[select.selectedIndex];
                                                        const bg = selectedOption.getAttribute('data-bg') || '';
                                                        select.style.backgroundColor = bg;
                                                    }
                                                    select.addEventListener('change', updateColor);
                                                    updateColor();
                                                });
                                            </script>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary w-100">Update</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                    </div>
                    <div class="col-lg-6">
                        {{-- <img src="{{ asset('assets/images/auth/register.webp') }}" alt="" srcset="" width="100%"> --}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection
