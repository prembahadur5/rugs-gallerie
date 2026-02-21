@extends('layouts.frontend')

@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Add New Banner</h4>
        <a href="{{ route('admin.banners.index') }}" class="btn btn-outline-secondary">
            ← Back to Banners
        </a>
    </div>

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Card -->
    <div class="card shadow-sm">
        <div class="card-body">

            <form method="POST"
                  action="{{ route('admin.banners.store') }}"
                  enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                    <!-- Banner Title -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Banner Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               placeholder="Enter banner title"
                               value="{{ old('title') }}"
                               required>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>
                                Inactive
                            </option>
                        </select>
                    </div>

                    <!-- Banner Image -->
                    <div class="col-md-12">
                        <label class="form-label fw-semibold">Banner Image</label>
                        <input type="file"
                               name="image"
                               class="form-control"
                               required>
                        <small class="text-muted">
                            Recommended size: 1920×600 px (JPG/PNG)
                        </small>
                    </div>

                </div>

                <!-- Submit -->
                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        Save Banner
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
