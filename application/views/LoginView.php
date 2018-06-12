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


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Silahkan Login</h1>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<div class="container">
 			<div class="jumbotron">

 		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 		<?php echo form_open('Login/cekLogin') ?>
 		<!-- <legend>Login </legend> -->
 		<?php echo validation_errors(); ?>
 		<div class="form-group">
 			
 			<label for="">Username </label>
 			<input type="text" class="form-control" id="username" name="username" placeholder="Username"><br>

 			<label for="">Password</label>
 			<input type="password" class="form-control" id="password" name="password" placeholder="Password"></br>
 		</div>
 	
</div>
<center>
	
 		<button type="submit" class="btn btn-primary">Submit</button>
 		<br>
 			<br>
 	
 		jika anda belum mempunyai akun silahkan daftar disini*
 		<br>
 		<br>
 		 <td><a href="<?php echo base_url('index.php/login1/daftar')?>" class="btn btn-danger">Daftar</a></td></center>

 	<?php echo form_close(); ?>

	
</html>
