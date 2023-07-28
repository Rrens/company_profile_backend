@extends('admin.components.master')
@section('title', 'BRAND')

@section('container')
    <div class="page-heading">
        <div class="d-flex justify-content-lg-between">
            <div class="col-lg-12 col-md-6">
                <div class="flex-start">
                    <h3>Produk Kantin</h3>
                    <p>Pantau produk kantin dari sini</p>
                </div>
                <div class="flex-end">
                    <div class="btn-group mb-1 mr-3">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-pencil"></i>
                                Atur Category
                            </button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#modalTambahCategory"><i class="bi bi-plus"></i>
                                    <span>Tambah Category</span></button>
                                <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalEditCategory"><i
                                        class="bi bi-pencil"></i>
                                    <span>Edit Category</span></button>
                                <button class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#modalDeleteCategory"><i class="bi bi-trash"></i>
                                    <span>Hapus Category</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <h6 class="text-muted font-semibold">
                                        OKEE
                                    </h6>
                                    <h6 class="font-extrabold mb-0">12222</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Produk</h4>
                                <div class="d-flex justify-content-lg-between">
                                    <p>Produk yang dijual baik ready stok maupun out of stok</p>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Atur Produk
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalTambahProduk"><i class="bi bi-plus"></i>
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
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="card">
                                            <div class="card-content">
                                                <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditProduk">
                                                    <img src="" class="card-img-top img-fluid" alt=""
                                                        style="width: 350px; height: 200px">

                                                    <div class="card-body">
                                                        <h5 class="card-title"></h5>
                                                        <p class="card-text">

                                                        </p>
                                                        <p class="card-text">
                                                            Rp.
                                                        </p>
                                                    </div>
                                                </button>
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

    {{-- MODAL TAMBAH Category --}}
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

    {{-- MODAL EDIT Category --}}
    <div class="modal fade" id="modalEditCategory" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Kategori</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-content">
                                    <button class="dropdown-item" href="#" data-bs-toggle="modal"
                                        data-bs-target="#modalEditDetailCategory">
                                        <div class="card-body color-card">
                                            <h5 class="card-title text-center mt-2"></h5>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
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
            </div>
        </div>
    </div>

    {{-- MODAL EDIT DETAIL CATEGORY --}}
    <div class="modal fade" id="modalEditDetailCategory" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Category</h5>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">

                            <input type="text" hidden name="id_outlet" value="">
                            <input type="text" hidden name="id_category" value="">
                            <label for="basicInput">Nama Category</label>
                            <input type="text" class="form-control mt-3" id="basicInput"
                                name="name"value="">
                        </div>
                        <p>Pilih Makanan dan Minuman</p>
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="id_product[]"
                                                    id="ck" value="">
                                                <label class="custom-control-label" for="ck">
                                                    <img src="" alt="#" class="img-fluid">
                                                    <h5 class="mt-2"></h5>
                                                    <p></p>
                                                    <p>Rp.</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    {{-- MODAL HAPUS CATEGORY --}}
    <div class="modal fade" id="modalDeleteCategory" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">HAPUS Category</h5>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body color-card">
                                            <div class="custom-control custom-checkbox image-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="id_product_"
                                                    id="ck" value="">
                                                <label class="custom-control-label" for="ck">
                                                    <h5 class="mt-2"></h5>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    {{-- MODAL TAMBAH PRODUCT --}}
    <div class="modal fade" id="modalTambahProduk" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document" style="height: 110%;">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Produk</h5>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="basicInput">Nama Produk</label>
                            <input type="text" class="form-control mt-3" id="basicInput" name="name"
                                value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Deskripsi</label>
                            <textarea type="text" class="form-control mt-3" id="basicInput" name="description"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Harga Jual</label>
                            <input type="number" class="form-control mt-3" id="basicInput" name="original_price"
                                value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Harga Modal</label>
                            <input type="number" class="form-control mt-3" id="basicInput" name="cost_price"
                                value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Diskon</label>
                            <input type="number" class="form-control mt-3" id="basicInput" name="discount"
                                value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Kategori</label>
                            <select class="form-select" name="id_category">
                                <option hidden>Pilih Salah satu kategori
                                </option>
                                <option value="" </option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="basicInput">Upload Foto Produk</label>
                            <input class="form-control mt-2" type="file" name="image" id="formFile">
                            <p class="text-muted mt-1">ukuran foto maksimal 2mb</p>
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
@endpush
