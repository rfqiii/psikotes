<div class="container">

    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">

                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col h5 mr-2">

                            Selamat datang <b> <?php echo $this->session->userdata('nama'); ?></b>, anda login sebagai admin
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Peserta Terdaftar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $peserta; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Seluruh Soal</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_soal; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-book fa-3x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<?php
// date_default_timezone_set("Asia/Jakarta");
// $nama = $this->session->userdata('nama');

// $tanggal = 'P'.date('dmyHis');
// $peserta = 'P';
// echo $tanggal;



?>