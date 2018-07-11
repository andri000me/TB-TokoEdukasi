<!DOCTYPE html>
<html lang="en">

<head>   
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png">
    <title>Print Produk</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="fix-header" style="background: #fff">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <div id="page-wrapper" style="margin:0px">
            <div class="container-fluid">
                <div class="row bg-title" style="margin-bottom: 0px">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <center><h2 class="page-title">Data Produk</h2></center> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row" style="margin-right: -40px;margin-left: -40px;">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th width="50">No</td>
                                            <th width="150px">Nama Produk</th>
                                            <th width="100px">Harga</th>
                                            <th width="100px">Stok</th>
                                            <th width="200px">Deskripsi</th>
                                            <th width="200">Gambar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; ?>
                                            <?php foreach ($produk as $key) { ?>
                                        <tr>                                      
                                          <td><?php echo $no ?></td>
                                          <td><?php echo $key['nama_produk'] ?></td>
                                          <td><?php echo $key['harga'] ?></td>
                                          <td><?php echo $key['stok'] ?></td>
                                          <td><?php echo $key['deskripsi'] ?></td>
                                          <td>
                                            <!--<img src="<?php echo base_url('assets/uploads/'.$key['gambar']) ?>" width=200; height=200> -->
                                            <?php echo $key['gambar'] ?>
                                            </td>
                                        </tr> 
                                        <?php $no++ ?>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>    
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
   
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>
