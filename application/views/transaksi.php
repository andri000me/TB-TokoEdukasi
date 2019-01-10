<!DOCTYPE html>
<html lang="en">

<head>   
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png">
    <title>Dashboard admin - Transaksi</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/default.css" id="theme" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/sidebar-nav.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Transaksi</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        </a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Data Transaksi</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                             <h3 class="box-title">No Rekening Toko Edukasi Online : <b>
                          </b></h3>
                          <h1 style="color:red">8474774323239003</h1>
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <!-- <a href="<?php echo base_url('index.php/listTransaksi/create/')?>" class="btn btn-success"><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Tambah Transaksi</a><br><br> -->
                                    <thead>
                                        <tr>
                                           <th>No</td>
                                           <th>Username</th>
                                           <th>Nama Produk</th>
                                           <th>Jumlah</th>
                                           <th>Total Harga</th>
                                           <th>Tanggal</th>
                                           <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($user as $tes) { ?>
                                            <?php if($tes['level'] == 'admin') { ?>
                                                <?php $no=1; ?>
                                                <?php foreach ($transaksi as $key) { ?>
                                                <tr>
                                                  <td><?php echo $no ?></td>
                                                  <td><?php echo $key['username'] ?></td>
                                                  <td><?php echo $key['nama_produk'] ?></td>
                                                  <td><?php echo $key['jumlah'] ?></td>
                                                  <td><?php echo $key['total_harga'] ?></td>
                                                  <td><?php echo $key['tanggal'] ?></td>       
                                                  <td>
                                                     <?php if (!empty($key['fkTransaksi'])) { ?>
                                                        <?php if($key['status'] != 'dibayar') { ?> 
                                                            <a href="<?php echo base_url('index.php/listTransaksi/paymentdesc/'.$key['id_transaksi'])?>" class="btn btn-info"><i class="fa fa-credit-card fa-fw" aria-hidden="true"></i>Pembayaran</a>
                                                        <?php } ?>
                                                  <?php } ?>
                                                  <?php if($key['status'] == 'dibayar') { ?>
                                                  <label class="label label-success">Barang telah dibayar</label>      
                                                  <?php } ?>
                                                  <a href="<?php echo base_url('index.php/listTransaksi/delete/'.$key['id_transaksi'])?>" class="btn btn-danger"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>Delete</a></td>
                                                 
                                               </tr>
                                            <?php $no++; } ?>
                                        <?php } ?>
                                        
                                        <?php if($tes['level'] == 'user'){ ?>
                                                <?php $no1=1; ?>
                                                <?php foreach ($userbytransaksi as $value) { ?>
                                                <tr>
                                                  <td><?php echo $no1 ?></td>
                                                  <!-- <td><?php echo $value['id_user'] ?></td> -->
                                                    <?php foreach ($namabyuser as $nama) { ?>
                                                        <td><?php echo $nama['username'] ?></td>
                                                    <?php } ?>
                                                    <td><?php echo $value['nama_produk'] ?></td>
                                                  <!-- <td><?php echo $value['id_produk'] ?></td> -->
                                                  <td><?php echo $value['jumlah'] ?></td>
                                                  <td><?php echo $value['total_harga'] ?></td>
                                                  <td><?php echo $value['tanggal'] ?></td>
                                                  <td>
                                                    <?php if (empty($value['fkTransaksi'])) { ?>
                                                        <a href="<?php echo base_url('index.php/listTransaksi/payment/'.$value['id_transaksi'])?>" class="btn btn-info"><i class="fa fa-credit-card fa-fw" aria-hidden="true"></i>Pembayaran</a>
                                                        <a href="<?php echo base_url('index.php/listTransaksi/delete/'.$value['id_transaksi'])?>" class="btn btn-danger"><i class="fa fa-times fa-fw" aria-hidden="true"></i>Cancel</a>
                                                    <?php }  ?>
                                                  <?php if($value['status'] == 'menunggu') { ?> 
                                                    <label class="label label-warning"> Sedang Menunggu Konfirmasi </label>
                                                  <?php } ?>
                                                  <?php if($value['status'] == 'dibayar') { ?> 
                                                    <label class="label label-success"> Barang Telah Dikirim </label>
                                                  <?php } ?>
                                                  </td>       
                                                </tr>
                                                <?php $no1++; }  ?>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Admin Toko Edukasi Online </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
   
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datatables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable();
        } );
    </script>

</body>

</html>
