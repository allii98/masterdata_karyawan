<script type="text/javascript">
$(document).ready(function() {
    data_user();
});

function func_can(id_user) {
    $('#nama_' + id_user).prop('type', 'hidden');
    $('#username_' + id_user).prop('type', 'hidden');
    $('#labelnm_' + id_user).show();
    $('#labelusr_' + id_user).show();
    $('#btn_edit_' + id_user).show();
    $('#btn_del_' + id_user).show();
    $('#btn_save_' + id_user).hide();
    $('#btn_can_' + id_user).hide();
}

function func_edit(id_user) {
    $('#nama_' + id_user).prop('type', 'text');
    $('#username_' + id_user).prop('type', 'text');

    $('#labelnm_' + id_user).hide();
    $('#labelusr_' + id_user).hide();

    $('#btn_edit_' + id_user).hide();
    $('#btn_del_' + id_user).hide();
    $('#btn_save_' + id_user).show();
    $('#btn_can_' + id_user).show();
}

function data_user() {

    $('#tb_user').DataTable().destroy();
    var dt = $('#tb_user').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo site_url('User/list_user'); ?>",
            "type": "POST",
            "data": {},
            "error": function(request) {
                console.log(request.responseText);
            }
        },

        "columnDefs": [{
            "targets": [],
            "orderable": false,
        }, ],
        "language": {
            "infoFiltered": ""
        },
        "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [4]
            },
            {
                "bSearchable": false,
                "aTargets": [4]
            }
        ]

    });
    var rel = setInterval(function() {
        $('#tb_user').DataTable().ajax.reload();
        clearInterval(rel);
    }, 100);

}

function func_add() {
    $('#modal_add').modal('show');
}

function validasi_user() {
    var nama = $('#nama_user').val();
    var username = $('#username').val();
    var role = $('#role').val();
    var password = $('#password').val();

    if ($('#nama_user').val() == '') {
        $.gritter.add({
            title: 'Oppss',
            text: 'Nama tdak boleh kosong!',
            class_name: 'gritter-error'
        });
        $("#nama_user").focus();

    } else if ($('#username').val() == '') {
        $.gritter.add({
            title: 'Oppss',
            text: 'Username tdak boleh kosong!',
            class_name: 'gritter-error'
        });
        $("#username").focus();

    } else if ($('#role').val() == '') {
        $.gritter.add({
            title: 'Oppss',
            text: 'Silahkan pilih role!',
            class_name: 'gritter-error'
        });
        $("#role").focus();

    } else if ($('#password').val() == '') {
        $.gritter.add({
            title: 'Oppss',
            text: 'Password tdak boleh kosong!',
            class_name: 'gritter-error'
        });
        $("#password").focus();

    } else {
        save_user()
    }


}

function save_user() {
    $.ajax({
        type: "POST",
        url: "<?= base_url('User/save') ?>",
        data: {
            nama: $('#nama_user').val(),
            username: $('#username').val(),
            level: $('#role').val(),
            password: $('#password').val()
        },
        dataType: "JSON",
        success: function(response) {
            $('#modal_add').modal('hide');
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Berhasil!',
                // (string | mandatory) the text inside the notification
                text: 'Data berhasil disimpan',
                class_name: 'gritter-success'
            });
            data_user();
        },
        error: function(request) {
            console.log(request.responseText);
        }
    });
}
</script>