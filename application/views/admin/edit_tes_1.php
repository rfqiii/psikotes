<div class="container-fluid">
    <div class="card w-75 m-auto">

        <div class="card-header mb-3">
            <h1>
                <center>EDIT TES 1</center>
            </h1>
        </div>
        <div class="card-body">
            <?php echo form_open('soal/edit_soal_1'); ?>
            <?php foreach ($soal->result_array() as $d) {
                $soal = json_decode($d['soal']); ?>
            <input type="hidden" name="id_soal" value="<?php echo $d['id_soal']; ?>">

            <div class="row d-flex justify-content-center">
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_1" id="" aria-describedby="helpId" value="<?php echo $soal->soal_1; ?>">
                </div>
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_2" id="" aria-describedby="helpId" value="<?php echo $soal->soal_2; ?>">
                </div>
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_3" id="" aria-describedby="helpId" value="<?php echo $soal->soal_3; ?>">
                </div>
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_4" id="" aria-describedby="helpId" value="<?php echo $soal->soal_4; ?>">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_5" id="" aria-describedby="helpId" value="<?php echo $soal->soal_5; ?>">
                </div>
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_6" id="" aria-describedby="helpId" value="<?php echo $soal->soal_6; ?>">
                </div>
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_7" id="" aria-describedby="helpId" value="<?php echo $soal->soal_7; ?>">
                </div>
                <div class="form-group col-sm-3 m-auto col-md-3">
                    <label for=""></label>
                    <input type="text" style="text-align:center;" class="form-control" name="soal_8" id="" aria-describedby="helpId" value="<?php echo $soal->soal_8; ?>">
                </div>
            </div>
            <hr>

            <div class="row mt-2 justify-content-center">
                <label for="jawaban">Jawaban
                    <div class="form-group">
                        <select required class="custom-select" name="jawaban" id="">

                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div></label>
            </div>

            <div class="row justify-content-center w-50 m-auto">
                <button type="submit" class="btn btn-primary btn-block">Submit <i class="fas fa-save    "></i></button>
                <button class="btn btn-primary btn-block" onclick="window.history.go(-1); return false;">Kembali <i class="fa fa-backward" aria-hidden="true"></i></button>
            </div>


            <?php
            }
            form_close(); ?>
        </div>


    </div>

</div>