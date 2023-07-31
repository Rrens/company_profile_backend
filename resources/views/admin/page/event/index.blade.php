@extends('admin.components.master')
@section('title', 'EVENT')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Event Management</h3>
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
                                                data-bs-target="#modalTambahEvent">
                                                <i class="bi bi-plus"></i>
                                                Tambah Event
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
                                                        data-bs-target="#modalEditEvent{{ $item->id }}">
                                                        <img src="{{ empty($item->image) ? '-' : asset('storage/uploads/event/' . $item->image) }}"
                                                            class="card-img-top img-fluid" alt="{{ $item->image }}"
                                                            style="width: 350px; height: 200px">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $item->name }}</h5>
                                                            {{ $item->brand[0]->name }}
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
    <div class="modal fade" id="modalTambahEvent" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Event</h5>
                </div>
                <form action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Name</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Outlet</label>
                            <fieldset class="form-group mt-3">
                                <select class="form-select" id="basicSelect" name="id_brand">
                                    <option selected hidden>Pilih Outlet</option>
                                    @foreach ($brand as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Pilih Waktu</label>
                            <div class="d-flex justify-content-between mt-3">
                                <div class="flex-start">
                                    <input type="date" class="form-control mt-3" id="basicInput" name="date"
                                        value="{{ old('date') }}">
                                </div>
                                <div class="flex-end">
                                    <div class="d-flex justify-content-between">
                                        <fieldset class="form-group">
                                            <select class="form-select mt-4 ml-4" id="basicSelect" name="open_time">
                                                <option selected hidden>Pilih Waktu Mulai</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select mt-4 ml-4" id="basicSelect" name="close_time">
                                                <option selected hidden>Pilih Waktu Selesai</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Image</label>
                            <input type="file" class="form-control mt-3" id="basicInput" name="image">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Category</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="category"
                                value="{{ old('category') }}">
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

    {{-- MODAL Detail Outlet --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modalEditEvent{{ $item->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document" style="height: 110%;">
                <div class="modal-content">
                    <div class="modal-header d-flex justify-content-center">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Event</h5>
                    </div>
                    <form action="{{ route('admin.event.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="basicInput">Name</label>
                                <input type="number" name="id" value="{{ $item->id }}" hidden>
                                <input type="text" class="form-control mt-3" id="basicInput" name="name"
                                    value="{{ $item->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Outlet</label>
                                <fieldset class="form-group mt-3">
                                    <select class="form-select" id="basicSelect" name="id_brand">
                                        <option selected hidden>Pilih Outlet</option>
                                        @foreach ($brand as $row)
                                            <option value="{{ $row->id }}"
                                                {{ $item->id_brand == $row->id ? 'selected' : '' }}>{{ $row->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Pilih Waktu</label>
                                <div class="d-flex justify-content-between mt-3">
                                    <div class="flex-start">
                                        <input type="date" class="form-control mt-3" id="basicInput" name="date"
                                            value="{{ $item->date }}">
                                    </div>
                                    <div class="flex-end">
                                        <div class="d-flex justify-content-between">
                                            <fieldset class="form-group">
                                                <select class="form-select mt-4 ml-4" id="basicSelect" name="open_time">
                                                    <option selected hidden>Pilih Waktu Mulai</option>
                                                    <option value="1" {{ $item->open_time == 1 ? 'selected' : '' }}>1
                                                    </option>
                                                    <option value="2" {{ $item->open_time == 2 ? 'selected' : '' }}>2
                                                    </option>
                                                    <option value="3" {{ $item->open_time == 3 ? 'selected' : '' }}>3
                                                    </option>
                                                    <option value="4" {{ $item->open_time == 4 ? 'selected' : '' }}>4
                                                    </option>
                                                    <option value="5" {{ $item->open_time == 5 ? 'selected' : '' }}>5
                                                    </option>
                                                    <option value="6" {{ $item->open_time == 6 ? 'selected' : '' }}>6
                                                    </option>
                                                    <option value="7" {{ $item->open_time == 7 ? 'selected' : '' }}>7
                                                    </option>
                                                    <option value="8" {{ $item->open_time == 8 ? 'selected' : '' }}>8
                                                    </option>
                                                    <option value="9" {{ $item->open_time == 9 ? 'selected' : '' }}>9
                                                    </option>
                                                    <option value="10 {{ $item->open_time == 10 ? 'selected' : '' }}">10
                                                    </option>
                                                    <option value="11 {{ $item->open_time == 11 ? 'selected' : '' }}">11
                                                    </option>
                                                    <option value="12 {{ $item->open_time == 12 ? 'selected' : '' }}">12
                                                    </option>
                                                    <option value="13 {{ $item->open_time == 13 ? 'selected' : '' }}">13
                                                    </option>
                                                    <option value="14 {{ $item->open_time == 14 ? 'selected' : '' }}">14
                                                    </option>
                                                    <option value="15 {{ $item->open_time == 15 ? 'selected' : '' }}">15
                                                    </option>
                                                    <option value="16 {{ $item->open_time == 16 ? 'selected' : '' }}">16
                                                    </option>
                                                    <option value="17 {{ $item->open_time == 17 ? 'selected' : '' }}">17
                                                    </option>
                                                    <option value="18 {{ $item->open_time == 18 ? 'selected' : '' }}">18
                                                    </option>
                                                    <option value="19 {{ $item->open_time == 19 ? 'selected' : '' }}">19
                                                    </option>
                                                    <option value="20 {{ $item->open_time == 20 ? 'selected' : '' }}">20
                                                    </option>
                                                    <option value="21 {{ $item->open_time == 21 ? 'selected' : '' }}">21
                                                    </option>
                                                    <option value="22 {{ $item->open_time == 22 ? 'selected' : '' }}">22
                                                    </option>
                                                    <option value="23 {{ $item->open_time == 23 ? 'selected' : '' }}">23
                                                    </option>
                                                    <option value="24 {{ $item->open_time == 24 ? 'selected' : '' }}">24
                                                    </option>
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <select class="form-select mt-4 ml-4" id="basicSelect" name="close_time">
                                                    <option selected hidden>Pilih Waktu Selesai</option>
                                                    <option selected hidden>Pilih Waktu Mulai</option>
                                                    <option value="1" {{ $item->close_time == 1 ? 'selected' : '' }}>
                                                        1
                                                    </option>
                                                    <option value="2" {{ $item->close_time == 2 ? 'selected' : '' }}>
                                                        2
                                                    </option>
                                                    <option value="3" {{ $item->close_time == 3 ? 'selected' : '' }}>
                                                        3
                                                    </option>
                                                    <option value="4" {{ $item->close_time == 4 ? 'selected' : '' }}>
                                                        4
                                                    </option>
                                                    <option value="5" {{ $item->close_time == 5 ? 'selected' : '' }}>
                                                        5
                                                    </option>
                                                    <option value="6" {{ $item->close_time == 6 ? 'selected' : '' }}>
                                                        6
                                                    </option>
                                                    <option value="7" {{ $item->close_time == 7 ? 'selected' : '' }}>
                                                        7
                                                    </option>
                                                    <option value="8" {{ $item->close_time == 8 ? 'selected' : '' }}>
                                                        8
                                                    </option>
                                                    <option value="9" {{ $item->close_time == 9 ? 'selected' : '' }}>
                                                        9
                                                    </option>
                                                    <option value="10 {{ $item->close_time == 10 ? 'selected' : '' }}">10
                                                    </option>
                                                    <option value="11 {{ $item->close_time == 11 ? 'selected' : '' }}">11
                                                    </option>
                                                    <option value="12 {{ $item->close_time == 12 ? 'selected' : '' }}">12
                                                    </option>
                                                    <option value="13 {{ $item->close_time == 13 ? 'selected' : '' }}">13
                                                    </option>
                                                    <option value="14 {{ $item->close_time == 14 ? 'selected' : '' }}">14
                                                    </option>
                                                    <option value="15 {{ $item->close_time == 15 ? 'selected' : '' }}">15
                                                    </option>
                                                    <option value="16 {{ $item->close_time == 16 ? 'selected' : '' }}">16
                                                    </option>
                                                    <option value="17 {{ $item->close_time == 17 ? 'selected' : '' }}">17
                                                    </option>
                                                    <option value="18 {{ $item->close_time == 18 ? 'selected' : '' }}">18
                                                    </option>
                                                    <option value="19 {{ $item->close_time == 19 ? 'selected' : '' }}">19
                                                    </option>
                                                    <option value="20 {{ $item->close_time == 20 ? 'selected' : '' }}">20
                                                    </option>
                                                    <option value="21 {{ $item->close_time == 21 ? 'selected' : '' }}">21
                                                    </option>
                                                    <option value="22 {{ $item->close_time == 22 ? 'selected' : '' }}">22
                                                    </option>
                                                    <option value="23 {{ $item->close_time == 23 ? 'selected' : '' }}">23
                                                    </option>
                                                    <option value="24 {{ $item->close_time == 24 ? 'selected' : '' }}">24
                                                    </option>
                                                </select>
                                            </fieldset>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Image</label>
                                <input type="file" class="form-control mt-3" id="basicInput" name="image">
                            </div>
                            <div class="form-group mb-3">
                                <label for="basicInput">Category</label>
                                <input type="text" class="form-control mt-3" id="basicInput" name="category"
                                    value="{{ $item->category }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Update</span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach

    {{-- MODAL Delete Outlet --}}
    {{-- @foreach ($brand as $item)
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
    @endforeach --}}



@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('admin/js/pages/ckeditor.js') }}"></script>
@endpush
