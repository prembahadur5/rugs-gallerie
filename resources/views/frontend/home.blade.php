@extends('layouts.frontend')

@section('content')

{{-- Hero Header --}}
<section class="py-5 bg-light text-center">
    <div class="container">
        <h1 class="fw-bold display-5">Welcome to Rugs Gallerie</h1>
        <p class="text-muted fs-5">Premium Handmade Carpets</p>
    </div>
</section>

{{-- Cinematic Banner --}}
@if($banners->count())
<section class="container my-5">
    <div class="cinematic-banner rounded shadow overflow-hidden">
        @foreach($banners->take(4) as $index => $banner)
            <img
                src="{{ asset('storage/'.$banner->image) }}"
                class="cinematic-slide {{ $index === 0 ? 'active' : '' }}"
                alt="Rugs Gallerie Banner">
        @endforeach
    </div>
</section>
@endif

{{-- Main Hero CTA --}}
<section class="hero text-center py-5">
    <div class="container">
        <h2 class="fw-bold display-6">Handcrafted Premium Carpets</h2>
        <p class="lead mt-3 text-muted">
            Exporting world-class quality carpets globally
        </p>
        <a href="/carpets" class="btn btn-warning btn-lg mt-4 px-5">
            Explore Collection
        </a>
    </div>
</section>

{{-- Features --}}
<section class="container my-5">
    <div class="row text-center g-4">

        <div class="col-md-4">
            <div class="p-4 border rounded h-100 shadow-sm">
                <h5 class="fw-semibold mb-2">✔ Handmade</h5>
                <p class="text-muted mb-0">
                    Crafted by skilled artisans using traditional techniques
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 border rounded h-100 shadow-sm">
                <h5 class="fw-semibold mb-2">✔ Export Quality</h5>
                <p class="text-muted mb-0">
                    Meets international standards for durability & finish
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 border rounded h-100 shadow-sm">
                <h5 class="fw-semibold mb-2">✔ Custom Designs</h5>
                <p class="text-muted mb-0">
                    Made-to-order carpets tailored to your needs
                </p>
            </div>
        </div>

    </div>
</section>

{{-- Banner Gallery (Optional Section) --}}
@if(isset($banners))
<section class="container my-5">
    <div class="row g-3">
        @foreach($banners as $banner)
            <div class="col-md-4">
                <img
                    src="{{ asset('storage/'.$banner->image) }}"
                    class="img-fluid rounded shadow-sm"
                    alt="Carpet Image">
            </div>
        @endforeach
    </div>
</section>
@endif

{{-- Language Info (Optional / Dev Only) --}}
{{-- <p class="text-center text-muted">Current language: {{ app()->getLocale() }}</p> --}}

@endsection
