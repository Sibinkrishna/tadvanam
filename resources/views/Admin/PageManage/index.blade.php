@extends('Admin.Layouts.app')

@section('title', 'List pages')

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
        </div>
    </div>
</div>

<div class="main-content">
    <div class="row">
        <div class="col-xxl-12">
            <div class="card stretch stretch-full">
                <div class="card-header d-flex flex-wrap justify-content-between align-items-center gap-3">
                    <div>
                        <h5 class="card-title mb-0">Page List</h5>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-0">
                </div>
                    <a href="{{ route('admin.page-manage.create') }}" class="btn btn-primary ms-auto">Add New Page</a>
                </div>

                <div class="card-body custom-card-action p-0">
                    <div class="table-responsive">
                        @if($pages->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="border-b">
                                    <th scope="row">ID</th>
                                    <th scope="row"> Name</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                    <tr>
                                        <td>{{ ($pages->currentPage() - 1) * $pages->perPage() + $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image">
                                                    {{-- <img src="{{ $page->image ? asset('storage/'.$page->image) : asset('images/default.png') }}" alt="" class="img-fluid" /> --}}
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <span class="d-block">{{ $page->title }}</span>
                                                </a>
                                            </div>
                                        </td>
                                        {{-- <td>
                                            @if ($page->images)
                                            @php $images = json_decode($page->images, true); @endphp
                                            @foreach ($images as $image)
                                                <img src="{{ asset('storage/' . $image) }}" alt="Page Image" style="width:100px;height:auto;"><br>
                                            @endforeach
                                        @endif
                                        </td> --}}
                                        <td>
                                            {{ \Carbon\Carbon::parse($page->created_at)->format('d-m-Y h:i A') }}
                                        </td>
                                        <td>
                                             @if($page->status == 'active')
                                                <span class="badge bg-soft-success text-success">Active</span>
                                            @else
                                                <span class="badge bg-soft-danger text-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            <div class="hstack gap-2 justify-content-end">
                                                {{-- <a href="{{ route('admin.member.show', $member->id) }}" class="avatar-text avatar-md"> --}}
                                                <a href="#" class="avatar-text avatar-md">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.page-manage.edit',$page->id) }}" class="avatar-text avatar-md">
                                                    <i class="feather-edit"></i>
                                                </a>

                                                <!-- Delete Form -->
                                                <form action="{{ route('admin.page-manage.destroy', $page->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="avatar-text avatar-md" onclick="ConfirmDelete(this)">
                                                        <i class="feather-trash-2"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="mt-3 text-center">No pages found.</p>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <!-- Pagination -->
                    @if ($pages->hasPages())
                        <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                            <!-- Previous Page Link -->
                            @if ($pages->onFirstPage())
                                <li class="disabled">
                                    <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $pages->previousPageUrl() }}"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @endif

                            <!-- Page Numbers -->
                            @foreach ($pages->links()->elements as $element)
                                @if (is_string($element))
                                    <li><a href="javascript:void(0);"><i class="bi bi-dot"></i></a></li>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <li>
                                            <a href="{{ $url }}" class="{{ ($page == $pages->currentPage()) ? 'active' : '' }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach

                            <!-- Next Page Link -->
                            @if ($pages->hasMorePages())
                                <li>
                                    <a href="{{ $pages->nextPageUrl() }}"><i class="bi bi-arrow-right"></i></a>
                                </li>
                            @else
                                <li class="disabled">
                                    <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
