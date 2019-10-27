<?php $no = 1; ?>
<div class="container-fluid">
    <center>
        <h2 class="font-weight-bolder">
            TES 5
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
                <div class="card-header">
                    <center>
                        <h5 class="font-weight-bold"><?php echo $no++; ?></h5>
                    </center>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <td>
                                <p style="<?php echo $soal->option_1; ?>" class="h1">R</p>
                            </td>
                            <td>
                                <p style="<?php echo $soal->option_2; ?>" class="h1">R</p>
                            </td>
                            <td>
                                <p style="<?php echo $soal->option_3; ?>" class="h1">R</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="<?php echo $soal->option_4; ?>" class="h1">R</p>
                            </td>
                            <td>
                                <p style="<?php echo $soal->option_5; ?>" class="h1">R</p>
                            </td>
                            <td>
                                <p style="<?php echo $soal->option_6; ?>" class="h1">R</p>
                            </td>
                        </tr>
                    </table>
                    <div class="h5 text-center">
                        Jawaban Benar : <?php echo $d['jawaban']; ?>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="btn-group-sm">
                        <a href="<?php echo base_url() . "dashboard/edit_tes_5/" . $d['id_soal']; ?>" class="m-1 btn-block bg-primary text-gray-200 rounded btn">Edit</a>
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



        <?php
        }
        ?>
    </div>

</div>



<!-- Modal -->



<div class="modal fade" id="tambah_soal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Soal 5</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('soal/tambah_soal_5');
            ?>
            <div class="modal-body">
                <div class="row d-flex justify-content-center p-1">

                    <div class="divide-bottom">

                    </div>
                    <div class="card-body">
                        <h5 class="text-center">
                            Pilihlah Rotasi dahulu kemudian Flip
                        </h5>
                        <hr>
                        <div class="row text-center">

                            <?php

                            for ($i = 1; $i <= 6; $i++) {
                                ?>
                                <div class="col-4 mx-auto form-group">
                                    <strong>
                                        <p class="display-4" id="char_<?php echo $i; ?>">R</p>
                                    </strong>
                                    <div class="">

                                    </div>
                                    <div class="form-row">
                                        <select class="form-control col-5" name="" id="rotasi_<?php echo $i; ?>">
                                            <option value="rotate(0deg)">0°</option>
                                            <option value="rotate(90deg)">90°</option>
                                            <option value="rotate(180deg)">180°</option>
                                            <option value="rotate(270deg)">270°</option>
                                        </select>
                                        <select class="form-control col-7" name="" id="flip_<?php echo $i; ?>">
                                            <option value="">Normal</option>
                                            <option value="scale(1, -1)">Flip Horizontal</option>
                                            <option value="scale(-1, 1)">Flip Vertikal</option>
                                        </select>
                                        <input type="hidden" id="option_<?php echo $i; ?>" name="option_<?php echo $i; ?>">

                                    </div>
                                </div>
                                <hr>




                            <?php
                            }
                            ?>


                        </div>

                    </div>
                </div>
                <p class="text-center">Pilih Jawaban Benar</p>
                <div class="d-flex justify-content-center">
                    <select name="Jawaban" class="form-control col-3" id="">
                        <?php
                        for ($i = 0; $i <= 3; $i++) {
                            echo "<option value='" . $i . "'>" . $i . "</option>";
                        }

                        ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" id="reset" class="btn btn-primary">Reset</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

            </div>
            <?php
            echo form_close();

            ?>
        </div>
    </div>
</div>
<script>

</script>