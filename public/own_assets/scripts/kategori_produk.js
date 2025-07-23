let table = $("#basic-1").DataTable();
let jawabIndex = 1;
let modal = "", target = "", id_ctr = 0;

$("#cancel-edit").on("click", function () {
    closeModal($("#edit-data-modal"));
})

$("#cancel-add").on("click", function () {
    closeModal($("#tambah-data-modal"));
})

function alertModal(status, message = null) {
    if (status) {
        $("#alert-image").attr("src", '../../dashboard_assets/assets/images/gif/dashboard-8/successful.gif');
        $("#alert-message").text("Success");
        $("#alert-message").text(message);
    } else {
        $("#alert-image").attr("src", '../../dashboard_assets/assets/images/gif/danger.gif');
        $("#alert-message").text("Gagal");
        $("#alert-message").text(message);
    }

    $("#alert").modal('show');
}

function openModal(modal) {
    $(modal).modal('show');
}

$("#tambah-data").on("click", function () {
    $("#tambah-data-modal").modal("show");
});

$('#store').click(function (e) {
    $("#tambah-data-modal").modal("hide");
    
    let name = $("#nama").val();

    if(!name){
        modal = "#tambah-data-modal";
        alertModal(false, "Semua Field harus diisi!");
    }else{
        $.ajax({
            url: '/kategori-produk/store',
            method: 'POST',
            data: {
                '_token': $("meta[name='csrf-token']").attr('content'),
                'nama': name,
            },
            success: function (response) {
                if (response.status) {
                    $("#nama").val("");

                    alertModal(true, "Data Berhasil disimpan");

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    modal = "#tambah-data-modal";
                    alertModal(false, response.message);
                }
            },
            error: function (xhr) {
                modal = "#tambah-data-modal";
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';

                    $.each(errors, function (key, value) {
                        errorMessage += value[0] + '';
                    });

                    alertModal(false, errorMessage);
                } else {
                    alertModal(false, "Terjadi kesalahan saat mengirim data");
                }
            }
        })    
    }
});

$(document).on("click", ".edit", function () {
    let id = $(this).data('id');

    $.ajax({
        url: '/kategori-produk/edit',
        method: 'GET',
        data: {
            'id': id
        },
        success: function (response) {
            if (response.status) {
                $("#id").val(response.data.id);
                $("#edit_nama").val(response.data.nama);

                $("#edit-data-modal").modal("show");
            } else {
                alertModal(false, response.message);
            }
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';

                $.each(errors, function (key, value) {
                    errorMessage += value[0] + '';
                });

                alertModal(false, errorMessage);
            } else {
                alertModal(false, "Terjadi kesalahan saat mengirim data");
            }
        }
    })
})

$("#update").on("click", function () {
    $("#edit-data-modal").modal("hide");
    let formData = new FormData();

    formData.append("_token", $("meta[name='csrf-token']").attr('content'));
    formData.append("id", $("#id").val());
    formData.append("nama", $("#edit_nama").val());

    $.ajax({
        url: '/kategori-produk/update',
        method: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function (response) {
            if (response.status) {
                alertModal(true, "Berhasil mengubah data");
                setTimeout(() => {
                    location.reload();
                }, 2000);
            } else {
                alertModal(false, response.message);
                modal = "#edit-data-modal";
            }
        },
        error: function (xhr) {
            modal = "#edit-data-modal";
            if (xhr.status === 422) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';

                $.each(errors, function (key, value) {
                    errorMessage += value[0] + '';
                });

                alertModal(false, errorMessage);
            } else {
                alertModal(false, "Terjadi kesalahan saat mengirim data");
            }
        }
    })
})

$(document).on("click", ".delete", function () {
    id_ctr = $(this).data('id');
    $("#confirm").modal("show");
})

$("#delete-confirmed").on("click", function () {
    if(id_ctr == 0){
        alertModal(false, "Data belum dipilih");
    }else{
        $.ajax({
            url: '/kategori-produk/delete',
            method: 'POST',
            data: {
                '_token': $("meta[name='csrf-token']").attr("content"),
                'id': id_ctr,
            },
            success: function (response) {
                if (response.status) {
                    alertModal(true, "Berhasil menghapus data");
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    alertModal(false, response.message);
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    var errorMessage = '';
    
                    $.each(errors, function (key, value) {
                        errorMessage += value[0] + '';
                    });
    
                    alertModal(false, errorMessage);
                } else {
                    alertModal(false, "Terjadi kesalahan saat mengirim data");
                }
            }
        })
    }
})

$(document).on("click", "#close-alert", function () {
    if(modal){
        openModal(modal);
    }
    modal = "";
})