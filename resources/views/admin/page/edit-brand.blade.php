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
            <label for="basicInput">Instagram</label>
            <input type="text" class="form-control mt-3" id="basicInput" name="instagram"
                value="{{ $brand->instagram }}">
        </div>
        <div class="form-group mb-3">
            <label for="basicInput">Address</label>
            <input type="text" class="form-control mt-3" id="basicInput" name="address" value="{{ $brand->address }}">
        </div>
        <div class="form-group mb-3">
            <label for="basicInput">Logo</label>
            <input type="file" lass="form-control mt-3" id="basicInput" name="logo">
        </div>
        <div class="form-group">
            <label for="">Tanggal</label>
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-center">
                    <fieldset class="form-group">
                        <select class="form-select" id="basicSelect" name="open_outlet_day">
                            <option {{ $brand->open_outlet_day == 'sun' ? 'selected' : '' }} value="sun">Sun</option>
                            <option {{ $brand->open_outlet_day == 'mon' ? 'selected' : '' }} value="mon">Mon</option>
                            <option {{ $brand->open_outlet_day == 'tue' ? 'selected' : '' }} value="tue">Tue</option>
                            <option {{ $brand->open_outlet_day == 'wes' ? 'selected' : '' }} value="wes">Wes</option>
                            <option {{ $brand->open_outlet_day == 'thur' ? 'selected' : '' }} value="thur">Thur</option>
                            <option {{ $brand->open_outlet_day == 'fri' ? 'selected' : '' }} value="fri">Fri</option>
                            <option {{ $brand->open_outlet_day == 'sat' ? 'selected' : '' }} value="sat">Sat</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <select class="form-select" id="basicSelect" name="open_outlet_time">
                            <option {{ $brand->open_outlet_time == '1' ? 'selected' : '' }} value="1">1</option>
                            <option {{ $brand->open_outlet_time == '2' ? 'selected' : '' }} value="2">2</option>
                            <option {{ $brand->open_outlet_time == '3' ? 'selected' : '' }} value="3">3</option>
                            <option {{ $brand->open_outlet_time == '4' ? 'selected' : '' }} value="4">4</option>
                            <option {{ $brand->open_outlet_time == '5' ? 'selected' : '' }} value="5">5</option>
                            <option {{ $brand->open_outlet_time == '6' ? 'selected' : '' }} value="6">6</option>
                            <option {{ $brand->open_outlet_time == '7' ? 'selected' : '' }} value="7">7</option>
                            <option {{ $brand->open_outlet_time == '8' ? 'selected' : '' }} value="8">8</option>
                            <option {{ $brand->open_outlet_time == '9' ? 'selected' : '' }} value="9">9</option>
                            <option {{ $brand->open_outlet_time == '10' ? 'selected' : '' }} value="10">10</option>
                            <option {{ $brand->open_outlet_time == '11' ? 'selected' : '' }} value="11">11</option>
                            <option {{ $brand->open_outlet_time == '12' ? 'selected' : '' }} value="12">12</option>
                            <option {{ $brand->open_outlet_time == '13' ? 'selected' : '' }} value="13">13</option>
                            <option {{ $brand->open_outlet_time == '14' ? 'selected' : '' }} value="14">14</option>
                            <option {{ $brand->open_outlet_time == '15' ? 'selected' : '' }} value="15">15</option>
                            <option {{ $brand->open_outlet_time == '16' ? 'selected' : '' }} value="16">16</option>
                            <option {{ $brand->open_outlet_time == '17' ? 'selected' : '' }} value="17">17</option>
                            <option {{ $brand->open_outlet_time == '18' ? 'selected' : '' }} value="18">18</option>
                            <option {{ $brand->open_outlet_time == '19' ? 'selected' : '' }} value="19">19</option>
                            <option {{ $brand->open_outlet_time == '20' ? 'selected' : '' }} value="20">20</option>
                            <option {{ $brand->open_outlet_time == '21' ? 'selected' : '' }} value="21">21</option>
                            <option {{ $brand->open_outlet_time == '22' ? 'selected' : '' }} value="22">22</option>
                            <option {{ $brand->open_outlet_time == '23' ? 'selected' : '' }} value="23">23</option>
                            <option {{ $brand->open_outlet_time == '24' ? 'selected' : '' }} value="24">24</option>
                        </select>
                    </fieldset>
                </div>
                <div class="d-flex justify-content-center">
                    <fieldset class="form-group">
                        <select class="form-select" id="basicSelect" name="close_outlet_day">
                            <option {{ $brand->close_outlet_day == 'sun' ? 'selected' : '' }} value="sun">Sun</option>
                            <option {{ $brand->close_outlet_day == 'mon' ? 'selected' : '' }} value="mon">Mon</option>
                            <option {{ $brand->close_outlet_day == 'tue' ? 'selected' : '' }} value="tue">Tue</option>
                            <option {{ $brand->close_outlet_day == 'wes' ? 'selected' : '' }} value="wes">Wes</option>
                            <option {{ $brand->close_outlet_day == 'thur' ? 'selected' : '' }} value="thur">Thur</option>
                            <option {{ $brand->close_outlet_day == 'fri' ? 'selected' : '' }} value="fri">Fri</option>
                            <option {{ $brand->close_outlet_day == 'sat' ? 'selected' : '' }} value="sat">Sat</option>
                        </select>
                    </fieldset>
                    <fieldset class="form-group">
                        <select class="form-select" id="basicSelect" name="close_outlet_time">
                            <option {{ $brand->close_outlet_time == '1' ? 'selected' : '' }} value="1">1</option>
                            <option {{ $brand->close_outlet_time == '2' ? 'selected' : '' }} value="2">2</option>
                            <option {{ $brand->close_outlet_time == '3' ? 'selected' : '' }} value="3">3</option>
                            <option {{ $brand->close_outlet_time == '4' ? 'selected' : '' }} value="4">4</option>
                            <option {{ $brand->close_outlet_time == '5' ? 'selected' : '' }} value="5">5</option>
                            <option {{ $brand->close_outlet_time == '6' ? 'selected' : '' }} value="6">6</option>
                            <option {{ $brand->close_outlet_time == '7' ? 'selected' : '' }} value="7">7</option>
                            <option {{ $brand->close_outlet_time == '8' ? 'selected' : '' }} value="8">8</option>
                            <option {{ $brand->close_outlet_time == '9' ? 'selected' : '' }} value="9">9</option>
                            <option {{ $brand->close_outlet_time == '10' ? 'selected' : '' }} value="10">10</option>
                            <option {{ $brand->close_outlet_time == '11' ? 'selected' : '' }} value="11">11</option>
                            <option {{ $brand->close_outlet_time == '12' ? 'selected' : '' }} value="12">12</option>
                            <option {{ $brand->close_outlet_time == '13' ? 'selected' : '' }} value="13">13</option>
                            <option {{ $brand->close_outlet_time == '14' ? 'selected' : '' }} value="14">14</option>
                            <option {{ $brand->close_outlet_time == '15' ? 'selected' : '' }} value="15">15</option>
                            <option {{ $brand->close_outlet_time == '16' ? 'selected' : '' }} value="16">16</option>
                            <option {{ $brand->close_outlet_time == '17' ? 'selected' : '' }} value="17">17</option>
                            <option {{ $brand->close_outlet_time == '18' ? 'selected' : '' }} value="18">18</option>
                            <option {{ $brand->close_outlet_time == '19' ? 'selected' : '' }} value="19">19</option>
                            <option {{ $brand->close_outlet_time == '20' ? 'selected' : '' }} value="20">20</option>
                            <option {{ $brand->close_outlet_time == '21' ? 'selected' : '' }} value="21">21</option>
                            <option {{ $brand->close_outlet_time == '22' ? 'selected' : '' }} value="22">22</option>
                            <option {{ $brand->close_outlet_time == '23' ? 'selected' : '' }} value="23">23</option>
                            <option {{ $brand->close_outlet_time == '24' ? 'selected' : '' }} value="24">24</option>
                        </select>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="basicInput">Phone</label>
            <input type="number" class="form-control mt-3" id="basicInput" name="phone"
                value="{{ $brand->phone }}">
        </div>
        <button type="submit" class="btn btn-warning mt-3">UPDATE</button>
    </form>

@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="{{ asset('admin/js/pages/ckeditor.js') }}"></script>
@endpush
