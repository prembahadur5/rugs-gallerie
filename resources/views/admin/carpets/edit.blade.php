<form method="POST" action="{{ route('carpets.update', $carpet) }}" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="title" value="{{ $carpet->title }}" class="form-control mb-2">

<select name="category_id" class="form-control mb-2">
@foreach($categories as $category)
    <option value="{{ $category->id }}"
        @selected($carpet->category_id == $category->id)>
        {{ $category->name }}
    </option>
@endforeach
</select>

<input type="file" name="image" class="form-control mb-2">

<button class="btn btn-primary">Update</button>
</form>
