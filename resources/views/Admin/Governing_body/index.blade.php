@extends('Admin.Layouts.app')

@section('title', 'List Members')

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
                        <h5 class="card-title mb-0">governing_body List</h5>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-0">
                </div>
                    <a href="{{ route('admin.governing_body.create') }}" class="btn btn-primary ms-auto">Add New governing_body</a>
                </div>

                <div class="card-body custom-card-action p-0">
                    <div class="table-responsive">
                        @if($members->count() > 0)
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="border-b">
                                    <th scope="row">ID</th>
                                    <th scope="row">Member Name</th>
                                    <th>Designation</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ ($members->currentPage() - 1) * $members->perPage() + $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar-image">
                                                    <img src="{{ $member->image ? asset('storage/'.$member->image) : asset('images/default.png') }}" alt="" class="img-fluid" />
                                                </div>
                                                <a href="javascript:void(0);">
                                                    <span class="d-block">{{ $member->name }}</span>
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $member->designation }}
                                        </td>
                                        <td>
                                            {{ $member->created_at->format('d-m-Y h:i A') }}
                                        </td>
                                        <td>
                                             @if($member->status == 'active')
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
                                                <a href="{{ route('admin.governing_body.edit',$member->id) }}" class="avatar-text avatar-md">
                                                    <i class="feather-edit"></i>
                                                </a>

                                                <!-- Delete Form -->
                                                <form action="{{ route('admin.governing_body.destroy', $member->id) }}" method="POST" style="display:inline;">
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
                            <p class="mt-3 text-center">No Categories found.</p>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <!-- Pagination -->
                    @if ($members->hasPages())
                        <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                            <!-- Previous Page Link -->
                            @if ($members->onFirstPage())
                                <li class="disabled">
                                    <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $members->previousPageUrl() }}"><i class="bi bi-arrow-left"></i></a>
                                </li>
                            @endif

                            <!-- Page Numbers -->
                            @foreach ($members->links()->elements as $element)
                                @if (is_string($element))
                                    <li><a href="javascript:void(0);"><i class="bi bi-dot"></i></a></li>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <li>
                                            <a href="{{ $url }}" class="{{ ($page == $members->currentPage()) ? 'active' : '' }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach

                            <!-- Next Page Link -->
                            @if ($members->hasMorePages())
                                <li>
                                    <a href="{{ $members->nextPageUrl() }}"><i class="bi bi-arrow-right"></i></a>
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

<!-- Custom Confirmation Modal -->
<div id="confirmModal" class="confirm-modal">
    <div class="confirm-modal-content">
        <h3>Are you sure?</h3>
        <p>You won't be able to revert this!</p>
        <div class="confirm-modal-buttons">
            <button id="cancelBtn" class="btn-cancel">Cancel</button>
            <button id="deleteBtn" class="btn-delete">Delete</button>
        </div>
    </div>
</div>

<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// JavaScript to handle the custom confirmation modal
function ConfirmDelete(button) {
    // Show the modal
    document.getElementById("confirmModal").style.display = "flex";

    // Get the delete and cancel buttons
    const deleteBtn = document.getElementById("deleteBtn");
    const cancelBtn = document.getElementById("cancelBtn");

    // Get the closest form for deletion
    const form = button.closest("form");

    // Handle Delete button click
    deleteBtn.onclick = function() {
        form.submit(); // Submit the form to delete the package
        document.getElementById("confirmModal").style.display = "none"; // Hide the modal after submission
    };

    // Handle Cancel button click
    cancelBtn.onclick = function() {
        document.getElementById("confirmModal").style.display = "none"; // Close the modal if cancel is clicked
    };
}

// Optional: Close modal if clicking outside the modal content
window.onclick = function(event) {
    if (event.target === document.getElementById("confirmModal")) {
        document.getElementById("confirmModal").style.display = "none";
    }
};
</script>

<!-- CSS for the custom modal -->
<style>
/* Modal Background */
.confirm-modal {
    display: none; /* Hidden by default */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* Modal Content */
.confirm-modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    max-width: 400px;
    width: 100%;
}

/* Modal Buttons */
.confirm-modal-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.btn-cancel,
.btn-delete {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn-cancel {
    background-color: #ccc;
    color: white;
}

.btn-delete {
    background-color: #d33;
    color: white;
}

.btn-cancel:hover,
.btn-delete:hover {
    opacity: 0.8;
}
</style>

@endsection
