<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width-device-width, initial-scale=1">
	<title>Selamat Datang</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<?php echo anchor('dashboard','Home');?>
				</li>
				<li>
					<?php echo anchor('suratmasuk','Surat Masuk');?>
				</li>
				<li>
					<?php echo anchor('suratkeluar','Surat Keluar'); ?>
				</li>
				<li>
					<?php echo anchor('rekapsurat','Rekap Surat'); ?>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<?php $this->load->view($content);?>
	</div>
	<script href="assets/js/jquery.min.js"></script>
<script href="assets/js/jquery.js"></script>

	
</body>
</html>