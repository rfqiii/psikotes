<div class="container-fluid">
    <div class="card w-75 m-auto">
        <div class="card-header mb-3">
            <h1>
                <center>EDIT TES 4</center>
            </h1>
        </div>
        <div class="card-body">
            <?php
            echo form_open('soal/edit_soal_4');
            foreach ($soal->result_array() as $d) {
                $soal = json_decode($d['soal']);   ?>
            <input type="hidden" name="id" value="<?php echo $d['id_soal'] ?>">
            <h5 class="text-center">Soal</h5>
            <hr>
            <div class="row d-flex justify-content-center p-1">
                <table class="text-center d-flex justify-content-center p-1">
                    <tr class="row">
                        <td class="col-sm-4">option 1</td>
                        <td class="col-sm-4">Soal</td>
                        <td class="col-sm-4">option 2</td>
                    </tr>
                    <tr class="row">
                        <td class="col-sm-4"><input pattern="[A-Z]" value="<?php echo $soal->option_1; ?>" oninput="edit_tes_3()" type="text" name="option_1" id="input1" maxlength="1" class="form-control" style="text-align:center;"></td>
                        <td class="col-sm-4"><input pattern="[A-Z]" value="<?php echo $soal->option_2; ?>" oninput="edit_tes_3()" type="text" name="option_2" id="input2" maxlength="1" class="form-control" style="text-align:center;"></td>
                        <td class="col-sm-4"><input pattern="[A-Z]" value="<?php echo $soal->option_3; ?>" oninput="edit_tes_3()" type="text" name="option_3" id="input3" maxlength="1" class="form-control" style="text-align:center;"></td>
                    </tr>
                </table>
            </div>
            <hr>
            <p class="text-center">Jawaban Benar</p>
            <div class="row d-flex justify-content-center btn-group" data-toggle="buttons">

                <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-primary btn-hover">
                        <h5 id="label_radio_tes_2_1" class="d-flex justify-content-center"><?php echo $soal->option_1; ?></h5>
                        <input value="<?php echo $soal->option_1; ?>" type="radio" name="Jawaban" id="value_radio_tes_2_1" autocomplete="off" style="display:none;">

                    </label>
                    <label class="btn btn-primary btn-hover">
                        <input value="<?php echo $soal->option_3; ?>" type="radio" name="Jawaban" id="value_radio_tes_2_2" autocomplete="off" style="display:none;">
                        <h5 id="label_radio_tes_2_2" class="d-flex justify-content-center"><?php echo $soal->option_3; ?></h5>
                    </label>

                </div>




            </div>

            <div class="card-footer mt-3">
                <div class="justify-content-center w-50 m-auto">
                    <button type="submit" class="btn btn-primary btn-block">Submit <i class="fas fa-save    "></i></button>
                    <button class="btn btn-primary btn-block" onclick="window.history.go(-1); return false;">Kembali <i class="fa fa-backward" aria-hidden="true"></i></button>
                </div>

            </div>




            <?php
                echo form_close();
            }
            ?>
        </div>
    </div>
</div>

<script>
    function edit_tes_3() {
        var p1 = document.getElementById("input1").value;
        var p2 = document.getElementById("input2").value;
        var p3 = document.getElementById("input3").value;
        document.getElementById("label_radio_tes_2_1").innerHTML = p1;
        document.getElementById("label_radio_tes_2_2").innerHTML = p3;
        // document.getElementById("label_radio_tes_2_3").innerHTML = p3;
        document.getElementById("value_radio_tes_2_1").value = p1;
        document.getElementById("value_radio_tes_2_2").value = p3;
        // document.getElementById("value_radio_tes_2_3").value = p3;
    }
</script>