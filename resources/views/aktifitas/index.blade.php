@extends('template')

@section('own_style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="page-body">
        <div class="container-fluid mt-4">
            <div class="page-title">
                <div class="row mt-4">
                    <div class="col-6">
                        <h4>{{ $pageTitle }}</h4>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button class="btn btn-success" id="tambah-data">Tambah Aktifitas</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                @foreach ($aktifitas as $item)
                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" class="card-img-top" alt="thumbnail"
                                style="height: 200px; object-fit: cover;">

                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>

                                <div class="mb-2">
                                    <span class="badge bg-secondary text-light">
                                        {{ ucfirst(str_replace('_', ' ', $item->kategori)) }}
                                    </span>
                                </div>

                                <p class="card-text" style="overflow: hidden;">
                                    {!! Str::limit(strip_tags($item->deksripsi), 120) !!}
                                </p>
                            </div>

                            <div class="d-flex justify-content-between text-muted small m-4">
                                <div>
                                    <i class="fa fa-user"></i> {{ $item->creator->name ?? 'Admin' }}
                                </div>
                                <div>
                                    <i class="fa fa-calendar"></i> {{ $item->created_at->format('d M Y') }}
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end m-3">
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i> Preview
                                    </a>
                                    <a href="#" class="btn btn-sm btn-warning edit" data-id="{{$item->id}}">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <button type="submit" class="btn btn-sm btn-danger delete" data-id="{{$item->id}}">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="tambah-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Tambah Aktifitas</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="kategori">Kategori</label>
                                            <select class="form-control input-air-primary" id="kategori" required>
                                                <option value="">-- Pilih Kategori --</option>
                                                <option value="edukasi_hukum">Edukasi Hukum</option>
                                                <option value="berita_hukum">Berita Hukum</option>
                                                <option value="kegiatan_kantor">Kegiatan Kantor</option>
                                                <option value="pelatihan">Pelatihan & Seminar</option>
                                                <option value="konsultasi">Konsultasi Hukum</option>
                                                <option value="litigasi">Pendampingan Litigasi</option>
                                                <option value="non_litigasi">Pendampingan Non-Litigasi</option>
                                                <option value="pengabdian">Pengabdian Masyarakat</option>
                                                <option value="media">Publikasi Media</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="thumbnail">Masukkan Thumbnail Berita</label>
                                            <input type="file" class="form-control input-air-primary" id="thumbnail">
                                            <img id="preview-logo" src="" alt="Preview Logo"
                                                style="display:none; max-width: 200px; margin-top:10px;" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="judul">Judul</label>
                                            <input type="text" class="form-control input-air-primary" id="judul"
                                                placeholder="Masukkan Judul" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Detail Kegiatan</label>
                                            <div class="toolbar-box">
                                                <div id="toolbar1"><span class="ql-formats">
                                                        <select class="ql-size">
                                                            <option value="small">Small</option>
                                                            <option selected="">Normal</option>
                                                            <option value="large">Large</option>
                                                            <option value="huge">Huge</option>
                                                        </select></span><span class="ql-formats">
                                                        <button class="ql-bold">Bold</button>
                                                        <button class="ql-italic">Italic</button>
                                                        <button class="ql-underline">Underline</button>
                                                        <button class="ql-strike">Strike</button>
                                                        <button class="ql-script" value="sub"></button>
                                                        <button class="ql-script" value="super"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-header" value="1"></button>
                                                        <button class="ql-header" value="2"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-list" value="ordered">List</button>
                                                        <button class="ql-list" value="bullet">Bullet</button>
                                                        <button class="ql-indent" value="-1"></button>
                                                        <button class="ql-indent" value="+1"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-link">Link</button>
                                                        <button class="ql-image">Image</button>
                                                        <button class="ql-video">Video</button>
                                                        <select class="ql-color"></select>
                                                        <select class="ql-background"></select></span>
                                                    <!-- Add more options here--><span class="ql-formats">
                                                        <button class="ql-blockquote">Blockquote</button>
                                                        <button class="ql-code-block"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-align" value=""></button>
                                                        <button class="ql-align" value="center"></button>
                                                        <button class="ql-align" value="right"></button>
                                                        <button class="ql-align" value="justify"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-clean"></button></span>
                                                </div>
                                                <div class="quill-paragraph" id="editor1">
                                                </div>
                                            </div>
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
                    <h4 class="modal-title" id="myExtraLargeModal">Edit Aktifitas</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <input type="hidden" name="" id="id">
                            <div class="card-body">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_kategori">Kategori</label>
                                            <select class="form-control input-air-primary" id="edit_kategori" required>
                                                <option value="">-- Pilih Kategori --</option>
                                                <option value="edukasi_hukum">Edukasi Hukum</option>
                                                <option value="berita_hukum">Berita Hukum</option>
                                                <option value="kegiatan_kantor">Kegiatan Kantor</option>
                                                <option value="pelatihan">Pelatihan & Seminar</option>
                                                <option value="konsultasi">Konsultasi Hukum</option>
                                                <option value="litigasi">Pendampingan Litigasi</option>
                                                <option value="non_litigasi">Pendampingan Non-Litigasi</option>
                                                <option value="pengabdian">Pengabdian Masyarakat</option>
                                                <option value="media">Publikasi Media</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_thumbnail">Masukkan Thumbnail Berita</label>
                                            <input type="file" class="form-control input-air-primary" id="edit_thumbnail">
                                            <img id="preview-logo_edit" src="" alt="Preview Logo"
                                                style="display:none; max-width: 200px; margin-top:10px;" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_judul">Judul</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_judul"
                                                placeholder="Masukkan Judul" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="">Detail Kegiatan</label>
                                            <div class="toolbar-box">
                                                <div id="toolbar1_edit"><span class="ql-formats">
                                                        <select class="ql-size">
                                                            <option value="small">Small</option>
                                                            <option selected="">Normal</option>
                                                            <option value="large">Large</option>
                                                            <option value="huge">Huge</option>
                                                        </select></span><span class="ql-formats">
                                                        <button class="ql-bold">Bold</button>
                                                        <button class="ql-italic">Italic</button>
                                                        <button class="ql-underline">Underline</button>
                                                        <button class="ql-strike">Strike</button>
                                                        <button class="ql-script" value="sub"></button>
                                                        <button class="ql-script" value="super"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-header" value="1"></button>
                                                        <button class="ql-header" value="2"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-list" value="ordered">List</button>
                                                        <button class="ql-list" value="bullet">Bullet</button>
                                                        <button class="ql-indent" value="-1"></button>
                                                        <button class="ql-indent" value="+1"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-link">Link</button>
                                                        <button class="ql-image">Image</button>
                                                        <button class="ql-video">Video</button>
                                                        <select class="ql-color"></select>
                                                        <select class="ql-background"></select></span>
                                                    <!-- Add more options here--><span class="ql-formats">
                                                        <button class="ql-blockquote">Blockquote</button>
                                                        <button class="ql-code-block"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-align" value=""></button>
                                                        <button class="ql-align" value="center"></button>
                                                        <button class="ql-align" value="right"></button>
                                                        <button class="ql-align" value="justify"></button></span><span
                                                        class="ql-formats">
                                                        <button class="ql-clean"></button></span>
                                                </div>
                                                <div class="quill-paragraph" id="editor1_edit">
                                                </div>
                                            </div>
                                        </div>
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
    <script src="{{ asset('own_assets/scripts/aktifitas.js') }}"></script>

    <script>
        var editor1 = new Quill("#editor1", {
            modules: {
                toolbar: "#toolbar1"
            },
            theme: "snow",
            placeholder: "Masukkan detail kegiatan...",
        });

        var editor1_edit = new Quill("#editor1_edit", {
            modules: {
                toolbar: "#toolbar1_edit"
            },
            theme: "snow",
            placeholder: "Masukkan detail kegiatan...",
        });
    </script>
@endsection
