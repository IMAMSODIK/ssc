let table = $("#basic-1").DataTable();
let jawabIndex = 1;
let modal = "", target = "", id_ctr = 0;

function formatedDate(dateString){
    let date = new Date(dateString);
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    day = day < 10 ? '0' + day : day;
    month = month < 10 ? '0' + month : month;

    return `${day}-${month}-${year}`;
}

function generatePassword() {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < 10) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      counter += 1;
    }
    return result;
}

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
    
    let name = $("#nama").val(),
        username = $("#username").val(),
        password = $("#password").val();

    if(!name || !username || !password){
        modal = "#tambah-data-modal";
        alertModal(false, "Semua Field harus diisi!");
    }else{
        $.ajax({
            url: '/user/store',
            method: 'POST',
            data: {
                '_token': $("meta[name='csrf-token']").attr('content'),
                'name': name,
                'username': username,
                'password': password
            },
            success: function (response) {
                if (response.status) {
                    $("#nama").val(""); 
                    $("#username").val("");
                    $("#password").val("");

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
        url: '/user/edit',
        method: 'GET',
        data: {
            'id': id
        },
        success: function (response) {
            if (response.status) {
                $("#id").val(response.data.user_uniqid);
                $("#edit_nama").val(response.data.name);
                $("#edit_username").val(response.data.username);

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
    formData.append("name", $("#edit_nama").val());
    formData.append("username", $("#edit_username").val());

    $.ajax({
        url: '/user/update',
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
            url: '/user/delete',
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

$("#generate-password").on("click", function(){
    $("#password").val(generatePassword());
});

$("#copy-password").on("click", function(){
    navigator.clipboard.writeText($("#password").val()).then(function(){
        if($("#password").val() == ""){
            $("#password-error").css("display", "block");
        }else{
            $("#password-error").css("display", "none");
            $(this).text("Copied!");
            $("#store").prop("disabled", false);
        }
    }).catch(function(error){
        alert(error);
    })
})