<?php $no = 1; ?>
<div class="container-fluid">

    <center>
        <h2 class="font-weight-bolder">
            TES 1
        </h2>
    </center>

    <button class="mb-2 btn btn-primary btn-lg" data-toggle="modal" data-target="#tambah_soal_1">
        Tambah <i class="fa fa-plus" aria-hidden="true"></i>
    </button>
    <div class="row">


        <?php foreach ($soal->result_array() as $d) {
            $soal = json_decode($d['soal']);
            ?>



            <div class="card shadow mb-2 col-lg-3 col-xl-3 col-sm-6">

                <div class="card-header">
                    <center>
                        <h5 class="font-weight-bold"><?php echo $no++; ?></h5>
                    </center>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td><?php echo $soal->soal_1; ?></td>
                            <td><?php echo $soal->soal_2; ?></td>
                            <td><?php echo $soal->soal_3; ?></td>
                            <td><?php echo $soal->soal_4; ?></td>
                        </tr>
                        <tr>
                            <td><?php echo $soal->soal_5; ?></td>
                            <td><?php echo $soal->soal_6; ?></td>
                            <td><?php echo $soal->soal_7; ?></td>
                            <td><?php echo $soal->soal_8; ?></td>

                        </tr>
                        <tr>
                            <td colspan="2">Jawaban :</td>
                            <td colspan="2"><?php echo $d['jawaban']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="btn-group-sm">
                        <a href="<?php echo base_url() . "dashboard/edit_tes_1/" . $d['id_soal']; ?>" class="m-1 btn-block bg-primary text-gray-200 rounded btn">Edit</a>

                        <button type="button" class="m-1 btn-block bg-primary text-gray-200 rounded btn" data-toggle="modal" data-target="#modelId<?php echo $d['id_soal']; ?>">
                            Hapus
                        </button>

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


<!-- Button trigger modal -->


<!-- Modal -->




<div class="modal fade" id="tambah_soal_1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Soal Tes 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <h5>Contoh</h5>
                </div>
                <div class="row justify-content-center">

                    <img src="<?php echo base_url(); ?>assets/img/soal1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

                </div>
                <hr>
                <?php echo form_open('soal/tambah_soal_1'); ?>
                <div class="form-group row justify-content-center">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_1" required id="">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_2" required id="">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_3" required id="">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_4" required id="">

                </div>
                <div class="form-group row justify-content-center">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_5" required id="">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_6" required id="">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_7" required id="">
                    <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_8" required id="">

                </div>
                <div>
                    <p class="text-center">Jawaban Benar :</p>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group">
                        <select class="custom-select" name="jawaban" id="">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-primary">Clear</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>