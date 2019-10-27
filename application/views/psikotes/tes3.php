<div class="section mt-3">
    <div class="container">
        <div class="jumbotron rounded">
            <h1 class="display-3 font-weight-bolder title">Tes 3</h1>
            <strong>
                <p class="lead font-weight-bolder">Tes Kecepatan Dan Ketepatan Angka</p>
            </strong>
            <hr class="my-2">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <div class="container font-weight-bold text-justify">
                        <strong>
                            <p>
                                Ini adalah latihan kecepatan seseorang dalam melakukan kegiatan
                                menghitung secara sederhana di dalam pikiran <br>
                                Temukan angka/bilangan tertinggi dan terendah dalam perangkat
                                bilangan yang terdiri dari tiga angka. Kemudian,
                                tetapkan mana di antara dua bilangan itu, yang
                                terjauh selisihnya dari angka yang tersisa (bukan bilangan yang tertinggi atau terendah)
                            </p>
                        </strong>
                        berikut sebuah contoh <br>
                        <ol type="a" class="font-weight-bold">
                            <li>3</li>
                            <li>5</li>
                            <li>9</li>
                        </ol>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="text-justify">

                        <p>
                            ketiga angka pada contoh sebelumnya telah di urutkan secara benar
                            dari yang terenda ke yang tinggi. <b>Angka 3 adalah YANG TERENDAH
                                dan Angka 9 adalah angka YANG TERTINGGI. <br>
                                Angka yang mana di antara kedua bilangan tersebut yang terjauh selisihnya dari
                                angka 5? <br>
                            </b>
                            Jawabannya adalah <b>Angka 9</b><br>
                            oleh karena itu pilihlah angka 9
                        </p>
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




            <hr class="my-2">
            <div id="soal" class="fade">
                <div class="h1 d-flex justify-content-center font-weight-bold">
                    <p>
                        Selamat Mengerjakan
                    </p>
                </div>
                <?php
                echo validation_errors();
                echo form_open('koreksi/tes_3');
                ?>
                <input type="hidden" name="nama_tes" value="tes_3">
                <div class="row">
                    <?php
                    foreach ($soal->result_array() as $d) {
                        $soal = json_decode($d['soal']);
                        ?>
                        <div class="card mb-2 m-1 col-8 h5 col-md-3 mx-auto">
                            <div class="card-body">
                                <table class="table table-borderless text-center">
                                    <tr>
                                        <td><?php echo $soal->option_1; ?></td>
                                        <td><?php echo $soal->option_2; ?></td>
                                        <td><?php echo $soal->option_3; ?></td>
                                    </tr>
                                </table>
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