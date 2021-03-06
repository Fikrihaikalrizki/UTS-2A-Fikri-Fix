<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								<a class="navbar-brand" href="#">UTS Web Fikrihaikal</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url() ?>">Edit Data Hero</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div>
						</nav>

					</div>	
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
						<?php echo form_open_multipart('hero/edit/'.$this->uri->segment(3)); ?>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">									
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<?php if (validation_errors()==true) {?>
										<div class="alert alert-danger">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<?php echo validation_errors();?>
										</div>	
									<?php }?>
									<h1>Edit Pemain</h1>
									<?php foreach ($data_pegawai as $key) {?>
									
									<div class="form-group">
										<label for="">Nama</label>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $key['nama'] ?>">
									</div>
									
									<div class="form-group">
										<label for="">Tanggal Lahir</label>
										<input type="date" class="form-control" id="tglLahir" name="tglLahir" style="width: 30%" value="<?php echo $key['tanggal_lahir'] ?>"> 
									</div>

									<div class="form-group">
									<label for="">Foto</label>
										<img class="img img-responsive" width="30%" height="30%" src="<?php echo base_url('') ?>assets/uploads/<?php echo $key['foto']; ?>?>">	
										<br>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jenis Hero" value="<?php echo $key['foto']; ?>" disabled>
										
										<input type="file" name="userfile" size="20" value="" />
									</div>

									<div class="form-group">
										<label for="">Nama Jenis Hero</label>
										<select name="fk_jenis" class="form-control" required>
											<option value=""> ----- </option>
											
											<?php
											foreach($data as $day){?>
												<option value="<?php echo $day['id']; ?>"><?php echo $day['keterangan']; ?></option>";
											<?php  }?>
										</select>
									</div>
									<button type="submit" class="btn btn-primary">update</button>
									<?php echo form_close(); ?>
									<?php } ?>
									</div>
								</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>