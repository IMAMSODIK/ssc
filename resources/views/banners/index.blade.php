@extends('template')

@section('content')
    <div class="page-body">
        <div class="container-fluid mt-4">
            <div class="page-title">
                <div class="row mt-4">
                    <div class="col-6">
                        <h4>User</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button class="btn btn-success" id="tambah-data">Tambah Banner</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%; font-size: 18px" class="text-center">No. </th>
                                            <th style="font-size: 18px" class="text-center">Gambar</th>
                                            <th style="width: 20%; font-size: 18px" class="text-center">Heading 1</th>
                                            <th style="width: 25%; font-size: 18px" class="text-center">Heading 2</th>
                                            <th style="width: 15%; font-size: 18px" class="text-center">Tombol</th>
                                            <th style="width: 10%; font-size: 18px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $index = 1; @endphp
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td style="font-size: 18px" cla ss="text-center">{{ $index++ }}</td>
                                                <td style="font-size: 18px">
                                                    <img src="{{asset('storage') . '/' . $banner->gambar}}" width="150px" alt="">
                                                </td>
                                                <td style="font-size: 18px">{{ $banner->heading_1 }}</td>
                                                <td style="font-size: 18px">{{ $banner->heading_2 }}</td>
                                                <td style="font-size: 18px">
                                                    <a href="{{$banner->link_tombol}}" class="btn btn-success">{{$banner->text_tombol}}</a>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="action d-flex justify-content-center">
                                                        <li class="edit" data-id="{{ $banner->id }}"> <a
                                                                href="#"><i class="icon-pencil-alt"
                                                                    style="font-size: 25px"></i></a></li>
                                                        <li class="delete" data-id="{{ $banner->id }}"><a
                                                                href="#"><i class="icon-trash"
                                                                    style="font-size: 25px"></i></a></li>
                                                    </ul>
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

    <div class="modal fade bd-example-modal-lg" id="tambah-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Tambah Banner</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="gambar">Gambar Banner</label>
                                            <input type="file" class="form-control input-air-primary" id="gambar">
                                            <img id="preview-logo" src="" alt="Preview Logo"
                                                style="display:none; max-width: 200px; margin-top:10px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="heading_1">Heading 1</label>
                                            <input type="text" class="form-control input-air-primary" id="heading_1"
                                                placeholder="Masukkan Heading 1" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="heading_2">Heading 2</label>
                                            <input type="text" class="form-control input-air-primary" id="heading_2"
                                                placeholder="Masukkan Heading 2" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="text_tombol">Text Tombol</label>
                                            <input type="text" class="form-control input-air-primary" id="text_tombol"
                                                placeholder="Masukkan Text Tombol" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="link_tombol">Link Tombol</label>
                                            <input type="text" class="form-control input-air-primary" id="link_tombol"
                                                placeholder="Masukkan Link Tombol" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-light" type="button" id="cancel-add" value="Cancel">
                                <button class="btn btn-primary me-3" type="button" id="store">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="edit-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Edit Banner</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <input type="hidden" name="" id="id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_gambar">Gambar Banner</label>
                                            <input type="file" class="form-control input-air-primary" id="edit_gambar">
                                            <img id="edit_preview-logo" src="" alt="Preview Logo"
                                                style="display:none; max-width: 200px; margin-top:10px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_heading_1">Heading 1</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_heading_1"
                                                placeholder="Masukkan Heading 1" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_heading_2">Heading 2</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_heading_2"
                                                placeholder="Masukkan Heading 2" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_text_tombol">Text Tombol</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_text_tombol"
                                                placeholder="Masukkan Text Tombol" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_link_tombol">Link Tombol</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_link_tombol"
                                                placeholder="Masukkan Link Tombol" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-light" type="button" id="cancel-edit" value="Cancel">
                                <button class="btn btn-primary me-3" type="button" id="update">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-alert" id="alert" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenter1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img id="alert-image"></li>
                        </ul>
                        <h4 class="text-center pb-2" id="alert-title"></h4>
                        <p class="text-center" id="alert-message"></p>
                        <button class="btn btn-secondary d-flex m-auto" id="close-alert" type="button"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img id="alert-image" src="{{ asset('own_assets/icon/confirm.gif') }}" width="300px">
                            </li>
                        </ul>
                        <h4 class="text-center pb-2" id="alert-title">Hapus Data</h4>
                        <p class="text-center" id="alert-message">Apakah anda yakin ingin menghapus data?</p>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-end">
                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-md-6 d-flex justify-content-start">
                                <button class="btn btn-danger" id="delete-confirmed" type="button"
                                    data-bs-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('own_script')
    <script src="{{ asset('own_assets/scripts/banner.js') }}"></script>
@endsection
