<?php $no = 1; ?>
<div class="container-fluid">
    <center>
        <h2 class="font-weight-bolder">
            TES 3
        </h2>
    </center>

    <button type="button" class="mb-2 btn btn-primary btn-lg" data-toggle="modal" data-target="#tambah_soal">
        Tambah <i class="fa fa-plus" aria-hidden="true"></i>
    </button>

    <div class="row">
        <?php foreach ($soal->result_array() as $d) {
            $soal = json_decode($d['soal']); ?>
        <div class="card shadow mb-1 col-lg-3 col-xl-3 col-sm-6">
            <div class="card-header">
                <center>
                    <h5 class="font-weight-bold"><?php echo $no++; ?></h5>
                </center>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td align="center" class=""><?php echo $soal->option_1; ?></td>
                        <td align="center" class=""><?php echo $soal->option_2; ?></td>
                        <td align="center" class=""><?php echo $soal->option_3; ?></td>
                    </tr>
                </table>
                <hr>
                <div class="">
                    <div class="text-center mb-2">
                        Jawaban : <?php echo $d['jawaban']; ?>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="btn-group-sm">
                        <a href="<?php echo base_url() . "dashboard/edit_tes_3/" . $d['id_soal']; ?>" class="m-1 btn-block bg-primary text-gray-200 rounded btn">Edit</a>
                        <button type="button" class="m-1 btn-block bg-primary text-gray-200 rounded btn" data-toggle="modal" data-target="#modelId<?php echo $d['id_soal']; ?>">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="modelId<?php echo $d['id_soal']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo form_open('soal/hapus_soal'); ?>
                        <h4>
                            <input type="hidden" name="id_soal" value="<?php echo $d['id_soal']; ?>">
                            Apakah anda yakin akan menghapus soal ini?
                        </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal <i class="fa fa-times" aria-hidden="true"></i></button>
                        <button type="submit" class="btn btn-primary">Hapus <i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>


</div>
<div class="modal fade" id="tambah_soal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Soal 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('soal/tambah_soal_3'); ?>
            <div class="modal-body">
                <div class="row d-flex justify-content-center p-1">
                    <table class="text-center d-flex justify-content-center p-1">
                        <tr class="row">
                            <td class="col-sm-4">option 1</td>
                            <td class="col-sm-4">option 2</td>
                            <td class="col-sm-4">option 3</td>
                        </tr>
                        <tr class="row">
                            <td class="col-sm-4"><input oninput="tambah_tes_3()" type="text" name="option_1" id="input1" maxlength="2" class="form-control" style="text-align:center;"></td>
                            <td class="col-sm-4"><input oninput="tambah_tes_3()" type="text" name="option_2" id="input2" maxlength="2" class="form-control" style="text-align:center;"></td>
                            <td class="col-sm-4"><input oninput="tambah_tes_3()" type="text" name="option_3" id="input3" maxlength="2" class="form-control" style="text-align:center;"></td>
                        </tr>
                    </table>
                </div>
                <p class="text-center">Pilih Jawaban Benar</p>
                <div class="row d-flex justify-content-center btn-group" data-toggle="buttons">

                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary btn-hover">
                            <h5 id="label_radio_tes_2_1" class="d-flex justify-content-center">Option 1</h5>
                            <input type="radio" name="Jawaban" id="value_radio_tes_2_1" autocomplete="off" style="display:none;">

                        </label>
                        <label class="btn btn-primary btn-hover">
                            <input type="radio" name="Jawaban" id="value_radio_tes_2_2" autocomplete="off" style="display:none;">
                            <h5 id="label_radio_tes_2_2" class="d-flex justify-content-center">Option 2</h5>
                        </label>
                        <label class="btn btn-primary btn-hover">
                            <input type="radio" name="Jawaban" id="value_radio_tes_2_3" autocomplete="off" style="display:none;">
                            <h5 id="label_radio_tes_2_3" class="d-flex justify-content-center">Option 3</h5>
                        </label>
                    </div>




                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php
                echo form_close();
            
            ?>
        </div>
    </div>
</div>
<script>
    function tambah_tes_3() {
        var p1 = document.getElementById("input1").value;
        var p2 = document.getElementById("input2").value;
        var p3 = document.getElementById("input3").value;
        document.getElementById("label_radio_tes_2_1").innerHTML = p1;
        document.getElementById("label_radio_tes_2_2").innerHTML = p2;
        document.getElementById("label_radio_tes_2_3").innerHTML = p3;
        document.getElementById("value_radio_tes_2_1").value = p1;
        document.getElementById("value_radio_tes_2_2").value = p2;
        document.getElementById("value_radio_tes_2_3").value = p3;
    }
</script>