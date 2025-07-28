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

$('#gambar').on('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            $('#preview-logo')
                .attr('src', e.target.result)
                .show();
        }

        reader.readAsDataURL(file);
    }
});

$('#edit_gambar').on('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            $('#edit_preview-logo')
                .attr('src', e.target.result)
                .show();
        }

        reader.readAsDataURL(file);
    }
});

$("#tambah-data").on("click", function () {
    $("#tambah-data-modal").modal("show");
});

$('#store').click(function (e) {
    e.preventDefault();
    $("#tambah-data-modal").modal("hide");

    const formData = new FormData();
    const gambar = $('#gambar')[0].files[0];
    if (gambar) {
        formData.append('gambar', gambar);
    }

    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('heading_1', $('#heading_1').val());
    formData.append('heading_2', $('#heading_2').val());
    formData.append('text_tombol', $('#text_tombol').val());
    formData.append('link_tombol', $('#link_tombol').val());
    
    $.ajax({
        url: '/banners/store',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status) {
                alertModal(true, "Data Berhasil diupdate");

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
    });
});

$(document).on("click", ".edit", function () {
    let id = $(this).data('id');

    $.ajax({
        url: '/banner/edit',
        method: 'GET',
        data: {
            'id': id
        },
        success: function (response) {
            if (response.status) {
                $("#id").val(response.data.id);
                $('#edit_heading_1').val(response.data.heading_1);
                $('#edit_heading_2').val(response.data.heading_2);
                $('#edit_text_tombol').val(response.data.text_tombol);
                $('#edit_link_tombol').val(response.data.link_tombol);
                $('#edit_preview-logo').prop('src', `../../storage/${response.data.gambar}`)
                $('#edit_preview-logo').css('display', '')

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

    const formData = new FormData();
    const gambar = $('#edit_gambar')[0].files[0];
    if (gambar) {
        formData.append('gambar', gambar);
    }

    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('id', $('#id').val());
    formData.append('heading_1', $('#edit_heading_1').val());
    formData.append('heading_2', $('#edit_heading_2').val());
    formData.append('text_tombol', $('#edit_text_tombol').val());
    formData.append('link_tombol', $('#edit_link_tombol').val());

    $.ajax({
        url: '/banner/update',
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
            url: '/banner/delete',
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