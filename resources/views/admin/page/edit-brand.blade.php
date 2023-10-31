@extends('admin.components.master')
@section('title', 'EDIT BRAND')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Edit Brand</h3>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.brand.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="basicInput">Name</label>
            <input type="number" name="id" hidden value="{{ $brand->id }}">
            <input type="text" class="form-control mt-3" id="basicInput" name="name" value="{{ $brand->name }}">
        </div>
        <div class="form-group mb-3">
            <label for="basicInput">Description</label>
            <textarea id="editor" style="color: black" name="description">{!! $brand->description !!}
                            </textarea>
        </div>
        <div class="form-group mb-3">
            <label for="basicInput">Link Learn More</label>
            <input type="text" class="form-control mt-3" id="basicInput" name="instagram" value="{{ $brand->instagram }}">
        </div>
        <div class="form-group mb-3">
            <label for="basicInput">Link Footer</label>
            <input type="text" class="form-control mt-3" id="basicInput" name="link_learn_more"
                value="{{ $brand->link_learn_more }}">
        </div>
        <div class="form-group mb-3">
            <label for="basicInput">Logo</label>
            <input type="file" lass="form-control mt-3" id="basicInput" name="logo">
        </div>
        <button type="submit" class="btn btn-warning mt-3">UPDATE</button>
    </form>

@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('admin/js/pages/ckeditor.js') }}"></script>
@endpush
