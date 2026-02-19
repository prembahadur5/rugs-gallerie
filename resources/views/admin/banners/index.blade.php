@extends('layouts.frontend')

@section('content')
<div class="container-fluid">
@if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    

    

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($banners as $banner)
                        <tr>
                            <td>{{ $banner->id }}</td>
                            
                            <td>
                                @if($banner->image)
									<img src="{{ asset('storage/'.$banner->image) }}"
										alt="Banner"
										style="height:60px; object-fit:contain;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
							<td>{{ $banner->title }}</td>

                            <td>{{ $banner->status ? 'Active' : 'Inactive' }}</td>

                            <td>
                                <form action="{{ route('admin.banners.destroy', $banner->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Delete this banner?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                No banner found
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
	<div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Banners</h3>
        <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">
            + Add Banner
        </a>
		

    </div>

</div>
@endsection
