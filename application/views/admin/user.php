<div class="container-fluid">

    <?php echo validation_errors(); ?>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_user">Tambah <i class="fa fa-plus" aria-hidden="true"></i></button><br><br>
    <table class="table table-bordered table-hover w-75 mx-auto rounded bg-white">
        <tr class="text-center">
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>

            <th>Aksi</th>
        </tr>
        <?php foreach ($user->result_array() as $d) {
            ?>
            <tr>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['user']; ?></td>
                <td><?php echo $d['email']; ?></td>

                <td class="p-1 text-center">
                    <!-- edit -->
                    <a name="" id="" class="btn btn-primary" href="<?php echo base_url() . "dashboard/edit_user/" . $d['id_user']; ?>" role="button"><i class="fas fa-edit    "></i></a>
                    <!-- delete -->
                    <button name="" id="" data-toggle="modal" data-target="#hapus" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></button>

                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<!-- Modal Hapus -->

<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="container modal-content bg-white rounded">
            <div class="card-body text-center py-4">
                <h5 class="font-weight-bold">Apakah anda yakin akan menghapus user <?php echo $d['user']; ?> ?</h5>
            </div>
            <div class="card-footer text-center">
                <div class="" role="group">
                    <a name="" id="" class="btn btn-primary" href="<?php echo base_url() . "user_controller/delete_user/" . $d['id_user']; ?>" role="button">Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Tambah -->
<div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>

            </div>
            <div class="modal-body">

                <?php

                echo form_open('user_controller/input_user');

                ?>
                <div class="container input-group-lg">

                    <div class="form-group m-2">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group m-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group m-2">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group m-2">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="pass" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group m-2">
                        <label for="">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="passcon" id="passcon" aria-describedby="helpId" placeholder="">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <div id="msg"></div>
                <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $("#passcon").keyup(function() {

            if ($("#pass").val() != $("#passcon").val()) {
                $("#msg").html('<div class="alert small alert-warning alert-dismissible show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Konfirmasi password harus sama</strong></div>');
                $("#submit").addClass('fade');
            } else {
                $("#msg").html('<div class="alert small alert-warning alert-dismissible fade" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Salah</strong></div>');
                $("#submit").removeClass('fade');
            }
        });
    });
</script>