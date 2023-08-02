@extends('admin.components.master')
@section('title', 'HAPPENING')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Happening Management</h3>
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
                                                data-bs-target="#modalTambahHappening">
                                                <i class="bi bi-plus"></i>
                                                Tambah
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($data as $item)
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="card">
                                                <div class="card-content">
                                                    <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modalDetailOutlet{{ $item->id }}">
                                                        <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/happening/' . $item->image) }}"
                                                            class="card-img-top img-fluid" alt="{{ $item->image }}"
                                                            style="width: 350px; height: 200px">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $item->brand[0]->name }}</h5>
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
    <div class="modal fade" id="modalTambahHappening" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Happening</h5>
                </div>
                <form action="{{ route('admin.happening.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Outlet</label>
                            <select class="form-select mt-3" name="id_brand">
                                <option selected hidden>Choose Outlet</option>
                                @foreach ($brand as $row)
                                    <option value="{{ $row->id }}">
                                        {{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Image</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="image">
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

    @foreach ($data as $item)
        <div class="modal fade" id="modalEditOutlet{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Happening</h5>
                    </div>
                    <form action="{{ route('admin.happening.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="basicInput">Outlet</label>
                                <select class="form-select mt-3" name="id_brand">
                                    <option selected hidden>Choose Outlet</option>
                                    @foreach ($brand as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $item->id_brand == $row->id ? 'selected' : '' }}>
                                            {{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Image</label>
                                <input type="number" name="id" value="{{ $item->id }}" hidden>
                                <input type="file" class="form-control mt-3" id="basicInput" name="image">
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
    @endforeach

    {{-- MODAL Detail Outlet --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalDetailOutlet{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <div class="flex-start">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Happening</h5>
                        </div>
                        <div class="flex-end">
                            <button class="btn btn-warning mr-3" data-bs-toggle="modal"
                                data-bs-target="#modalEditOutlet{{ $item->id }}">Edit</button>
                            <button class="btn btn-danger" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalDeleteOutlet{{ $item->id }}">Delete</button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Name Outlet</label>
                            <input type="text" class="form-control mt-3" id="basicInput"
                                value="{{ $item->brand[0]->name }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Image</label>
                            <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/happening/' . $item->image) }}"
                                class="card-img-top img-fluid mt-3" alt="{{ $item->image }}">
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
    @foreach ($data as $item)
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
                            <form action="{{ route('admin.happening.delete') }}" method="post">
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
