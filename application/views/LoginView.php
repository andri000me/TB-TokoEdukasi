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
			<h2>Silahkan Login</h2>
			<div class="login">
				
				
						<?php echo form_open('login/cekLogin') ?>
		 		<!-- <legend>Login </legend> -->
		 		<?php echo validation_errors(); ?>
				
				<form role="form" action="" method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" id="username" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password" required autofocus />
					</div>
					
							
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-info btn-block" value="Log me in" />
			<?php echo form_close(); ?>


			 		
			 		</div>
				</div>
				<center>
	 				
	 			
					</div>
				</form>
			</div>
			<?php 
			 ?>
			 <center><span class="glyphicon glyphicon-user" size="20px"></span>
			 	jika Anda  Belum Mempunyai Akun 
			 	<br><a href="<?php echo base_url('index.php/daftar/')?>">silahkan daftar disini!</a></li></a></br>
			</center>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>

</body>
</html>