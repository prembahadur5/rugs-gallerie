@extends('layouts.frontend')

@section('content')
<h2 class="mb-4">Our Carpet Collection</h2>

@foreach($categories as $category)
    <h4 class="mt-4">{{ $category->name }}</h4>

    <div class="row">
        @foreach($category->carpets as $carpet)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $carpet->image
                        ? asset('storage/'.$carpet->image)
                        : asset('images/no-image.png') }}">
                    <div class="card-body">
                        <h6>{{ $carpet->name }}</h6>
                        <a href="{{ url('/carpets/'.$carpet->slug) }}" class="btn btn-sm btn-dark">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
@endsection
