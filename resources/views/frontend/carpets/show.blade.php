@extends('layouts.frontend')

@section('content')
<div class="container my-5">

    <div class="row g-5 align-items-start">

        {{-- Image Section --}}
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <img
				src="{{ asset('storage/'.$carpet->image) }}"
				class="img-fluid rounded"
				alt="{{ $carpet->title }}">
            </div>
        </div>

        {{-- Content Section --}}
        <div class="col-md-6">

            {{-- Translated Title --}}
            <h1 class="fw-bold mb-3">
                {{ __('catalog.carpets.'.$carpet->slug.'.title') }}
            </h1>

            {{-- Translated Description --}}
            <p class="text-muted mb-4">
                {{ __('catalog.carpets.'.$carpet->slug.'.description') }}
            </p>

            <hr>

            {{-- Product Details --}}
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item px-0">
                    <strong>Material:</strong> {{ $carpet->material }}
                </li>
                <li class="list-group-item px-0">
                    <strong>Size:</strong> {{ $carpet->size }}
                </li>
            </ul>

            {{-- Extra Description (Optional) --}}
            @if($carpet->description)
                <p class="text-muted">
                    {{ $carpet->description }}
                </p>
            @endif

            {{-- Call to Action --}}
            <div class="mt-4">
                <a href="/contact" class="btn btn-dark px-4">
                    Send Inquiry
                </a>
            </div>

        </div>

    </div>

</div>
@endsection
