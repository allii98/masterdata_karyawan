<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <button class="btn btn-primary btn-xs" id="btn_add" onclick="func_add()"><i
                class="ace-icon fa fa-plus bigger-60"></i> Tambah User Baru</button>
        <div class="space"></div>
        <table class="table table-striped table-bordered table-hover dataTable no-footer" width="100%" id="tb_user">
            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>#</th>
                </tr>
            </thead>

        </table>



        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div>

<!-- modal Add -->
<div class="bootbox modal fade bootbox-prompt in" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true"
    id="modal_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><button type="button" class="bootbox-close-button close" data-dismiss="modal"
                    aria-hidden="true">×</button>
                <h4 class="modal-title">Tambah User Baru</h4>
            </div>
            <div class="modal-body">
                <div class="bootbox-body">
                    <div class="widget-main">
                        <div>
                            <label for="nama_user">Nama</label>

                            <input type="text" id="nama_user" placeholder="Nama..." class="form-control">
                        </div>

                        <hr>

                        <div>
                            <label for="username">Username</label>

                            <input type="text" id="username" placeholder="username..." class="form-control">
                        </div>

                        <hr>

                        <div>
                            <label for="role">Role</label>

                            <select class="form-control" id="role">
                                <option selected value="">Pilih</option>
                                <option value="1">Superadmin</option>
                                <option value="2">admin</option>
                                <option value="3">karyawan</option>
                            </select>
                        </div>
                        <hr>

                        <div>
                            <label for="password">Password</label>

                            <input type="password" id="password" placeholder="paswword..." class="form-control">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer"><button data-bb-handler="cancel" type="button" class="btn btn-default"
                    data-dismiss="modal">Cancel</button>
                <button data-bb-handler="confirm" type="button" class="btn btn-primary"
                    onclick="validasi_user()">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal Add -->