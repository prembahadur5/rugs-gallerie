<h2>All Banners</h2>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<a href="{{ route('admin.banners.create') }}">Add New Banner</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($banners as $banner)
        <tr>
            <td>{{ $banner->id }}</td>
            <td>{{ $banner->title }}</td>
            <td>
                <img src="{{ asset('storage/'.$banner->image) }}" width="150">
            </td>
            <td>
                {{ $banner->status ? 'Active' : 'Inactive' }}
            </td>
            <td>
                <form method="POST"
                      action="{{ route('admin.banners.destroy', $banner) }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        onclick="return confirm('Delete banner?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
