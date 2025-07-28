@extends('template')

@section('content')
    <div class="page-body">
        <div class="container-fluid mt-4">
            <div class="page-title">
                <div class="row mt-4">
                    <div class="col-6">
                        <h4>Lawyer Profile</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        {{-- <button class="btn btn-success" id="tambah-data">Update Profile</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="user-profile">
                <div class="row">
                    <!-- user profile first-style start-->
                    <div class="col-sm-12">
                        <div class="card hovercard text-center">
                            <div class="cardheader"
                                style="background-image: url('{{ asset('landing_assets/images/ctr old/image.jpeg') }}');">
                            </div>
                            <div class="user-image">
                                <div class="avatar"><img alt="" src="{{ ($profile->profile?->gambar) ? asset('storage') . '/' . $profile->profile?->gambar : asset('landing_assets/logo/logo.png') }}">
                                </div>
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="ttl-info text-start">
                                                    <h6 style="margin-bottom: 10px"><i class="fa fa-envelope"></i>   Email</h6>
                                                    <span>{{ $profile->profile?->email ?? '' }}</span>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="ttl-info text-start">
                                                    <h6 style="margin-bottom: 10px"><i class="fa fa-facebook"></i>Facebook</h6>
                                                    <span>{{ $profile->profile?->facebook ?? '' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                        <div class="user-designation">
                                            <div class="title"><a target="_blank"
                                                    href=""><span>{{ $profile->name ?? '' }}</span></a>
                                            </div>
                                            <div class="desc">{{ '@' . $profile->username ?? '' }}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="ttl-info text-start">
                                                    <h6 style="margin-bottom: 10px"><i class="fa fa-instagram"></i>Instagram</h6>
                                                    <span>
                                                        @if ($profile->profile?->instagram)
                                                            <a href="{{$profile->profile?->instagram}}" class="btn btn-success" target="_blank">Instagram</a>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="ttl-info text-start">
                                                    <h6 style="margin-bottom: 10px"><i class="fa fa-whatsapp"></i> Whatsapp</h6>
                                                    <span>{{ $profile->profile?->whatsapp ?? '' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="follow">
                                    <div class="row">
                                        <div class="col-12 text-md-center border-right">
                                            <div class="follow-num counter">{{ $profile->profile?->visited ?? '' }}</div>
                                            <span>Kunjungan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- user profile first-style end-->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="tambah-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Update Profil Web</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="gambar">Foto Profile</label>
                                            <input type="file" class="form-control input-air-primary" id="gambar">
                                            <img id="preview-logo" src="" alt="Preview Foto Profile"
                                                style="display:none; max-width: 200px; margin-top:10px;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="nama">Nama Perusahaan</label>
                                            <input type="text" class="form-control input-air-primary" id="nama"
                                                placeholder="Masukkan Nama Perusahaan" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="jargon">Jargon Perusahaan</label>
                                            <textarea class="form-control input-air-primary" id="jargon" placeholder="Masukkan Jargon Perusahaan" cols="30"
                                                rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="alamat">Alamat Perusahaan</label>
                                            <textarea class="form-control input-air-primary" id="alamat" placeholder="Masukkan Alamat Perusahaan"
                                                cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="whatsapp">Whatsapp perusahaan</label>
                                            <input type="text" class="form-control input-air-primary" id="whatsapp"
                                                placeholder="Masukkan Whatsapp perusahaan" required>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="instagram">Insagram perusahaan</label>
                                            <input type="text" class="form-control input-air-primary" id="instagram"
                                                placeholder="Masukkan Insagram perusahaan" required>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="email">Email perusahaan</label>
                                            <input type="text" class="form-control input-air-primary" id="email"
                                                placeholder="Masukkan Email perusahaan" required>
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
    <script src="{{ asset('own_assets/scripts/profil_user.js') }}"></script>
@endsection
