<?php<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Form Login</title>
	<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" media="all"  type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-theme.css">
	</head>
	<body>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color:#eee;
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="container">
		
		
		
		<div class="row">
			<h2>Form Registrasi</h2>
			<div class="login">
 		<?php echo form_open('daftar/cekDaftar') ?>
 		
 		<legend>Silahkan Registrasi</legend>
 		<?php echo validation_errors(); ?>
 		<div class="form-group">

 			<form role="form" action="" method="post">
					<div class="form-group">
						<input type="text"  id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="text"  id="username" name="username"  class="form-control" id="username" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" id="konfirmasi" name="konfirmasi"  class="form-control" id="password" placeholder="Konfirmasi Password" required autofocus />
					</div>
					<div class="form-group">
						<input type="text" id="email" name="email" class="form-control"  placeholder="Email" required autofocus />
					</div>
					<div class="form-group">
						<input type="text" id="alamat" name="alamat" class="form-control"  placeholder="Alamat" required autofocus />
					</div>
					<div class="form-group">
						<input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="Nomor Telepon" required autofocus />
					</div>

 		</div>
 	<button type="submit" class="btn btn-success">Daftar</button>
 	<a href="<?php echo base_url('index.php/login/')?>" class="btn btn-danger" >Back</a></td>
</div>
<center>
 		
 		
 		
 		
 	<?php echo form_close(); ?>

	
</html>
