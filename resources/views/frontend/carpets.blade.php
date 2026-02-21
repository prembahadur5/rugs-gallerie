@extends('frontend.carpets.index')

@section('content')
<div class="container my-5">
    <h1 class="fw-bold mb-4">Our Carpets</h1>
		@foreach($carpets as $carpet)
		<div class="card">
			@if($carpet->image)
				<img src="{{ asset('storage/'.$carpet->image) }}"
					alt="{{ $carpet->name }}"
					class="img-fluid">
			@else
				<img src="{{ asset('images/no-image.png') }}" class="img-fluid">
			@endif

			<h5>{{ $carpet->name }}</h5>
		</div>
		@endforeach

</div>
@endsection
