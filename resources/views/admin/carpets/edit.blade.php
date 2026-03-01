@extends('layouts.frontend')
@section('content')
<div class="container-fluid pt-7">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Edit Carpet</h5>
                </div>

                <div class="card-body">
                    <form method="POST"
                          action="{{ route('admin.carpets.update', $carpet->id) }}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Title --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Carpet Title</label>
                            <input type="text"
                                   name="title"
                                   value="{{ old('title', $carpet->title) }}"
                                   class="form-control @error('title') is-invalid @enderror"
                                   placeholder="Enter carpet title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Category</label>
                            <select name="category_id"
                                    class="form-select @error('category_id') is-invalid @enderror">
                                <option value="">— Select Category —</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @selected(old('category_id', $carpet->category_id) == $category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Carpet Image</label>
                            <input type="file"
                                   name="image"
                                   class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if($carpet->image)
                                <div class="mt-3">
                                    <p class="mb-1 text-muted">Current Image</p>
                                    <!--img src="{{ asset('storage/'.$carpet->image) }}"
                                         class="img-thumbnail"
                                         style="max-height: 120px;"-->
						<img src="{{ asset($carpet->image) }}" alt="{{ $carpet->title }}" style="height:60px; object-fit:contain;">
                                
                                </div>
                            @endif
                        </div>

                        {{-- Actions --}}
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('admin.carpets.index') }}"
                               class="btn btn-outline-secondary">
                                Cancel
                            </a>

                            <button type="submit" class="btn btn-primary px-4">
                                Update Carpet
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>