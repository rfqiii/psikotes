<div class="section">

    <div class="container">
        <div class="jumbotron rounded">

            <h1 class="display-3 font-weight-bolder title">Tes 1</h1>
            <strong>

                <p class="lead font-weight-bolder">Tes Deteksi Diri/Sifat</p>
            </strong>
            <hr class="my-2">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <div class="container font-weight-bold">
                        <strong>
                            <p>
                                Tes ini adalah tes DETEKSI CIRI / SIFAT. Suatu
                                latihan untuk mengukur seberapa cepat dan tepat
                                seseorang melakukan kegiatan pengecekan
                                sederhana di dalam kepala/pikirannya
                            </p>
                        </strong>
                    </div>
                    <div class="w-50 mx-auto">
                        <table class="table table-borderless text-center grey lighten-4" style="">
                            <tr class="border-top">
                                <td class="border-left border-right">A</td>
                                <td class="border-left border-right">B</td>
                                <td class="border-left border-right">D</td>
                                <td class="border-left border-right">R</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="border-left border-right">a</td>
                                <td class="border-left border-right">c</td>
                                <td class="border-left border-right">d</td>
                                <td class="border-left border-right">r</td>
                            </tr>
                        </table>
                        <table class="table table-borderless text-center">
                            <tr>
                                <td>0</td>
                                <td>1</td>
                                <td>2</td>
                                <td>
                                    <p class="border border-primary rounded-circle">3</p>
                                </td>
                                <td>4</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-justify">

                        <strong>
                            <p>
                                Ada empat pasangan huruf dalam setiap soal.
                                Dalam contoh ini pasangan huruf tersebut diberi
                                batas berupa garis di sekelilingnya
                            </p>
                            <p>
                                Pasangan pertama <b>A dan a</b> merupakan huruf yang sama.
                                <b>D dan d</b> serta <b>R dan r</b>, pasangan ketiga dan keempat juga sama.
                                Pasangan kedua, <b>B dan c</b> tidak sama.
                            </p>
                            <p>
                                Dalam contoh diatas ada <b>TIGA</b> pasangan huruf yang sama.
                                Jadi, yang dilingkari adalah angka 3, jawaban yang benar
                            </p>
                        </strong>

                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="mx-auto">

                    <button class="btn btn-primary p-auto" id="siap">
                        <h4>Saya sudah mengerti dan siap untuk melaksanakan Tes</h4>
                    </button>
                </div>

            </div>

            <div id="soal" class="fade">
                <hr class="my-2">
                <div class="h1 d-flex justify-content-center font-weight-bold">
                    <p>
                        Selamat Mengerjakan
                    </p>
                </div>
                <?php
                echo validation_errors();
                echo form_open('koreksi');
                ?>
                <input type="hidden" name="nama_tes" value="tes_1">
                <div class="row">
                    <?php
                    foreach ($soal->result_array() as $d) {
                        $soal = json_decode($d['soal']);
                        ?>
                        <div class="card mb-2 m-1 col-8 h5 col-md-3 mx-auto">
                            <div class="card-body">
                                <table class="table table-borderless text-center grey lighten-4">
                                    <tr class="border-top">
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_1; ?></td>
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_2; ?></td>
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_3; ?></td>
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_4; ?></td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_5; ?></td>
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_6; ?></td>
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_7; ?></td>
                                        <td class="border-left font-weight-bolder border-right"><?php echo $soal->soal_8; ?></td>

                                    </tr>
                                </table>
                            </div>
                            <div class="card-footer">
                                <input type="hidden" name="id_soal[]" value="<?php echo $d['id_soal']; ?>">
                                <div class="btn-group-toggle row d-flex justify-content-center" data-toggle="buttons">
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">0
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="0" id="">
                                    </label>
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">1
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="1" id="">
                                    </label>
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">2
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="2" id="">
                                    </label>
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">3
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="3" id="">
                                    </label>
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded">4
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="4" id="">
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