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
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Atur Brands
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalTambahOutlet"><i class="bi bi-plus"></i>
                                                    <span>Tambah Produk</span></button>
                                                {{-- <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditProduk"><i class="bi bi-pencil"></i>
                                                    <span>Edit Produk</span></button> --}}
                                                <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalDeleteProduct"><i class="bi bi-trash"></i>
                                                    <span>Hapus Produk</span></button>
                                            </div>
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
                                                        data-bs-target="#modalEditProduk">
                                                        <img src="{{ empty($thumbnail->where('id_brand', $item->id)[0]->image) ? '-' : asset('storage/uploads/thumbnail/' . $thumbnail->where('id_brand', $item->id)[0]->image) }}"
                                                            class="card-img-top img-fluid" alt=""
                                                            style="width: 350px; height: 200px">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $item->name }}</h5>
                                                            {!! $item->description !!}
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
    <div class="modal fade" id="modalTambahCategory" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Category</h5>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <input type="text" hidden name="id_outlet" value="">
                            <label for="basicInput">Nama Category</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="name"value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Deskripsi</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="description"
                                value="">
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label for="basicInput">Upload Foto Category</label>
                            <input class="form-control mt-2" type="file" name="image" id="formFile">
                        </div> --}}
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

    {{-- MODAL TAMBAH Outlet --}}
    <div class="modal fade" id="modalTambahOutlet" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Produk</h5>
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
                            <label for="basicInput">Instagram</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="instagram"
                                value="{{ old('instagram') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-center">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="open_outlet_day">
                                            <option selected hidden>Pilih Hari Mulai</option>
                                            <option value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wes">Wes</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri">Fri</option>
                                            <option value="sat">Sat</option>
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="open_outlet_time">
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
                                </div>
                                <div class="d-flex justify-content-center">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="close_outlet_day">
                                            <option selected hidden>Pilih Hari Selesai</option>
                                            <option value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wes">Wes</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri">Fri</option>
                                            <option value="sat">Sat</option>
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="close_outlet_time">
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
                        <div class="form-group mb-3">
                            <label for="basicInput">Phone</label>
                            <input type="number" class="form-control mt-3" id="basicInput" name="phone"
                                value="{{ old('phone') }}">
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

@push('scripts')
    <script src="{{ asset('admin/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('admin/js/pages/ckeditor.js') }}"></script>
@endpush
