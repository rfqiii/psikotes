<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $judul ?></title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css" integrity="sha256-bLNUHzSMEvxBhoysBE7EXYlIrmo7+n7F4oJra1IgOaM=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/datepicker.css">
    <link href=" <?php echo base_url(); ?>css/dashboard.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pt-3" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>dashboard/">

                <div class="sidebar-brand-text mx-3">

                    <img src="<?php echo base_url(); ?>assets/img.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>HOME</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->



            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>dashboard/peserta">
                    <i class="fa fa-table" aria-hidden="true"></i>
                    <span>Peserta</span></a>
            </li>

            <!-- Nav Item - Pages soal Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#soalCollapse" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Soal</span>
                </a>
                <div id="soalCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a href="<?php echo base_url(); ?>dashboard/tes_1" class="collapse-item">Tes 1</a>
                        <a href="<?php echo base_url(); ?>dashboard/tes_2" class="collapse-item">Tes 2</a>
                        <a href="<?php echo base_url(); ?>dashboard/tes_3" class="collapse-item">Tes 3</a>
                        <a href="<?php echo base_url(); ?>dashboard/tes_4" class="collapse-item">Tes 4</a>
                        <a href="<?php echo base_url(); ?>dashboard/tes_5" class="collapse-item">Tes 5</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a href="<?php echo base_url(); ?>dashboard/user" class="nav-link">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                    <span>User</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <!-- Topbar -->


                <!-- Sidebar Toggle (Topbar) -->

                <div class="topbar topbar-divider bg-white border-bottom mb-2">
                    <div class="float-right m-3">
                        <a name="" id="" class="btn btn-primary" href="<?php echo base_url('admin/logout_admin'); ?>" role="button">Logout</a>
                    </div>
                </div>

                <!-- End of Topbar -->