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
		<h1 class="text-center">Edit Data User</h1>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 		<?php echo form_open('listUser/update/'.$this->uri->segment(3)); ?> 
 		
 		<?php echo validation_errors(); ?>
 	
	<div class="container">
 			<div class="jumbotron">
 		<div class="form-group">
 			<label for="">Username</label>
 			<input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $login[0]->username ?>">
 			<label for="">Password</label>
 			<input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $login[0]->password ?>">
 			<label for="">Level</label>
 			<input type="text" class="form-control" id="level" name="level" placeholder="Level" value="<?php echo $login[0]->level ?>">
 			<label for="">Nama Lengkap</label>
 			<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $login[0]->nama_lengkap ?>">
 			<label for="">Email</label>
 			<input type="email" class="form-control" id="date" name="email" placeholder="Email" value="<?php echo $login[0]->email ?>">
 			<label for="">Alamat</label>
 			<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $login[0]->alamat ?>">
 			<label for="">No Telp</label>
 			<input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="No Telp" value="<?php echo $login[0]->no_telp ?>">


</div>

 		<div>
 		<button type="submit" class="btn btn-primary">Submit</button>
	<?php echo form_close();?>
 	</div>
 		</div>

	</body>
</html>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 	
 	