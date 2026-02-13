<h1>{{ $category->name }}</h1>

@foreach($carpets as $carpet)
    <a href="{{ route('carpet.show', $carpet->slug) }}">
        <img src="{{ asset('storage/'.$carpet->image) }}">
        <p>{{ $carpet->title }}</p>
    </a>
@endforeach
