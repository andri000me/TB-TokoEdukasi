<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png">
    <title>Dashboard admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/default.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <img src="<?php echo base_url() ?>assets/images/admin-logo.png" alt="home" class="dark-logo">
                     </b>
                        <span class="hidden-xs">
                            Toko Edukasi
                        </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <a href="<?php echo base_url('index.php/logout/out')?>" class="btn btn-danger" style="height: 60px;"><h4 style="color: white"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Logout</h4></a>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href='<?php echo base_url("index.php/admin/"); ?>' class="waves-effect"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href='<?php echo base_url("index.php/ListProfil"); ?>' class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profil</a>
                   </li>
                    <li>
                        <a href='<?php echo base_url("index.php/listProduk"); ?>' class="waves-effect"><i class="fa fa-check-square fa-fw" aria-hidden="true"></i>Produk</a>
                   </li>
                   <?php foreach ($user as $key) { ?>
                    <?php if($key['level'] == 'admin') { ?>
                        <li>
                        <a href='<?php echo base_url("index.php/listUser"); ?>' class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"> </i>Data User</a>
                        </li>
                    <?php } } ?>
                    <li>
                        <a href='<?php echo base_url("index.php/listTransaksi"); ?>' class="waves-effect"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i>Transaksi</a>
                    </li>
                </ul>
            </div>            
        </div>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <?php foreach ($user as $key) { ?>
                        <?php if($key['level'] == 'admin') { ?>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                             <h3 class="box-title">Total User</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <?php foreach ($jumlahuser as $user) { ?>
                                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $user ?></span></li>
                                <?php } ?>
                            </ul>
   
                        </div>
                    </div>
                    <?php } } ?>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Produk</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <?php foreach ($jumlahproduk as $produk) { ?>
                                    <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?php echo $produk ?></span></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Transaksi</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                    <?php if($key['level'] == 'admin') { ?>
                                        <?php foreach ($jumlahtransaksi as $transaksi) { ?>
                                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?php echo $transaksi ?></span></li>
                                    <?php } } ?>
                                    <?php if($key['level'] == 'user') { ?>
                                        <?php foreach ($jumlahtransaksiuser as $transaksiuser) { ?>
                                        <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?php echo $transaksiuser ?></span></li>
                                    <?php } } ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Admin Toko Edukasi Online </footer>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sidebar-nav.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Counter js -->
    <script src="<?php echo base_url() ?>assets/js/jquery.waypoints.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url() ?>assets/js/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard1.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.toast.js"></script>

</body>

</html>
