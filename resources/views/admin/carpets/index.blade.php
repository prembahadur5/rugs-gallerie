@extends('layouts.frontend')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Carpets</h3>
        <a href="{{ route('admin.carpets.create') }}" class="btn btn-primary">
            + Add Carpet
        </a>
    </div>

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
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Material</th>
                        <th>Size</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($carpets as $carpet)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>
                                @if($carpet->image)
                                    <img src="{{ asset('storage/'.$carpet->image) }}"
                                         width="70"
                                         class="rounded">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>

                            <td>{{ $carpet->title }}</td>

                            <td>
                                {{ $carpet->category->name ?? '-' }}
                            </td>

                            <td>{{ $carpet->material ?? '-' }}</td>

                            <td>{{ $carpet->size ?? '-' }}</td>

                            <td>
                                <a href="{{ route('admin.carpets.edit', $carpet->id) }}"
                                   class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form action="{{ route('admin.carpets.destroy', $carpet->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Delete this carpet?')">
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
                            <td colspan="7" class="text-center text-muted">
                                No carpets found
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

</div>
@endsection
