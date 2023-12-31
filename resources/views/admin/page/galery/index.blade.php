@extends('admin.components.master')
@section('title', 'GALERIES')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Galeries Management</h3>
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
                            <div class="card-header d-flex justify-content-between">
                                <a class="dropdown-toggle btn btn-primary" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Filter Outlet
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($brand as $item)
                                        <li><a class="dropdown-item"
                                                href="{{ route('admin.galeries.filter', $item->name) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn btn-primary btn-sm ml-5" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahImage">
                                    <i class="bi bi-plus"></i>
                                    Tambah
                                </button>
                            </div>
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Brand</th>
                                            <th>Image</th>
                                            <th>Detail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->brands[0]->name }}</td>
                                                <td>
                                                    <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                                                        class="card-img-top img-fluid" alt="{{ $item->image }}"
                                                        style="width: 350px; height: 200px">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#modalDetailImage{{ $item->id }}">
                                                        Delete
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.galeries.change_status', $item->id) }}"
                                                        class="btn {{ $item->status == 1 ? 'btn-success' : 'btn-danger' }}">{{ $item->status == 1 ? 'Active' : 'Deactive' }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-primary">
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a>
                                        </li>
                                        @php
                                            $data_paginate = ceil($data->total() / $data->count());
                                        @endphp
                                        @if ($data->count() != $data->perPage())
                                            @for ($i = 1; $i <= $data->currentPage(); $i++)
                                                <li class="page-item {{ $i == $data->currentPage() ? 'active' : '' }}"><a
                                                        class="page-link"
                                                        href="{{ $data->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        @else
                                            @for ($i = 1; $i <= $data_paginate; $i++)
                                                <li class="page-item {{ $i == $data->currentPage() ? 'active' : '' }}"><a
                                                        class="page-link"
                                                        href="{{ $data->url($i) }}">{{ $i }}</a>
                                                </li>
                                            @endfor
                                        @endif
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $data->nextPageUrl() }}">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @foreach ($data as $item)
        <div class="modal fade" id="modalDetailImage{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-between">
                        <div class="flex-start">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Image</h5>
                        </div>
                        <div class="flex-end">
                            <button class="btn btn-danger" href="#" data-bs-toggle="modal"
                                data-bs-target="#modalDeleteImage{{ $item->id }}">Delete</button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/image/' . $item->image) }}"
                                class="card-img-top img-fluid" alt="{{ $item->image }}">
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

    {{-- MODAL Delete Image --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalDeleteImage{{ $item->id }}" tabindex="-1" role="dialog"
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
                            <form action="{{ route('admin.galeries.delete') }}" method="post">
                                @csrf
                                <input type="number" name="id" value="{{ $item->id }}" hidden>
                                <input type="number" name="id_brand" value="{{ $item->id_brand }}" hidden>
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

    {{-- MODAL TAMBAH Image --}}
    <div class="modal fade" id="modalTambahImage" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Outlet</h5>
                </div>
                <form action="{{ route('admin.galeries.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Outlet</label>
                            <select class="form-select mt-3" name="outlet">
                                <option selected hidden>Choose Outlet</option>
                                @foreach ($brand as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Image</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="images[]" multiple
                                value="{{ old('image') }}">
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
@endsection
