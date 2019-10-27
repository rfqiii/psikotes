<?php $no = 1; ?>
<div class="container-fluid">

    <center>
        <h2 class="font-weight-bolder">
            TES 2
        </h2>
    </center>

    <button type="button" class="mb-2 btn btn-primary btn-lg" data-toggle="modal" data-target="#tambah_soal">
        Tambah <i class="fa fa-plus" aria-hidden="true"></i>
    </button>
    <div class="row">


        <?php foreach ($soal->result_array() as $d) {
            $soal = json_decode($d['soal']);
            ?>



            <div class="card shadow mb-1 col-lg-3 col-xl-3 col-sm-6">

                <div class="card-header py-3">
                    <center>
                        <h5 class="font-weight-bold"><?php echo $no++; ?></h5>
                    </center>
                </div>
                <div class="card-body row">
                    <p>
                        <?php echo $soal->soal; ?>
                    </p>
                    <div class="col-6">
                        Option
                        <li><?php echo $soal->option_1; ?></li>
                        <li><?php echo $soal->option_2; ?></li>
                        <li><?php echo $soal->option_3; ?></li>
                    </div>
                    <div class="col-6">
                        Jawaban : <br>
                        <?php echo $d['jawaban']; ?>

                    </div>
                </div>

                <div class="card-footer">
                    <div class="btn-group-sm">
                        <a href="<?php echo base_url() . "dashboard/edit_tes_2/" . $d['id_soal']; ?>" class="m-1 btn-block bg-primary text-gray-200 rounded btn">Edit</a>
                        <button type="button" class="m-1 btn-block bg-primary text-gray-200 rounded btn" data-toggle="modal" data-target="#modelId<?php echo $d['id_soal']; ?>">
                            Hapus
                        </button>
                    </div>
                </div>
                <!-- hapus -->
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

            </div>
        <?php } ?>
    </div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="tambah_soal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tes 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open('soal/tambah_soal_2'); ?>
            <div class="modal-body">
                <textarea name="soal" id="editor" cols="30" rows="10"></textarea>
                <div class="form-group row justify-content-center">
                    <div class="col-6">
                        <div class="p-1">

                            <h5 class="d-flex justify-content-center">Option</h5>
                            <hr>

                            <div class="form-group">
                                <label id="" for="">Option 1</label>
                                <input type="text" class="form-control" oninput="tambah_tes_2()" name="option_1" id="input1" aria-describedby="helpId" placeholder="">

                            </div>
                            <div class="form-group">
                                <label id="" for="">Option 2</label>
                                <input type="text" class="form-control" oninput="tambah_tes_2()" name="option_2" id="input2" aria-describedby="helpId" placeholder="">

                            </div>
                            <div class="form-group">
                                <label id="" for="">Option 3</label>
                                <input type="text" class="form-control" oninput="tambah_tes_2()" name="option_3" id="input3" aria-describedby="helpId" placeholder="">

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-1">
                            <h5 class="d-flex justify-content-center">Jawaban</h5>
                            <hr>
                            <div class="form-group p-1">
                                <label for="">

                                </label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jawaban" id="value_radio_tes_2_1">
                                    <p id="label_radio_tes_2_1">Option 1</p>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jawaban" id="value_radio_tes_2_2">
                                    <p id="label_radio_tes_2_2">Option 2</p>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="jawaban" id="value_radio_tes_2_3">
                                    <p id="label_radio_tes_2_3">Option 3</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script>
    function tambah_tes_2() {
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