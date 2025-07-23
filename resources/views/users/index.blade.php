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
                        <button class="btn btn-success" id="tambah-data">Tambah User</button>
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
                                            <th style="font-size: 18px" class="text-center">Nama</th>
                                            <th style="width: 10%; font-size: 18px" class="text-center">Username</th>
                                            <th style="width: 30%; font-size: 18px" class="text-center">Info Peserta</th>
                                            <th style="width: 10%; font-size: 18px" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $index = 1; @endphp
                                        @foreach ($users as $user)
                                            <tr>
                                                <td style="font-size: 18px" cla ss="text-center">{{ $index++ }}</td>
                                                <td style="font-size: 18px">{{ $user->name }}</td>
                                                <td style="font-size: 18px">{{ $user->username }}</td>
                                                <td style="font-size: 18px">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span class="badge text-bg-success">Dibuat</span>
                                                        </div>
                                                        <div class="col-md-7">
                                                            : {{$user->created_at}}
                                                        </div>
                                                    </div>
                                                    <div class="row mt-1">
                                                        <div class="col-md-3">
                                                            <span class="badge text-bg-warning">Update</span>
                                                        </div>
                                                        <div class="col-md-7">
                                                            : {{$user->updated_at}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="action d-flex justify-content-center">
                                                        <li class="edit" data-id="{{ $user->user_uniqid }}"> <a
                                                                href="#"><i class="icon-pencil-alt"
                                                                    style="font-size: 25px"></i></a></li>
                                                        <li class="delete" data-id="{{ $user->user_uniqid }}"><a
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
                    <h4 class="modal-title" id="myExtraLargeModal">Tambah Arsip</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="deskripsi">Deskripsi File</label>
                                            <input type="text" class="form-control input-air-primary" id="deskripsi"
                                                placeholder="Deskripsi File" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="file">File</label>
                                            <input type="file" class="form-control input-air-primary" id="file"required>
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
                    <h4 class="modal-title" id="myExtraLargeModal">Edit Arsip</h4>
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
                                            <label class="form-label" for="edit_deskripsi">Deskripsi File</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_deskripsi"
                                                placeholder="Deskripsi File" required>
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
    <script src="{{ asset('own_assets/scripts/user.js') }}"></script>
@endsection
