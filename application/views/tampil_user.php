<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <title>list User</title>
<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
  
<center>
   <h1>Daftar User</h1>


         <div class="container">
              <div class="jumbotron">
            
                  
                     <div class="table-responsive">
                        <table class="table table-hover">
       <a class="btn btn-primary" href="http://localhost:81/toko/index.php/ListUser/create/">Tambah</a>

 
         <thead>
            
               <td>No</td>
               <td>Id User</td>
               <td>Username</td>
               <td>Password</td>
               <td>Level</td>
               <td>Nama Lengkap</td>
               <td>Email</td>
               <td>Alamat</td>
               <td>No Telp</td>
               <td>Options</td>

            </tr>   
         </thead>

         <tbody>
            <tr>
                <?php $no=1; ?>
                        <?php foreach ($login as $key) {
                ?>
            <tr class="success">
                  <td><?php echo $no ?></td>
                  <td><?php echo $key['id_user'] ?></td>
                  <td><?php echo $key['username'] ?></td>
                  <td><?php echo $key['password'] ?></td>
                  <td><?php echo $key['level'] ?></td>
                  <td><?php echo $key['nama_lengkap'] ?></td>
                  <td><?php echo $key['email'] ?></td>
                  <td><?php echo $key['alamat'] ?></td>
                  <td><?php echo $key['no_telp'] ?></td>


                <td><a class="btn btn-info" href="http://localhost:81/toko/index.php/listUser/update/<?php echo $key['id_user'] ?>">Edit</a></td> 

                 <td><a class="btn btn-danger" href="http://localhost:81/toko/index.php/listUser/delete/<?php echo $key['id_user'] ?>">Delete</a></td></td>

       <!--            <td><a href="<?php echo base_url('index.php/login/update/'.$key[id_user])?>" class="btn btn-danger">Edit</a></td></center>

                  <td><a href="<?php echo base_url('index.php/login/delete/'.$key[id_user])?>" class="btn btn-danger">Delete</a></td></center> -->
                 

                  
                 
                               </tr>  </div>
        </div>
                </tbody>
                <?php $no++ ?>
                    <?php  } ?>
            </table>





      <!-- jQuery -->
      <script src="//code.jquery.com/jquery.js"></script>
      <!-- Bootstrap JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
       <script src="Hello World"></script>
   </body>
</html>
