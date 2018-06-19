<?php
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
		<h1 class="text-center">Silahkan Login</h1>
				
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<div class="container">
 			<div class="jumbotron">
 				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		 		<?php echo form_open('login/cekLogin') ?>
		 		<!-- <legend>Login </legend> -->
		 		<?php echo validation_errors(); ?>
			 		<div class="form-group">
 						<label for="username">Username </label>
			 			<input type="text" class="form-control" id="username" name="username" placeholder="Username"><br>
			 		</div>
			 		<div class="form-group">
			 			<label for="password">Password</label>
			 			<input type="password" class="form-control" id="password" name="password" placeholder="Password"></br>
			 		</div>
				</div>
				<center>
	 				<button type="submit" class="btn btn-primary">Submit</button>
	 			<?php echo form_close(); ?>
	 				<br>
	 				<br>
	 	
			 		jika anda belum mempunyai akun silahkan daftar disini*
	 				<br>
			 		<br>
	 				<td><a href="<?php echo base_url('index.php/daftar/')?>" class="btn btn-danger">Daftar</a></td>
 				</center>
 			</div>
 		</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
