<div class="container">
    <div class="container bg-primary rounded mx-auto">
        <h1 class="m-3 p-3 text-center">SELAMAT DATANG DI PSIKOTES ONLINE DPI CONSULTING</h1>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron pt-3">
                <h4 class="h1 text-center">Daftar Tes Yang Akan Di Laksanakan</h4>
                <hr>
                <ul class="h5">
                    <li class="m-4">Tes 1 : Tes Deteksi Ciri / Sifat</li>
                    <li class="m-4">Tes 2 : Tes Penalaran</li>
                    <li class="m-4">Tes 3 : Tes Keceptana Dan Ketepatan Angka</li>
                    <li class="m-4">Tes 4 : Tes Memori Kerja</li>
                    <li class="m-4">Tes 5 : Tes Orientasi</li>

                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="container jumbotron rounded p-3 mb-5">
                <h5 class="mt-2 text-center">
                    <p>Mulai psikotes dengan mengisi data diri dibawah ini</p>
                </h5>

                
                        <?php echo validation_errors(); ?>
                   

                <div class="container form-group">
                    <?php

                    echo form_open('login/login_peserta');

                    ?>
                    <div class="form-group">
                        <label for="">
                            Nomor Peserta
                        </label>
                        <input type="text" class="form-control" name="nomor" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Nama
                        </label>
                        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group date" data-provide="datepicker">
                        <label for="">
                            Tanggal Lahir
                        </label>
                        <input type="date" id="datepicker" class="form-control" name="tgl_lahir" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon / Whatsapp</label>
                        <input type="text" class="form-control" name="nomor_telepon" id="" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <div>
                            Jenis Kelamin
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Laki-Laki"> Laki-laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="Perempuan"> Perempuan
                            </label>
                        </div>
                    </div>

                    <button type="submit" name="daftar" class="mt-3 btn btn-primary btn-block">Mulai Psikotes</button>
                    <?php

                    echo form_close();

                    ?>
                </div>

            </div>
        </div>
    </div>
</div>