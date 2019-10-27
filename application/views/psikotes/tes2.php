<div class="section mt-3">
    <div class="container">
        <div class="jumbotron rounded">
            <h1 class="display-3 font-weight-bolder title">Tes 2</h1>
            <strong>
                <p class="lead font-weight-bolder">Tes Penalaran</p>
            </strong>
            <hr class="my-2">
            <div class="row d-flex justify-content-center">
                <div class="container font-weight-bold col-sm-6 text-justify">
                    <strong>
                        <p>
                            Tes ini adalah tes Penalaran. Setiap pertanyaan menyangkut
                            siapa lebih berat atau lebih ringan, siapa lebih tinggi atau lebih
                            pendek, perbandingan dengan orang lain di sekitarnya.
                        </p>
                    </strong>
                    <div class="card w-50 mx-auto">
                        <div class="card-body">
                            Budi lebih berat daripada Iwan <br>
                            Siapa yang terberat?
                        </div>
                        <div class="card-footer">
                            <div class="btn-group-toggle row d-flex justify-content-center" data-toggle="buttons">
                                <label for="" class="btn btn-primary p-3 m-1 rounded active">Budi
                                    <input type="radio" name="">
                                </label>
                                <label for="" class="btn btn-primary p-3 m-1 rounded">Iwan
                                    <input type="radio" name="">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <strong>Pelajari baik-baik contoh berikut.</strong><br><br>
                    <div class="text-justify">

                        <strong>
                            <b>Satu perangkat pertanyaan PENALARAN yang mudah akan berbentuk demikian :</b>
                            <p>
                                Budi lebih berat daripada Iwan <br>
                                Siapa yang terberat?
                                <ol type="A">
                                    <li class="font-weight-bold"><b>Budi</b></li>
                                    <li>Iwan</li>
                                </ol>
                            </p>
                            <p>
                                Huruf <b>A. Budi</b> bercetak tebal karena jawaban terebut benar
                            </p>
                        </strong>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="mx-auto">

                    <button class="btn btn-primary p-auto" id="siap">
                        <h4>Saya sudah mengerti dan siap untuk melaksanakan Tes</h4>
                    </button>
                </div>

            </div>





            <hr class="my-4">
            <div id="soal" class="fade">
                <div class="h1 d-flex justify-content-center font-weight-bold">
                    <p>
                        Selamat Mengerjakan
                    </p>
                </div>
                <?php
                echo validation_errors();
                echo form_open('koreksi/tes_2');
                ?>
                <input type="hidden" name="nama_tes" value="tes_2">
                <div class="row">
                    <?php
                    foreach ($soal->result_array() as $d) {
                        $soal = json_decode($d['soal']);
                        ?>
                        <div class="card mb-2 m-1 col-8 col-md-3 mx-auto h5 px-1">
                            <div class="card-body px-3">
                                <?php echo $soal->soal; ?>
                            </div>
                            <div class="card-footer">
                                <input type="hidden" name="id_soal[]" value="<?php echo $d['id_soal']; ?>">
                                <div class="btn-group-toggle row d-flex justify-content-center" data-toggle="buttons">
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded"><?php echo $soal->option_1; ?>
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="<?php echo $soal->option_1; ?>" id="">
                                    </label>
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded"><?php echo $soal->option_2; ?>
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="<?php echo $soal->option_2; ?>" id="">
                                    </label>
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded"><?php echo $soal->option_3; ?>
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="<?php echo $soal->option_3; ?>" id="">
                                    </label>


                                </div>
                            </div>


                        </div>

                    <?php } ?>
                </div>
                <hr>
                <div class="d-flex justify-content-center">
                    <button type="submit" id="submit" class="btn btn-primary">Tes Selanjutnya</button>
                </div>
                <?php
                echo form_close();

                ?>
            </div>


        </div>
    </div>

</div>