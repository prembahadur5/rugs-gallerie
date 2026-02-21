@extends('layouts.frontend')

@section('content')
<h3>Add Category</h3>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form method="POST" action="{{ url('/admin/categories') }}">
@csrf
<input type="text" name="name" class="form-control mb-3" placeholder="Category Name">
<button class="btn btn-dark">Save</button>
</form>
@endsection
