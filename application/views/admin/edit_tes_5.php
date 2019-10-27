<div class="container-fluid">
    <?php echo form_open('soal/edit_soal_5'); ?>
    <div class="row d-flex justify-content-center p-1">

        <div class="divide-bottom">

        </div>
        <div class="card-body">
            <div class="row text-center">
                <?php

                foreach ($soal->result_array() as $d) {
                    $soal = json_decode($d['soal']);
                    echo '<input type="hidden" value="'.$d['id_soal'].'" name="id">';
                    for ($i = 1; $i <= 6; $i++) {


                        ?>
                        <div class="col-4 mx-auto form-group">
                            <strong>
                                <p class="display-4" style="<?php echo $soal->{'option_' . $i}; ?>" id="char_<?php echo $i; ?>">R</p>
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
                                    <option value="scale(1, -1)">Horizontal</option>
                                    <option value="scale(-1, 1)">Vertikal</option>
                                </select>
                                <input type="hidden" value="<?php echo $soal->{'option_' . $i}; ?>" id="option_<?php echo $i; ?>" name="option_<?php echo $i; ?>">

                            </div>
                        </div>
                        <hr>




                <?php
                    }
                }

                ?>


            </div>

        </div>
    </div>
    <p class="text-center"><strong>Jawaban benar sebelumnya : <?php echo $d['jawaban']; ?></strong></p>
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
    <div class="card-footer mt-3">
        <div class="justify-content-center w-50 m-auto">
            <button type="submit" class="btn btn-primary btn-block">Submit <i class="fas fa-save    "></i></button>
            <button class="btn btn-primary btn-block" onclick="window.history.go(-1); return false;">Kembali <i class="fa fa-backward" aria-hidden="true"></i></button>
        </div>

    </div>
            <?php
                echo form_close();
            ?>
</div>



<script>
    var i = 8;
    for (let i = 0; i <= 8; i++) {
        $("#flip_" + i).click(function() {
            var rotasi = $("#rotasi_" + i + " option:selected").val();
            var flip = $("#flip_" + i + " option:selected").val();
            $("#char_" + i).css({
                'transform': rotasi + " " + flip
            });
            $("#option_" + i).val('transform :' + rotasi + " " + flip);
        });


    }



    // $("#rotasi_1", "#flip_1").on("change", function() {

    //     $("#option_1").removeClass();
    //     $("#option_1").addClass(css);
    //     $("#option_1").css('transform', css);
    // })
    // $("flip_1").on("change", function() {

    //     $("#option_1").removeAttr();
    //     $("#option_1").css('transform', css);
    // })
</script>