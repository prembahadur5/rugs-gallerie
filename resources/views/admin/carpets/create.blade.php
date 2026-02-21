@extends('layouts.frontend')

@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Add New Carpet</h4>
        <a href="{{ route('admin.carpets.index') }}" class="btn btn-outline-secondary">
            ← Back to Carpets
        </a>
    </div>

    <!-- Card -->
    <div class="card shadow-sm">
        <div class="card-body">

            <form action="{{ route('admin.carpets.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                    <!-- Carpet Title -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Carpet Title</label>
                        <input type="text"
                               name="title"
                               class="form-control"
                               placeholder="Enter carpet title"
                               required>
                    </div>

                    <!-- Category -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Category</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Material -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Material</label>
                        <input type="text"
                               name="material"
                               class="form-control"
                               placeholder="e.g. Wool, Silk">
                    </div>

                    <!-- Size -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Size</label>
                        <input type="text"
                               name="size"
                               class="form-control"
                               placeholder="e.g. 5x7 ft">
                    </div>

                    <!-- Main Image -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Main Image</label>
                        <input type="file"
                               name="image"
                               class="form-control">
                        <small class="text-muted">
                            Recommended: JPG/PNG, max 2MB
                        </small>
                    </div>

                    <!-- Gallery Images -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Gallery Images</label>
                        <input type="file"
                               name="images[]"
                               multiple
                               class="form-control">
                        <small class="text-muted">
                            You can select multiple images
                        </small>
                    </div>

                </div>

                <!-- Submit -->
                <div class="mt-4 text-end">
                    <button class="btn btn-primary px-4">
                        Save Carpet
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection
