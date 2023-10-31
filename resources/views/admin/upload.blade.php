<form action="{{ route('upload_multiple') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <select name="brand" id="">
        @foreach ($brand as $item)
            <option selected hidden>Pilih Brand</option>
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    <input type="file" name="images[]" multiple>
    <button type="submit">Upload</button>
</form>
