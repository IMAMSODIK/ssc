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

$('#thumbnail').on('change', function () {
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

$('#edit_thumbnail').on('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            $('#preview-logo_edit')
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
    const thumbnail = $('#thumbnail')[0].files[0];
    if (thumbnail) {
        formData.append('thumbnail', thumbnail);
    }

    const konten = editor1.root.innerHTML;

    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('kategori', $('#kategori').val());
    formData.append('judul', $('#judul').val());
    formData.append('deksripsi', konten);

    $.ajax({
        url: '/aktifitas/store',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status) {
                alertModal(true, "Data berhasil disimpan");
                setTimeout(() => location.reload(), 1500);
            } else {
                alertModal(false, response.message);
            }
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                let errorMessage = '';
                $.each(xhr.responseJSON.errors, function (key, value) {
                    errorMessage += value[0] + "<br>";
                });
                alertModal(false, errorMessage);
            } else {
                alertModal(false, "Terjadi kesalahan saat mengirim data.");
            }
        }
    });
});


$(document).on("click", ".edit", function () {
    let id = $(this).data('id');

    $.ajax({
        url: '/aktifitas/edit',
        method: 'GET',
        data: { id: id },
        success: function (response) {
            if (response.status) {
                $("#id").val(response.data.id);
                $("#edit_kategori").val(response.data.kategori);
                $("#edit_judul").val(response.data.judul);
                editor1_edit.root.innerHTML = response.data.deksripsi;

                if (response.data.thumbnail) {
                    $("#preview-logo_edit").attr("src", "/storage/" + response.data.thumbnail).show();
                }

                $("#edit-data-modal").modal("show");
            } else {
                alertModal(false, response.message);
            }
        },
        error: function () {
            alertModal(false, "Terjadi kesalahan saat mengambil data");
        }
    });
});

$("#update").click(function () {
    $("#edit-data-modal").modal("hide");

    let formData = new FormData();
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('id', $("#id").val());
    formData.append('judul', $("#edit_judul").val());
    formData.append('kategori', $("#edit_kategori").val());
    formData.append('deskripsi', editor1_edit.root.innerHTML);
    const thumbnail = $("#edit_thumbnail")[0].files[0];
    if (thumbnail) {
        formData.append('thumbnail', thumbnail);
    }

    $.ajax({
        url: '/aktifitas/update',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.status) {
                $("#edit-data-modal").modal("hide");
                alertModal(true, response.message);
                setTimeout(() => location.reload(), 1500);
            } else {
                alertModal(false, response.message);
            }
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                let errorMessage = '';
                $.each(errors, function (key, value) {
                    errorMessage += value[0] + '<br>';
                });
                alertModal(false, errorMessage);
            } else {
                alertModal(false, "Gagal menyimpan data.");
            }
        }
    });
});

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