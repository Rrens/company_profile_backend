@extends('admin.components.master')
@section('title', 'MEMBER')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>MEMBERS Management</h3>
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
                                                data-bs-target="#modalTambahCareer">
                                                <i class="bi bi-plus"></i>
                                                Tambah Member
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Role</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->name }}</td>
                                                                <td>
                                                                    {{ $item->email }}
                                                                </td>
                                                                <td>
                                                                    {{ $item->role }}
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalDeleteMember{{ $item->id }}">
                                                                        Delete
                                                                    </button>

                                                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                                                        data-bs-target="#modalEditMember{{ $item->id }}">EDIT</button>
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

    {{-- MODAL TAMBAH Outlet --}}
    <div class="modal fade" id="modalTambahCareer" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">
                        Tambah Career</h5>
                </div>
                <form action="{{ route('admin.member.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Email</label>
                            <input type="email" class="form-control mt-3" id="basicInput" name="email"
                                value="{{ old('email') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Password</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="password"
                                value="{{ old('password') }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($data as $item)
        <div class="modal fade" id="modalEditMember{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            Edit Career {{ $item->name }}</h5>
                    </div>
                    <form action="{{ route('admin.member.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="basicInput">Name</label>
                                <input type="number" name="id" value="{{ $item->id }}" hidden>
                                <input type="text" class="form-control mt-3" id="basicInput" name="name"
                                    value="{{ $item->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Email</label>
                                <input type="email" class="form-control mt-3" id="basicInput" name="email"
                                    value="{{ $item->email }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Role</label>
                                <select class="form-select mt-3" name="role">
                                    <option value="superadmin" {{ $item->role == 'superadmin' ? 'selected' : '' }}>super
                                        admin
                                    </option>
                                    <option value="admin" {{ $item->role == 'admin' ? 'selected' : '' }}>admin
                                    </option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Password</label>
                                <input type="text" class="form-control mt-3" id="basicInput" name="password"
                                    value="{{ old('password') }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Accept</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{-- MODAL Delete Career --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalDeleteMember{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            Delete Member {{ $item->name }}</h5>
                    </div>
                    <div class="modal-body">
                        <center>
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <form action="{{ route('admin.member.delete') }}" method="post">
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
