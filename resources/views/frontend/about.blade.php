@extends('layouts.frontend')

@section('content')

{{-- Page Header --}}
<section class="py-5 bg-light text-center">
    <div class="container">
        <h1 class="fw-bold">About Rugs Gallerie</h1>
        <p class="text-muted fs-5 mt-2">
            Crafting premium handmade carpets with passion and precision
        </p>
    </div>
</section>

{{-- About Content --}}
<section class="container my-5">
    <div class="row align-items-center g-5">

        {{-- Text --}}
        <div class="col-md-6">
            <h3 class="fw-semibold mb-3">Who We Are</h3>
            <p class="text-muted">
                Rugs Gallerie is a leading manufacturer and exporter of premium handmade carpets,
                blending traditional craftsmanship with modern design aesthetics.
            </p>
            <p class="text-muted">
                Each carpet is meticulously handcrafted by skilled artisans, ensuring superior
                quality, durability, and timeless beauty.
            </p>
        </div>

        {{-- Highlights --}}
        <div class="col-md-6">
            <div class="row g-3">

                <div class="col-6">
                    <div class="p-4 border rounded shadow-sm h-100 text-center">
                        <h4 class="fw-bold">20+</h4>
                        <p class="text-muted mb-0">Years of Experience</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="p-4 border rounded shadow-sm h-100 text-center">
                        <h4 class="fw-bold">50+</h4>
                        <p class="text-muted mb-0">Export Countries</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="p-4 border rounded shadow-sm h-100 text-center">
                        <h4 class="fw-bold">100%</h4>
                        <p class="text-muted mb-0">Handcrafted</p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="p-4 border rounded shadow-sm h-100 text-center">
                        <h4 class="fw-bold">Premium</h4>
                        <p class="text-muted mb-0">Quality Materials</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- Call to Action --}}
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <h3 class="fw-semibold mb-3">Looking for Custom Carpets?</h3>
        <p class="mb-4">
            Get in touch with us to create carpets tailored to your space and style.
        </p>
        <a href="/inquiry" class="btn btn-warning px-4">
            Send Inquiry
        </a>
    </div>
</section>

@endsection
