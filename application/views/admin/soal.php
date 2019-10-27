<div class="container-fluid">
    <nav class="nav nav-tabs nav-stacked mt-2">
        <a class="nav-link" data-toggle="pill" href="#tes1">Tes 1</a>
        <a class="nav-link" data-toggle="pill" href="#tes2">Tes 2</a>
        <a class="nav-link" data-toggle="pill" href="#tes3">Tes 3</a>
        <a class="nav-link" data-toggle="pill" href="#tes4">Tes 4</a>
        <a class="nav-link" data-toggle="pill" href="#tes5">Tes 5</a>
    </nav>
    <?php
    $no = 0;
    $no++;
    ?>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- TES 1 -->
        <div class="tab-pane active" id="tes1">

            <div class="mt-2">
                <h4 class="text-center">Tes 1
                    <hr>
                </h4>
                <div class="container-fluid mb-5">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-tes-1">
                        Tambah <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="tambah-tes-1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Soal Tes 1</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row justify-content-center">
                                        <h5>Contoh</h5>
                                    </div>
                                    <div class="row justify-content-center">

                                        <img src="<?php echo base_url(); ?>assets/img/soal1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

                                    </div>
                                    <hr>
                                    <?php echo form_open('soal/tambah_soal_1'); ?>
                                    <div class="form-group row justify-content-center">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_1" required id="">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_2" required id="">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_3" required id="">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_4" required id="">

                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_5" required id="">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_6" required id="">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_7" required id="">
                                        <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_8" required id="">

                                    </div>
                                    <div>
                                        <p class="text-center">Jawaban Benar :</p>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="form-group">
                                            <select class="custom-select" name="jawaban" id="">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>




                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main konten Tes 1 -->
                <div class="grid">
                    <div class="container-fluid">
                        <div class="row">


                            <?php
                            foreach ($soal_1->result_array() as $d) {
                                $soal = json_decode($d['soal']);

                                ?>
                            <div class="card col-lg-3 col-xl-3 col-sm-6 mr-1 mt-1 my-1 border border-primary rounded-lg">

                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="border-primary border rounded-pill d-flex justify-content-center">
                                            <?php echo $no; ?>
                                        </h4>
                                    </div>

                                    <table class="table">
                                        <tr>
                                            <td><?php echo $soal->soal_1; ?></td>
                                            <td><?php echo $soal->soal_2; ?></td>
                                            <td><?php echo $soal->soal_3; ?></td>
                                            <td><?php echo $soal->soal_4; ?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $soal->soal_5; ?></td>
                                            <td><?php echo $soal->soal_6; ?></td>
                                            <td><?php echo $soal->soal_7; ?></td>
                                            <td><?php echo $soal->soal_8; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Jawaban :</td>
                                            <td colspan="2"><?php echo $d['jawaban']; ?></td>

                                        </tr>
                                    </table>
                                    <div>
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#edit-tes-<?php echo $d['id_soal'] ?>">Edit</button>
                                        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#hapus-tes-<?php echo $d['id_soal'] ?>">Hapus</button>



                                        <div class="modal fade" id="hapus-tes-<?php echo $d['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo form_open('soal/hapus_soal_1'); ?>
                                                        <h3>Apakah yakin akan menghapus soal?</h3>
                                                        <input type="hidden" name="id_soal" value="<?php echo $d['id_soal'] ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>

                                                    </div>
                                                    <?php echo form_close(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="edit-tes-<?php echo $d['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Soal Tes 1</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row justify-content-center">
                                                            <h5>Contoh</h5>
                                                        </div>
                                                        <div class="row justify-content-center">

                                                            <img src="<?php echo base_url(); ?>assets/img/soal1.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

                                                        </div>
                                                        <hr>
                                                        <?php echo form_open('soal/edit_soal_1'); ?>
                                                        <div class="form-group row justify-content-center">
                                                            <input type="hidden" name="id_soal" value="<?php echo $d['id_soal']; ?>">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_1" id="" value="<?php echo $soal->soal_1; ?>">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_2" id="" value="<?php echo $soal->soal_2; ?>">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_3" id="" value="<?php echo $soal->soal_3; ?>">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_4" id="" value="<?php echo $soal->soal_4; ?>">

                                                        </div>
                                                        <div class="form-group row justify-content-center">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_5" id="" value="<?php echo $soal->soal_5; ?>">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_6" id="" value="<?php echo $soal->soal_6; ?>">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_7" id="" value="<?php echo $soal->soal_7; ?>">
                                                            <input type="text" class="m-1 form-control col-2" style="text-align:center;" pattern="^[A-Za-z -]+$" maxlength="1" size="1" name="soal_8" id="" value="<?php echo $soal->soal_8; ?>">

                                                        </div>
                                                        <div>
                                                            <p class="text-center">Jawaban Benar :</p>
                                                        </div>
                                                        <div class="row d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <select class="custom-select" name="jawaban" id="">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                        </div>




                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                        <button type="reset" class="btn btn-primary">Clear</button>
                                                    </div>
                                                    <?php echo form_close(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TES 2 -->
        <div class="tab-pane fade" id="tes2">
            <div class="mt-2">
                <div class="container-fluid">
                    <h4 class="text-center">
                        Tes 2
                        <hr>
                    </h4>

                </div>
                <!-- Tambah Soal Tes 2 -->
                <div class="container-fluid mb-5">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-tes-2">
                        Tambah <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="tambah-tes-2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Soal Tes 2</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open('soal/tambah_soal_2'); ?>
                                    <div class="form-group row d-flex justify-content-center p-1">
                                        <h5 class="d-flex justify-content-center">Soal</h5>

                                        <textarea name="soal" id="ckeditor" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="form-group row justify-content-center">
                                        <div class="col-6">
                                            <div class="p-1">

                                                <h5 class="d-flex justify-content-center">Option</h5>
                                                <hr>

                                                <div class="form-group">
                                                    <label id="" for="">Option 1</label>
                                                    <input type="text" class="form-control" oninput="tambah_tes_2()" name="option_1" id="input1" aria-describedby="helpId" placeholder="">

                                                </div>
                                                <div class="form-group">
                                                    <label id="" for="">Option 2</label>
                                                    <input type="text" class="form-control" oninput="tambah_tes_2()" name="option_2" id="input2" aria-describedby="helpId" placeholder="">

                                                </div>
                                                <div class="form-group">
                                                    <label id="" for="">Option 3</label>
                                                    <input type="text" class="form-control" oninput="tambah_tes_2()" name="option_3" id="input3" aria-describedby="helpId" placeholder="">

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
                                                        <input type="radio" class="form-check-input" name="jawaban" id="value_radio_tes_2_1">
                                                        <p id="label_radio_tes_2_1">Option 1</p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="jawaban" id="value_radio_tes_2_2">
                                                        <p id="label_radio_tes_2_2">Option 2</p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" name="jawaban" id="value_radio_tes_2_3">
                                                        <p id="label_radio_tes_2_3">Option 3</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Konten Tes 2 -->
                <div class="grid">
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($soal_2->result_array() as $d) {
                                $soal = json_decode($d['soal']);
                                ?>
                            <div class="card col-lg-3 col-xl-3 col-sm-6 mr-1 mt-1 my-1 border border-primary rounded-lg">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="border-primary border rounded-pill d-flex justify-content-center">
                                            <?php echo $no++; ?>
                                        </h4>
                                    </div>
                                    <div class="">
                                        <?php echo $soal->soal; ?>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <ul>
                                                <li><?php echo $soal->option_1; ?></li>
                                                <li><?php echo $soal->option_2; ?></li>
                                                <li><?php echo $soal->option_3; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            Jawaban : <?php echo $d['jawaban']; ?>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit-tes-<?php echo $d['id_soal']; ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#hapus-tes-<?php echo $d['id_soal']; ?>">
                                        Hapus
                                    </button>
                                </div>


                                <!-- Modal hapus test 2 -->
                                <div class="modal fade" id="hapus-tes-<?php echo $d['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo form_open('soal/hapus_soal_1'); ?>
                                                <h3>Apakah yakin akan menghapus soal?</h3>
                                                <input type="hidden" name="id_soal" value="<?php echo $d['id_soal'] ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Save</button>

                                            </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- modal edit tes 2 -->
                            <div class="modal fade" id="edit-tes-<?php echo $d['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Soal Tes 2</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo form_open('soal/edit_soal_2'); ?>
                                            <div class="form-group row d-flex justify-content-center p-1">
                                                <h5 class="d-flex justify-content-center">Soal</h5>
                                                <input type="hidden" name="id" value="<?php echo $d['id_soal']; ?>">
                                                <textarea name="soal" id="ckeditor2" cols="30" rows="10"><?php echo $soal->soal; ?></textarea>
                                            </div>

                                            <div class="form-group row justify-content-center">
                                                <div class="col-6">
                                                    <div class="p-1">

                                                        <h5 class="d-flex justify-content-center">Option</h5>
                                                        <hr>

                                                        <div class="form-group">
                                                            <label id="" for="">Option 1</label>
                                                            <input type="text" class="form-control" oninput="edit_tes_2()" name="option_1" id="einput1" aria-describedby="helpId" value="<?php echo $soal->option_1; ?>" placeholder="">

                                                        </div>
                                                        <div class="form-group">
                                                            <label id="" for="">Option 2</label>
                                                            <input type="text" class="form-control" oninput="edit_tes_2()" name="option_2" id="einput2" aria-describedby="helpId" value="<?php echo $soal->option_2; ?>" placeholder="">

                                                        </div>
                                                        <div class="form-group">
                                                            <label id="" for="">Option 3</label>
                                                            <input type="text" class="form-control" oninput="edit_tes_2()" name="option_3" id="einput3" aria-describedby="helpId" value="<?php echo $soal->option_3; ?>" placeholder="">

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
                                                                <input type="radio" class="form-check-input" name="jawaban" value="<?php echo $soal->option_1; ?>" id="evalue_radio_tes_2_1">
                                                                <p id="elabel_radio_tes_2_1"><?php echo $soal->option_1; ?></p>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" name="jawaban" value="<?php echo $soal->option_2; ?>" id="evalue_radio_tes_2_2">
                                                                <p id="elabel_radio_tes_2_2"><?php echo $soal->option_2; ?></p>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" name="jawaban" value="<?php echo $soal->option_3; ?>" id="evalue_radio_tes_2_3">
                                                                <p id="elabel_radio_tes_2_3"><?php echo $soal->option_3; ?></p>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-primary">Clear</button>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- TES 3 -->
        <div class="tab-pane fade" id="tes3">
            <div class="mt-2">
                <div class="container-fluid">
                    <h4 class="text-center">
                        Tes 3
                        <hr>
                    </h4>
                </div>
                <!-- Tambah Tes 3 -->
                <div class="container-fluid mb-5">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah-tes-3">
                        Tambah <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <div class="modal fade" id="tambah-tes-3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Soal Tes 3</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open('soal/tambah_soal_3'); ?>
                                    <h5 class="text-center">Soal</h5>
                                    <hr>
                                    <div class="row d-flex justify-content-center p-1">
                                        <table class="text-center d-flex justify-content-center p-1">
                                            <tr class="row">
                                                <td class="col-sm-4">option 1</td>
                                                <td class="col-sm-4">option 2</td>
                                                <td class="col-sm-4">option 3</td>
                                            </tr>
                                            <tr class="row">
                                                <td class="col-sm-4"><input oninput="tambah_tes_3()" type="text" name="option_1" id="option_3_1" maxlength="2" class="form-control" style="text-align:center;"></td>
                                                <td class="col-sm-4"><input oninput="tambah_tes_3()" type="text" name="option_2" id="option_3_2" maxlength="2" class="form-control" style="text-align:center;"></td>
                                                <td class="col-sm-4"><input oninput="tambah_tes_3()" type="text" name="option_3" id="option_3_3" maxlength="2" class="form-control" style="text-align:center;"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <hr>
                                    <p class="text-center">Jawaban Benar</p>
                                    <div class="row d-flex justify-content-center btn-group" data-toggle="buttons">

                                        <div class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-primary btn-hover">
                                                <h5 id="label_tambah_radio_tes_3_1" class="d-flex justify-content-center">Option 1</h5>
                                                <input type="radio" name="Jawaban" id="value_radio_tambah_tes_3_1" autocomplete="off" style="display:none;">

                                            </label>
                                            <label class="btn btn-primary btn-hover">
                                                <input type="radio" name="Jawaban" id="value_radio_tambah_tes_3_2" autocomplete="off" style="display:none;">
                                                <h5 id="label_tambah_radio_tes_3_2" class="d-flex justify-content-center">Option 2</h5>
                                            </label>
                                            <label class="btn btn-primary btn-hover">
                                                <input type="radio" name="Jawaban" id="value_radio_tambah_tes_3_3" autocomplete="off" style="display:none;">
                                                <h5 id="label_tambah_radio_tes_3_3" class="d-flex justify-content-center">Option 3</h5>
                                            </label>
                                        </div>




                                    </div>




                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $no_tes_3 = 1;

                            foreach ($soal_3->result_array() as $d) {
                                $soal = json_decode($d['soal']);

                                ?>
                            <div class="card col-lg-3 col-xl-3 col-sm-6 mr-1 mt-1 my-1 border border-primary rounded-lg">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4 class="border-primary border rounded-pill d-flex justify-content-center">
                                            <?php echo $no_tes_3++; ?>
                                        </h4>
                                    </div>
                                    <div class="">
                                        <table class="table">
                                            <tr>
                                                <td align="center" class=""><?php echo $soal->option_1; ?></td>
                                                <td align="center" class=""><?php echo $soal->option_2; ?></td>
                                                <td align="center" class=""><?php echo $soal->option_3; ?></td>
                                            </tr>
                                        </table>



                                    </div>
                                    <hr>
                                    <div class="">
                                        <div class="text-center mb-2">
                                            Jawaban : <?php echo $d['jawaban']; ?>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#edit-tes-<?php echo $d['id_soal']; ?>">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#hapus-tes-<?php echo $d['id_soal']; ?>">
                                        Hapus
                                    </button>
                                </div>
                                <div class="modal fade" id="edit-tes-<?php echo $d['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Soal Tes 2</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo form_open('soal/edit_soal_3'); ?>
                                                <div class="form-group row d-flex justify-content-center p-1">
                                                    <h5 class="d-flex justify-content-center">Soal</h5>
                                                    <input type="hidden" name="id" value="<?php echo $d['id_soal']; ?>">

                                                </div>

                                                <div class="form-group row justify-content-center">
                                                    <div class="col-6">
                                                        <div class="p-1">

                                                            <h5 class="d-flex justify-content-center">Option</h5>
                                                            <hr>

                                                            <div class="form-group">
                                                                <label id="" for="">Option 1</label>
                                                                <input type="text" class="form-control" oninput="edit_tes_3()" name="option_1" id="edit_option_3_1" aria-describedby="helpId" value="<?php echo $soal->option_1; ?>" placeholder="">

                                                            </div>
                                                            <div class="form-group">
                                                                <label id="" for="">Option 2</label>
                                                                <input type="text" class="form-control" oninput="edit_tes_3()" name="option_2" id="edit_option_3_2" aria-describedby="helpId" value="<?php echo $soal->option_2; ?>" placeholder="">

                                                            </div>
                                                            <div class="form-group">
                                                                <label id="" for="">Option 3</label>
                                                                <input type="text" class="form-control" oninput="edit_tes_3()" name="option_3" id="edit_option_3_3" aria-describedby="helpId" value="<?php echo $soal->option_3; ?>" placeholder="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="p-1">
                                                            <h5 class="d-flex justify-content-center">Jawaban</h5>
                                                            <hr>
                                                            <div class="form-group p-1">

                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" name="jawaban" value="<?php echo $soal->option_1; ?>" id="value_radio_edit_tes_3_1">
                                                                    <p id="label_edit_radio_tes_3_1"><?php echo $soal->option_1; ?></p>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" name="jawaban" value="<?php echo $soal->option_2; ?>" id="value_radio_edit_tes_3_2">
                                                                    <p id="label_edit_radio_tes_3_2"><?php echo $soal->option_2; ?></p>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" name="jawaban" value="<?php echo $soal->option_3; ?>" id="value_radio_edit_tes_3_3">
                                                                    <p id="label_edit_radio_tes_3_3"><?php echo $soal->option_3; ?></p>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="reset" class="btn btn-primary">Clear</button>
                                            </div>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="modal fade" id="hapus-tes-<?php echo $d['id_soal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo form_open('soal/hapus_soal_1'); ?>
                                            <h3>Apakah yakin akan menghapus soal?</h3>
                                            <input type="hidden" name="id_soal" value="<?php echo $d['id_soal'] ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Save</button>

                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- TES 4 -->
        <div class="tab-pane fade" id="tes4">
            tes4
        </div>
        <!-- TES 5 -->
        <div class="tab-pane fade" id="tes5">
            tes5
        </div>

    </div>

</div>

<script>
    // fungsi tambah tes 2
    function tambah_tes_2() {
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

    // fungsi edit tes 2
    function edit_tes_2() {
        var p1 = document.getElementById("einput1").value;
        var p2 = document.getElementById("einput2").value;
        var p3 = document.getElementById("einput3").value;
        document.getElementById("elabel_radio_tes_2_1").innerHTML = p1;
        document.getElementById("elabel_radio_tes_2_2").innerHTML = p2;
        document.getElementById("elabel_radio_tes_2_3").innerHTML = p3;
        document.getElementById("evalue_radio_tes_2_1").value = p1;
        document.getElementById("evalue_radio_tes_2_2").value = p2;
        document.getElementById("evalue_radio_tes_2_3").value = p3;
    }

    // fungsi tambah tes 3
    function tambah_tes_3() {
        var p1 = document.getElementById("option_3_1").value;
        var p2 = document.getElementById("option_3_2").value;
        var p3 = document.getElementById("option_3_3").value;
        document.getElementById("label_tambah_radio_tes_3_1").innerHTML = p1;
        document.getElementById("label_tambah_radio_tes_3_2").innerHTML = p2;
        document.getElementById("label_tambah_radio_tes_3_3").innerHTML = p3;
        document.getElementById("value_radio_tambah_tes_3_1").value = p1;
        document.getElementById("value_radio_tambah_tes_3_2").value = p2;
        document.getElementById("value_radio_tambah_tes_3_3").value = p3;
    }

    function edit_tes_3() {
        var p1 = document.getElementById("edit_option_3_1").value;
        var p2 = document.getElementById("edit_option_3_2").value;
        var p3 = document.getElementById("edit_option_3_3").value;
        document.getElementById("label_edit_radio_tes_3_1").innerHTML = p1;
        document.getElementById("label_edit_radio_tes_3_2").innerHTML = p2;
        document.getElementById("label_edit_radio_tes_3_3").innerHTML = p3;
        document.getElementById("value_radio_edit_tes_3_1").value = p1;
        document.getElementById("value_radio_edit_tes_3_2").value = p2;
        document.getElementById("value_radio_edit_tes_3_3").value = p3;
    }
</script>