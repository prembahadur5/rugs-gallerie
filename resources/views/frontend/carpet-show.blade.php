@extends('layouts.frontend')

@section('content')
<div class="container my-5">

    <div class="row g-5 align-items-start">

        {{-- Image --}}
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <img
                    src="{{ asset('storage/'.$carpet->image) }}"
                    class="img-fluid rounded"
                    alt="{{ $carpet->title }}">
            </div>
        </div>

        {{-- Details --}}
        <div class="col-md-6">
            <h1 class="fw-bold mb-3">{{ $carpet->title }}</h1>

            <p class="text-muted mb-4">
                Handcrafted premium carpet designed for elegance and durability.
            </p>

            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item px-0">
                    <strong>Material:</strong> {{ $carpet->material }}
                </li>
                <li class="list-group-item px-0">
                    <strong>Size:</strong> {{ $carpet->size }}
                </li>
                <li class="list-group-item px-0">
                    <strong>Category:</strong> {{ $carpet->category->name }}
                </li>
            </ul>

            <div class="d-flex gap-3">
                <a href="/inquiry" class="btn btn-dark px-4">
                    Send Inquiry1
                </a>

                <a href="https://wa.me/910000000000?text=Hello%20Rugs%20Gallerie,%20I%20am%20interested%20in%20{{ urlencode($carpet->title) }}"
                   target="_blank"
                   class="btn btn-outline-success px-4">
                    WhatsApp
                </a>
            </div>
        </div>

    </div>

</div>
@endsection
