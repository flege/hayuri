<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hayuri Hijab</title>

	<!-- Global stylesheets -->
	<link href="<?php echo HTTP_PATH; ?>css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo HTTP_PATH; ?>css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo HTTP_PATH; ?>css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo HTTP_PATH; ?>css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo HTTP_PATH; ?>css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/plugins/forms/tags/tokenfield.min.js"></script>

	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

</head>
<!-- Body with top padding -->
<body class="navbar-top">
	<!-- Top fixed navbar -->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url()?>">HAYURI</a>
			</div>
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
					<select class="form-control">
						<option>Semua Kategori</option>
						<option>Kategori 1</option>
						<option>Kategori 2</option>
						<option>Kategori 3</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default"><i class="icon-search4 text-muted text-size-base"></i></button>
			</form>
			<div class="nav navbar-nav navbar-right">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?php echo base_url()?>favorite">
							<i class="glyphicon glyphicon-heart"></i>
							<span class="badge bg-warning-400">2</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url()?>cart">
							<i class="icon-cart"></i>
							<span class="badge bg-warning-300">20</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url()?>login">
							<i class="glyphicon glyphicon-user"></i>
							Login
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /top fixed navbar -->
	<!-- Square thumbs -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<div class="content-wrapper">
				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Favorite</span></h4>

							<ul class="breadcrumb position-right">
								<li><a href="<?php echo base_url()?>">Home</a></li>
								<li class="active">Favorite</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /page header -->
				<div class="content">
					<div class="content-group">
						<div class="row">
							<?php
								for($i=0; $i<6; $i++){
							?>
							<div class="col-lg-3 col-sm-6">
								<div class="thumbnail">
									<div class="thumb">
										<img src="assets/images/placeholder.jpg" alt="">
										<div class="caption-overflow">
											<span>
												<a href="assets/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-cart-add"></i></a>
												<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i class="icon-heart5"></i></a>
											</span>
										</div>
									</div>
									<div class="caption">
										<h6 class="no-margin-top text-semibold"><a href="#" class="text-default">Nama Produk</a> <a href="#" class="text-muted"><i class="icon-cart-add pull-right"></i></a></h6>
										<small class="text-bold">Rp100.000</small>
									</div>
								</div>
							</div>
							<?php
								}
							?>
						</div>
						<nav aria-label="Page navigation">
							<ul class="pagination pull-right" style="margin: 0px">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									</a>
								</li>
						  </ul>
						</nav>
						<hr/>
					</div>
					<div class="footer text-muted">
						&copy; 2017. <a href="#">Hayuri Hijab</a> by <a href="#" target="_blank">Hayuri</a>
					</div>
					<!-- /footer -->
				</div>
			</div>
		</div>
	</div>
</body>
<!-- /body with top padding -->