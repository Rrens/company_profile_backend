@extends('admin.components.master')
@section('title', 'EDIT CAREER')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Edit Career</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="{{ route('admin.career.update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group mb-3">
                                                            <label for="basicInput">Position</label>
                                                            <input type="number" value="{{ $data->id }}" name="id"
                                                                hidden>
                                                            <input type="text" class="form-control mt-3" id="basicInput"
                                                                name="position" value="{{ $data->position }}">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="basicInput">Description</label>
                                                            <textarea id="editor" class="mt-3" style="color: black" name="description">{{ $data->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary ml-1"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Update</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('admin/js/pages/ckeditor.js') }}"></script>
@endpush
