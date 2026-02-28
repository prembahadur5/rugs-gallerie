@extends('layouts.frontend')

@section('content')
<div class="container-fluid pt-5">
<h3>Categories</h3>



@foreach($categories as $cat)
    <p>{{ $cat->name }}</p>
@endforeach
<a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
    Add Category
</a>
</div>
@endsection
