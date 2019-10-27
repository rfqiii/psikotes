<div class="section mt-3">
    <div class="container">
        <div class="jumbotron rounded">
            <h1 class="display-3 font-weight-bolder title">Tes 4</h1>
            <strong>
                <p class="lead font-weight-bolder">Tes Memori Kerja</p>
            </strong>
            <hr class="my-2">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <div class="text-justify">
                        <strong>
                            <p class="font-weight-bold">
                                Ini adalah tentang kecepatan dan ketepatan seseorang
                                melakukan kegiatan MEMORI yang sederhana di dalam pikiran.
                                Pada saat mengerjakan tes ini, Anda haru selalu ingat urutan abjad. <br>

                            </p>
                            <p>
                                Perhatikan perangkat yang terdiri atas tiga huruf abjad. ingat selalu urutan huruf itu.
                            </p>
                            <p>
                                Kemudian, Tetapkan huruf mana di antara dua huruf,
                                yang <b>terjauh selisihnya</b> dari huruf yang terletak di tengah urutan
                            </p>
                        </strong>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-justify">
                        <strong>berikut ini adalah contoh</strong>
                        <table class="text-center w-25">
                            <tr>
                                <td class="font-weight-bold">A</td>
                                <td class="font-weight-bold">C</td>
                                <td class="font-weight-bold">G</td>
                            </tr>
                        </table>
                        <p>
                            ketiga huruf di atas telah di urutkan secara benar.
                            A berada pada urutan pertama, disusul C, dan G adalah urutan
                            terakhir berdasarkan urutan abjadnya <br>
                            Mana di antara A dan G yang merupakan huruf yang terjauh selisihnya dari huruf C?

                        </p>
                        <p class="font-weight-bold">
                            Jawabannya adalah G
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
                echo form_open('koreksi/tes_4');
                ?>
                <input type="hidden" name="nama_tes" value="tes_4">
                <div class="row">
                    <?php
                    foreach ($soal->result_array() as $d) {
                        $soal = json_decode($d['soal']);
                        ?>
                        <div class="card mb-2 m-1 col-8 h5 col-md-3 mx-auto">
                            <div class="card-body font-weight-bold">
                                <table class="table table-borderless text-center">
                                    <tr>
                                        <td class="h5 font-weight-bold"><?php echo $soal->option_1; ?></td>
                                        <td class="h5 font-weight-bold border-left border-right"><?php echo $soal->option_2; ?></td>
                                        <td class="h5 font-weight-bold"><?php echo $soal->option_3; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card-footer">
                                <input type="hidden" name="id_soal[]" value="<?php echo $d['id_soal']; ?>">
                                <div class="btn-group-toggle row d-flex justify-content-center" data-toggle="buttons">
                                    <label for="Option_<?php echo $d['id_soal']; ?>" class="btn btn-primary p-3 m-1 rounded"><?php echo $soal->option_1; ?>
                                        <input type="radio" name="jawaban[<?php echo $d['id_soal']; ?>]" value="<?php echo $soal->option_1; ?>" id="">
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