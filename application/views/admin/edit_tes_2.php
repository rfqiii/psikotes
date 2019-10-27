<div class="container-fluid">
    <div class="card w-75 m-auto">

        <div class="card-header mb-3">
            <h1>
                <center>EDIT TES 2</center>
            </h1>
        </div>
        <div class="card-body">
            <?php echo form_open('soal/edit_soal_2'); ?>
            <?php foreach ($soal->result_array() as $d) {
                $soal = json_decode($d['soal']); ?>
            <input type="hidden" name="id" value="<?php echo $d['id_soal']; ?>">
            <textarea name="soal" id="editor"><?php echo $soal->soal; ?></textarea>
            <div class="form-group row justify-content-center">
                <div class="col-6">
                    <div class="p-1">

                        <h5 class="d-flex justify-content-center">Option</h5>
                        <hr>

                        <div class="form-group">
                            <label id="" for="">Option 1</label>
                            <input type="text" class="form-control" value="<?php echo $soal->option_1; ?>" oninput="edit_tes_2()" name="option_1" id="input1" aria-describedby="helpId" placeholder="">

                        </div>
                        <div class="form-group">
                            <label id="" for="">Option 2</label>
                            <input type="text" class="form-control" value="<?php echo $soal->option_2; ?>" oninput="edit_tes_2()" name="option_2" id="input2" aria-describedby="helpId" placeholder="">

                        </div>
                        <div class="form-group">
                            <label id="" for="">Option 3</label>
                            <input type="text" class="form-control" value="<?php echo $soal->option_3; ?>" oninput="edit_tes_2()" name="option_3" id="input3" aria-describedby="helpId" placeholder="">

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
                                <input type="radio" class="form-check-input" value="<?php echo $soal->option_1; ?>" name="jawaban" id="value_radio_tes_2_1">
                                <p id="label_radio_tes_2_1"><?php echo $soal->option_1; ?></p>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" value="<?php echo $soal->option_2; ?>" name="jawaban" id="value_radio_tes_2_2">
                                <p id="label_radio_tes_2_2"><?php echo $soal->option_2; ?></p>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" value="<?php echo $soal->option_3; ?>" name="jawaban" id="value_radio_tes_2_3">
                                <p id="label_radio_tes_2_3"><?php echo $soal->option_3; ?></p>
                            </div>
                        </div>


                    </div>
                </div>
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
<script>
    function edit_tes_2() {
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