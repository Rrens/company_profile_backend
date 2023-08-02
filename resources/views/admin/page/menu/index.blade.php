@extends('admin.components.master')
@section('title', 'MENU')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Menu Management</h3>
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
                                                data-bs-target="#modalTambahMenu">
                                                <i class="bi bi-plus"></i>
                                                Tambah Menu
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Outlet</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->brand[0]->name }}</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalDeleteMenu{{ $item->id }}">
                                                                        Delete
                                                                    </button>
                                                                    <button type="button" class="btn btn-warning"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalEditMenu{{ $item->id }}">
                                                                        Update
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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

    {{-- MODAL TAMBAH Menu --}}
    <div class="modal fade" id="modalTambahMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Career</h5>
                </div>
                <form action="{{ route('admin.menu.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Outlet</label>
                            <select class="form-select mt-3" name="id_brand">
                                <option selected hidden>Choose Outlet</option>
                                @foreach ($brand as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Food</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="food"
                                value="{{ old('food') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Drink</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="drink"
                                value="{{ old('drink') }}">
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
        <div class="modal fade" id="modalEditMenu{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Career</h5>
                    </div>
                    <form action="{{ route('admin.menu.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="basicInput">Outlet</label>
                                <input type="text" name="id" value="{{ $item->id }}" hidden>
                                <select class="form-select mt-3" name="id_brand">
                                    <option selected hidden>Choose Outlet</option>
                                    @foreach ($brand as $row)
                                        <option {{ $item->id_brand == $row->id ? 'selected' : '' }}
                                            value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Food</label>
                                <input type="file" class="form-control mt-3" id="basicInput" name="food"
                                    value="{{ $item->food }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Drink</label>
                                <input type="file" class="form-control mt-3" id="basicInput" name="drink"
                                    value="{{ $item->food }}">
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

    {{-- MODAL Delete Menu --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalDeleteMenu{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Delete Menu {{ $item->brand[0]->name }}
                        </h5>
                    </div>
                    <div class="modal-body">
                        <center>
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <form action="{{ route('admin.menu.delete') }}" method="post">
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
