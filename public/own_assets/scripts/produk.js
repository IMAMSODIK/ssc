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

let selectedFeatures = [];
let selectedFeaturesEdit = [];

$(document).on('change', '.fitur-checkbox', function(){
    let value = $(this).val();

    if ($(this).is(":checked")) {
        selectedFeatures.push(value);
    } else {
        selectedFeatures = selectedFeatures.filter(item => item !== value);
    }
    
    $("#selected-features").text(selectedFeatures.join(", ")); 
});

$(document).on('change', '.fitur-checkbox-edit', function(){
    let value = $(this).val();

    if ($(this).is(":checked")) {
        selectedFeaturesEdit.push(value);
    } else {
        selectedFeaturesEdit = selectedFeaturesEdit.filter(item => item !== value);
    }
    
    $("#selected-features").text(selectedFeaturesEdit.join(", ")); 
});

$('#store').click(function (e) {
    $("#tambah-data-modal").modal("hide");
    let formData = new FormData();

    selectedFeatures.forEach(feature => {
        formData.append('fiturs[]', feature);
    });

    formData.append('_token', $("meta[name='csrf-token']").attr('content'));
    formData.append('nama', $("#nama").val());
    formData.append('kategori', $("#kategori").val());
    formData.append('deskripsi', $("#deskripsi").val());
    formData.append('seat', $("#seat").val());
    formData.append('bags', $("#bags").val());
    formData.append('start_price', cleanRupiah($("#start_price").val()) / 100);
    formData.append('fuel', $("#fuel").val());
    formData.append('luggage', $("#luggage").val());
    formData.append('door', $("#door").val());
    formData.append('drive', $("#drive").val());
    formData.append('fuel_economy', $("#fuel_economy").val());
    formData.append('engine', $("#engine").val());
    formData.append('year', $("#year").val());
    formData.append('transmission', $("#transmission").val());
    formData.append('exterior_color', $("#exterior_color").val());
    formData.append('promo', $("#promo").val());

    let foto = $("#foto")[0].files[0];
    if (foto) {
        formData.append('foto', foto);
    }
    $.ajax({
        url: '/produk/store',
        processData: false,
        contentType: false,
        method: 'POST',
        data: formData,
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
});

$(document).on("click", ".edit", function () {
    let id = $(this).data('id');

    $.ajax({
        url: '/produk/edit',
        method: 'GET',
        data: {
            'id': id
        },
        success: function (response) {
            if (response.status) {
                $("#id").val(response.data.id);
                $("#edit_nama").val(response.data.nama);
                $("#edit_kategori").val(response.data.kategori_id);
                $("#edit_deskripsi").val(response.data.deskripsi);
                $("#edit_seat").val(response.data.seat);
                $("#edit_bags").val(response.data.bags);
                $("#edit_start_price").val(new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                }).format(response.data.start_price));
                $("#edit_fuel").val(response.data.fuel_id);
                $("#edit_luggage").val(response.data.luggage);
                $("#edit_door").val(response.data.door);
                $("#edit_drive").val(response.data.drive);
                $("#edit_fuel_economy").val(response.data.fuel_economy);
                $("#edit_engine").val(response.data.engine);
                $("#edit_year").val(response.data.year);
                $("#edit_transmission").val(response.data.transmission);
                $("#edit_color").val(response.data.exterior_color);
                $("#edit_promo").val(response.data.promo);

                $(".fitur-checkbox-edit").prop("checked", false);

                response.data.product_fitur.forEach(function (produkFitur) {
                    $(".fitur-checkbox-edit").each(function () {
                        if ($(this).val() == produkFitur.fitur_id) {
                            $(this).prop("checked", true);
                        }
                    });
                });

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

    selectedFeaturesEdit.forEach(feature => {
        formData.append('fiturs[]', feature);
    });

    console.log((selectedFeaturesEdit));

    formData.append("_token", $("meta[name='csrf-token']").attr('content'));
    formData.append("id", $("#id").val());
    formData.append("nama", $("#edit_nama").val());
    formData.append("nama", $("#edit_nama").val());
    formData.append("kategori", $("#edit_kategori").val());
    formData.append("deskripsi", $("#edit_deskripsi").val());
    formData.append("seat", $("#edit_seat").val());
    formData.append("bags", $("#edit_bags").val());
    formData.append('start_price', cleanRupiah($("#edit_start_price").val()) / 100);
    formData.append("fuel", $("#edit_fuel").val());
    formData.append("luggage", $("#edit_luggage").val());
    formData.append("door", $("#edit_door").val());
    formData.append("drive", $("#edit_drive").val());
    formData.append("fuel_economy", $("#edit_fuel_economy").val());
    formData.append("engine", $("#edit_engine").val());
    formData.append("year", $("#edit_year").val());
    formData.append("transmission", $("#edit_transmission").val());
    formData.append("exterior_color", $("#edit_color").val());
    formData.append("promo", $("#edit_promo").val());

    let foto = $("#edit_foto")[0].files[0];
    if (foto) {
        formData.append('foto', foto);
    }

    $.ajax({
        url: '/produk/update',
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
            url: '/produk/delete',
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