<div class="container-fluid">
    <?php

    $data = $user->row_array();


    ?>
    <div class="card w-50 m-auto">
        <div class="card-header">
            <h1>Edit User</h1>
        </div>

        <div class="card-body">
            <div id='password'>

            </div>

            <?php echo form_open('user_controller/edit_user');
            echo validation_errors();
            ?>
            <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
            <div class="row">
                <div class="form-group col-6">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" id="" value="<?php echo $data['nama']; ?>" aria-describedby="helpId" placeholder="">

                </div>
                <div class="form-group col-6">

                    <label for="">Username</label>
                    <input type="text" class="form-control" name="user" id="" value="<?php echo $data['user']; ?>" aria-describedby="helpId" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="" value="<?php echo $data['email']; ?>" aria-describedby="helpId" placeholder="">

            </div>

            <div class="form-group">
                <label for="">Password Baru</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <div class="form-group">
                <label for="">Konfirmasi Password Baru</label>
                <input type="password" name="passcon" id="passcon" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <div class="card-footer d-flex justify-content-end">
                <button type="submit" id='submit' class="btn btn-primary m-1">Simpan</button>
                <button type="reset" class="btn btn-secondary m-1">Reset</button>
                <button type="button" onclick="history.back()" class="btn btn-danger m-1">Batal</button>
            </div>

            <?php echo form_close(); ?>

        </div>



    </div>
</div>




<script>
    $(document).ready(function() {

        $("#passcon").keyup(function() {

            if ($("#pass").val() != $("#passcon").val()) {

                $("#password").html('<div class="alert alert-warning" role="alert"> <strong> Konfirmasi password tidak sama </strong> </div>');
                $("#submit").removeClass('show');
                $("#submit").addClass('fade');
            } else {
                $("#password").empty();
                $("#submit").removeClass('fade');
                $("#submit").addClass('show');
            }
        });
    });
</script>