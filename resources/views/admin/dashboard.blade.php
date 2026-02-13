@extends('admin.layouts.master')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>

    <ul>
        <li><a href="#">Manage Banners</a></li>
        <li><a href="#">Manage Categories</a></li>
        <li><a href="#">Manage Carpets</a></li>
    </ul>
@endsection
