@extends('admin.components.master')
@section('title', 'BRAND')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Brands Management</h3>
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
                            <div class="card-header">
                                <div class="d-flex justify-content-end">
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalTambahOutlet">
                                                <i class="bi bi-plus"></i>
                                                Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($brand as $item)
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalDetailOutlet{{ $item->id }}">
                                                        <img src="{{ empty($thumbnail->where('id_brand', $item->id)->first()['image']) ? '-' : asset('storage/uploads/thumbnail/' . $thumbnail->where('id_brand', $item->id)->first()['image']) }}"
                                                            class="card-img-top img-fluid"
                                                            alt="{{ empty($thumbnail->where('id_brand', $item->id)->first()['image']) ? '' : $thumbnail->where('id_brand', $item->id)->first()['image'] }}"
                                                            style="width: 350px; height: 200px">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $item->name }}</h5>
                                                            {{-- {!! $item->description !!} --}}
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- MODAL TAMBAH Outlet --}}
    <div class="modal fade" id="modalTambahOutlet" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Outlet</h5>
                </div>
                <form action="{{ route('admin.brand.post') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Logo</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="logo"
                                value="{{ old('logo') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Thumbnail</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="thumbnail"
                                value="{{ old('thumbnail') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Image</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="image">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Description</label>
                            <textarea id="editor" style="color: black" name="description">{{ old('description') }}
                            </textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Link Learn More</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="instagram"
                                value="{{ old('instagram') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Link Footer</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="link_learn_more"
                                value="{{ old('link_learn_more') }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($brand as $item)
        <div class="modal fade" id="modalDetailOutlet{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <div class="flex-start">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Outlet</h5>
                        </div>
                        <div class="flex-end">
                            <a class="btn btn-warning mr-3" href="{{ route('admin.brand.edit', $item->id) }}">Edit</a>
                            <button class="btn btn-danger" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalDeleteOutlet{{ $item->id }}">Delete</button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control mt-3" id="basicInput" value="{{ $item->name }}"
                                readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Logo</label>
                            <img src="{{ empty($item->logo) ? '-' : asset('storage/uploads/logo/' . $item->logo) }}"
                                class="card-img-top img-fluid mt-3" alt="{{ $item->logo }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Thumbnail</label>
                            <img src="{{ empty($thumbnail->where('id_brand', $item->id)->first()['image']) ? '-' : asset('storage/uploads/thumbnail/' . $thumbnail->where('id_brand', $item->id)->first()['image']) }}"
                                class="card-img-top img-fluid mt-3"
                                alt="{{ empty($thumbnail->where('id_brand', $item->id)->first()['image']) ? '' : $thumbnail->where('id_brand', $item->id)->first()['image'] }}">
                            {{ empty($thumbnail[0]) ? '' : '' }}
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Image</label>
                            <img src="{{ empty($image->where('id_brand', $item->id)->first()['image']) ? '-' : asset('storage/uploads/image/' . $image->where('id_brand', $item->id)->first()['image']) }}"
                                class="card-img-top img-fluid mt-3"
                                alt="{{ empty($image->where('id_brand', $item->id)->first()) ? "" : $image->where('id_brand', $item->id)->first()['image'] }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Description</label>
                            <div class="form-control mt-3">
                                {!! $item->description !!}
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Link Learn More</label>
                            <input type="text" class="form-control mt-3" id="basicInput" readonly
                                value="{{ $item->instagram }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Link Footer</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="link_learn_more"
                                value="{{ $item->link_learn_more }}" readonly>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- MODAL Delete Outlet --}}
    @foreach ($brand as $item)
        <div class="modal fade" id="modalDeleteOutlet{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Delete Outlet {{ $item->name }}</h5>
                    </div>
                    <div class="modal-body">
                        <center>
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <form action="{{ route('admin.brand.delete') }}" method="post">
                                @csrf
                                <input type="number" name="id" value="{{ $item->id }}" hidden>
                                <button type="submit" class="btn btn-danger ml-1" href="#">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Delete</span>
                                </button>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('admin/js/pages/ckeditor.js') }}"></script>
@endpush
