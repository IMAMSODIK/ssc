let table = $("#basic-1").DataTable();
let jawabIndex = 1;
let modal = "", target = "", id_ctr = 0;

$("#cancel-add").on("click", function () {
    closeModal($("#tambah-data-modal"));
})

$('#logo').on('change', function () {
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
    $.ajax({
        url: '/web-profile/get-data',
        method: 'GET',
        success: function (response) {
            if (response.status) {
                $('#nama').val(response.data.nama_perusahaan);
                $('#jargon').val(response.data.jargon_perusahaan)
                $('#alamat').val(response.data.alamat)
                $('#whatsapp').val(response.data.whatsapp)
                $('#instagram').val(response.data.instagram)
                $('#email').val(response.data.email)
                $('#preview-logo').prop('src', `../../storage/${response.data.logo}`)
                $('#preview-logo').css('display', '')
                $("#tambah-data-modal").modal("show");
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
                alertModal(false, "Terjadi kesalahan saat mengambil data");
            }
        }
    });
});

$("#store").on("click", function (e) {
    e.preventDefault();
    $("#tambah-data-modal").modal("hide");

    const formData = new FormData();
    const logoInput = $('#logo')[0].files[0];
    if (logoInput) {
        formData.append('logo', logoInput);
    }

    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('nama', $('#nama').val());
    formData.append('jargon', $('#jargon').val());
    formData.append('alamat', $('#alamat').val());
    formData.append('whatsapp', $('#whatsapp').val());
    formData.append('instagram', $('#instagram').val());
    formData.append('email', $('#email').val());

    $.ajax({
        url: '/web-profile/update',
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

$(document).on("click", "#close-alert", function () {
    if (modal) {
        openModal(modal);
    }
    modal = "";
})