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

	<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/invoice_archive.js"></script>
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
					<li>
						<a href="<?php echo base_url()?>favorite">
							<i class="glyphicon glyphicon-heart"></i>
							<span class="badge bg-warning-400">2</span>
						</a>
					</li>
					<li class="active">
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
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<div class="content-wrapper">
				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Cart</span></h4>

							<ul class="breadcrumb position-right">
								<li><a href="<?php echo base_url()?>">Home</a></li>
								<li class="active">Cart</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /page header -->
				<div class="content">
					<!-- Invoice archive -->
					<div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Invoice archive</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                	</ul>
		                	</div>
						</div>

						<table class="table table-lg invoice-archive">
							<thead>
								<tr>
									<th>#</th>
									<th>Period</th>
					                <th>Issued to</th>
					                <th>Status</th>
					                <th>Issue date</th>
					                <th>Due date</th>
					                <th>Amount</th>
					                <th class="text-center">Actions</th>
					            </tr>
							</thead>
							<tbody>
								<tr>
									<td>#0025</td>
									<td>February 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Rebecca Manes</a>
					                		<small class="display-block text-muted">Payment method: Skrill</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold" selected="selected">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	April 18, 2015
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Mar 16, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$17,890 <small class="display-block text-muted text-size-small">VAT $4,890</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0024</td>
									<td>February 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">James Alexander</a>
					                		<small class="display-block text-muted">Payment method: Wire transfer</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	April 17, 2015
				                	</td>
					                <td>
					                	<span class="label label-warning">5 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$2,769 <small class="display-block text-muted text-size-small">VAT $2,839</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0023</td>
									<td>February 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Jeremy Victorino</a>
					                		<small class="display-block text-muted">Payment method: Payoneer</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	April 17, 2015
				                	</td>
					                <td>
					                	<span class="label label-primary">27 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$1,500 <small class="display-block text-muted text-size-small">VAT $1,984</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0022</td>
									<td>January 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Margo Baker</a>
					                		<small class="display-block text-muted">Payment method: Paypal</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel" selected="selected">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	January 15, 2015
				                	</td>
					                <td>
					                	<span class="label label-primary">12 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$4,580 <small class="display-block text-muted text-size-small">VAT $992</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0021</td>
									<td>January 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Beatrix Diaz</a>
					                		<small class="display-block text-muted">Payment method: Paypal</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue" selected="selected">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	January 10, 2015
				                	</td>
					                <td>
					                	<span class="label label-danger">- 3 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$7,990 <small class="display-block text-muted text-size-small">VAT $1,294</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0020</td>
									<td>January 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Richard Vango</a>
					                		<small class="display-block text-muted">Payment method: Wire transfer</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid" selected="selected">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	January 10, 2015
				                	</td>
					                <td>
					                	<span class="label label-default">On hold</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$12,120 <small class="display-block text-muted text-size-small">VAT $3,278</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0019</td>
									<td>January 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Will Baker</a>
					                		<small class="display-block text-muted">Payment method: Paypal</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold" selected="selected">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	December 26, 2014
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Feb 25, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$5,390 <small class="display-block text-muted text-size-small">VAT $2,880</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0018</td>
									<td>January 2015</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Joseph Mills</a>
					                		<small class="display-block text-muted">Payment method: Skrill</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending" selected="selected">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	June 17, 2015
				                	</td>
					                <td>
					                	<span class="label label-default">On hold</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$10,280 <small class="display-block text-muted text-size-small">VAT $2,190</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0017</td>
									<td>December 2014</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Buzz Brenson</a>
					                		<small class="display-block text-muted">Payment method: Wire transfer</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending" selected="selected">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	May 6, 2015
				                	</td>
					                <td>
					                	<span class="label label-warning">2 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$43,320 <small class="display-block text-muted text-size-small">VAT $1,299</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0016</td>
									<td>December 2014</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Zachary Willson</a>
					                		<small class="display-block text-muted">Payment method: Paypal</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue" selected="selected">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	March 7, 2015
				                	</td>
					                <td>
					                	<span class="label label-primary">15 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$7,100 <small class="display-block text-muted text-size-small">VAT $1,450</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0015</td>
									<td>December 2014</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Bastian Miller</a>
					                		<small class="display-block text-muted">Payment method: Payoneer</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid" selected="selected">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	March 23, 2015
				                	</td>
					                <td>
					                	<span class="label label-warning">6 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$1,030 <small class="display-block text-muted text-size-small">VAT $229</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0014</td>
									<td>December 2014</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">William Samuel</a>
					                		<small class="display-block text-muted">Payment method: Paypal</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel" selected="selected">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	March 2, 2015
				                	</td>
					                <td>
					                	<span class="label label-default">On hold</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$800 <small class="display-block text-muted text-size-small">VAT $189</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0013</td>
									<td>November 2014</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Monica Smith</a>
					                		<small class="display-block text-muted">Payment method: Wire transfer</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending" selected="selected">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	February 25, 2015
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Feb 15, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$6,300 <small class="display-block text-muted text-size-small">VAT $1,200</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0012</td>
									<td>November 2014</td>
					                <td>
					                	<h6 class="no-margin">
					                		<a href="#">Jordana Miles</a>
					                		<small class="display-block text-muted">Payment method: Paypal</small>
				                		</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	February 26, 2015
				                	</td>
					                <td>
					                	<span class="label label-primary">12 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$2,200 <small class="display-block text-muted text-size-small">VAT $689</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0011</td>
									<td>November 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">John Craving</a>
						                	<small class="display-block text-muted">Payment method: Payoneer</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	May 9, 2015
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Jan 28, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$2,600 <small class="display-block text-muted text-size-small">VAT $370</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0010</td>
									<td>November 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">James Basel</a>
						                	<small class="display-block text-muted">Payment method: Wire transfer</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue" selected="selected">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	June 1, 2015
				                	</td>
					                <td>
					                	<span class="label label-warning">5 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$6,800 <small class="display-block text-muted text-size-small">VAT $2,118</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0009</td>
									<td>November 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Lucy Johnson</a>
						                	<small class="display-block text-muted">Payment method: Paypal</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	April 10, 2015
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Jan 17, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$900 <small class="display-block text-muted text-size-small">VAT $199</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0008</td>
									<td>October 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Kinga Wallace</a>
						                	<small class="display-block text-muted">Payment method: Skrill</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending" selected="selected">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	April 12, 2015
				                	</td>
					                <td>
					                	<span class="label label-primary">12 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$1,200 <small class="display-block text-muted text-size-small">VAT $298</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0007</td>
									<td>October 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Anna Zuniga</a>
						                	<small class="display-block text-muted">Payment method: Payoneer</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	March 29, 2015
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Jan 14, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$13,000 <small class="display-block text-muted text-size-small">VAT $4,290</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0006</td>
									<td>October 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Nicolette Grey</a>
						                	<small class="display-block text-muted">Payment method: Paypal</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending" selected="selected">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	February 23, 2015
				                	</td>
					                <td>
					                	<span class="label label-default">On hold</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$5,200 <small class="display-block text-muted text-size-small">VAT $1,300</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0005</td>
									<td>October 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Vanessa Aurelius</a>
						                	<small class="display-block text-muted">Payment method: Wire transfer</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	January 10, 2015
				                	</td>
					                <td>
					                	<span class="label label-warning">9 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$3,000 <small class="display-block text-muted text-size-small">VAT $789</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0004</td>
									<td>October 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Hanna Walden</a>
						                	<small class="display-block text-muted">Payment method: Paypal</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	May 2, 2015
				                	</td>
					                <td>
					                	<span class="label label-primary">20 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$2,830 <small class="display-block text-muted text-size-small">VAT $600</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0003</td>
									<td>September 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Dori Laperriere</a>
						                	<small class="display-block text-muted">Payment method: Skrill</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold" selected="selected">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	May 1, 2015
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Jan 10, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$12,850 <small class="display-block text-muted text-size-small">VAT $3,590</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0002</td>
									<td>September 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Jordano Diressimo</a>
						                	<small class="display-block text-muted">Payment method: Paypal</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid" selected="selected">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	June 22, 2015
				                	</td>
					                <td>
					                	<span class="label label-success">Paid on Jan 9, 2015</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$10,900 <small class="display-block text-muted text-size-small">VAT $3,690</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>

								<tr>
									<td>#0001</td>
									<td>September 2014</td>
					                <td>
					                	<h6 class="no-margin">
						                	<a href="#">Patrick Muller</a>
						                	<small class="display-block text-muted">Payment method: Paypal</small>
					                	</h6>
				                	</td>
					                <td>
					                	<select name="status" class="select" data-placeholder="Select status">
					                		<option value="overdue" selected="selected">Overdue</option>
					                		<option value="hold">On hold</option>
					                		<option value="pending">Pending</option>
					                		<option value="paid">Paid</option>
					                		<option value="invalid">Invalid</option>
					                		<option value="cancel">Canceled</option>
					                	</select>
				                	</td>
					                <td>
					                	April 4, 2015
				                	</td>
					                <td>
					                	<span class="label label-warning">5 days</span>
				                	</td>
					                <td>
					                	<h6 class="no-margin text-bold">$9,390 <small class="display-block text-muted text-size-small">VAT $2,548</small></h6>
					                </td>
									<td class="text-center">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a></li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-file-download"></i> Download</a></li>
													<li><a href="#"><i class="icon-printer"></i> Print</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-file-plus"></i> Edit</a></li>
													<li><a href="#"><i class="icon-cross2"></i> Remove</a></li>
												</ul>
											</li>
										</ul>
									</td>
					            </tr>
				            </tbody>
			            </table>
					</div>
					<!-- /invoice archive -->


		            <!-- Modal with invoice -->
					<div id="invoice" class="modal fade">
						<div class="modal-dialog modal-full">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">Invoice #49029</h5>
								</div>

								<div class="panel-body no-padding-bottom">
									<div class="row">
										<div class="col-md-6 content-group">
											<img src="assets/images/logo_demo.png" class="content-group mt-10" alt="" style="width: 120px;">
				 							<ul class="list-condensed list-unstyled">
												<li>2269 Elba Lane</li>
												<li>Paris, France</li>
												<li>888-555-2311</li>
											</ul>
										</div>

										<div class="col-md-6 content-group">
											<div class="invoice-details">
												<h5 class="text-uppercase text-semibold">Invoice #49029</h5>
												<ul class="list-condensed list-unstyled">
													<li>Date: <span class="text-semibold">January 12, 2015</span></li>
													<li>Due date: <span class="text-semibold">May 12, 2015</span></li>
												</ul>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 col-lg-9 content-group">
											<span class="text-muted">Invoice To:</span>
				 							<ul class="list-condensed list-unstyled">
												<li><h5>Rebecca Manes</h5></li>
												<li><span class="text-semibold">Normand axis LTD</span></li>
												<li>3 Goodman Street</li>
												<li>London E1 8BF</li>
												<li>United Kingdom</li>
												<li>888-555-2311</li>
												<li><a href="#">rebecca@normandaxis.ltd</a></li>
											</ul>
										</div>

										<div class="col-md-6 col-lg-3 content-group">
											<span class="text-muted">Payment Details:</span>
											<ul class="list-condensed list-unstyled invoice-payment-details">
												<li><h5>Total Due: <span class="text-right text-semibold">$8,750</span></h5></li>
												<li>Bank name: <span class="text-semibold">Profit Bank Europe</span></li>
												<li>Country: <span>United Kingdom</span></li>
												<li>City: <span>London E1 8BF</span></li>
												<li>Address: <span>3 Goodman Street</span></li>
												<li>IBAN: <span class="text-semibold">KFH37784028476740</span></li>
												<li>SWIFT code: <span class="text-semibold">BPT4E</span></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="table-responsive">
								    <table class="table table-lg">
								        <thead>
								            <tr>
								                <th>Description</th>
								                <th class="col-sm-1">Rate</th>
								                <th class="col-sm-1">Hours</th>
								                <th class="col-sm-1">Total</th>
								            </tr>
								        </thead>
								        <tbody>
								            <tr>
								                <td>
								                	<h6 class="no-margin">Create UI design model</h6>
								                	<span class="text-muted">One morning, when Gregor Samsa woke from troubled.</span>
							                	</td>
								                <td>$70</td>
								                <td>57</td>
								                <td><span class="text-semibold">$3,990</span></td>
								            </tr>
								            <tr>
								                <td>
								                	<h6 class="no-margin">Support tickets list doesn't support commas</h6>
								                	<span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
							                	</td>
								                <td>$70</td>
								                <td>12</td>
								                <td><span class="text-semibold">$840</span></td>
								            </tr>
								            <tr>
								                <td>
								                	<h6 class="no-margin">Fix website issues on mobile</h6>
								                	<span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
							                	</td>
								                <td>$70</td>
								                <td>31</td>
								                <td><span class="text-semibold">$2,170</span></td>
								            </tr>
								        </tbody>
								    </table>
								</div>

								<div class="panel-body">
									<div class="row invoice-payment">
										<div class="col-sm-7">
											<div class="content-group">
												<h6>Authorized person</h6>
												<div class="mb-15 mt-15">
													<img src="assets/images/signature.png" class="display-block" style="width: 150px;" alt="">
												</div>

												<ul class="list-condensed list-unstyled text-muted">
													<li>Eugene Kopyov</li>
													<li>2269 Elba Lane</li>
													<li>Paris, France</li>
													<li>888-555-2311</li>
												</ul>
											</div>
										</div>

										<div class="col-sm-5">
											<div class="content-group">
												<h6>Total due</h6>
												<div class="table-responsive no-border">
													<table class="table">
														<tbody>
															<tr>
																<th>Subtotal:</th>
																<td class="text-right">$7,000</td>
															</tr>
															<tr>
																<th>Tax: <span class="text-regular">(25%)</span></th>
																<td class="text-right">$1,750</td>
															</tr>
															<tr>
																<th>Total:</th>
																<td class="text-right text-primary"><h5 class="text-semibold">$8,750</h5></td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="text-right">
													<button type="button" class="btn btn-primary btn-labeled"><b><i class="icon-printer"></i></b> Print invoice</button>
												</div>
											</div>
										</div>
									</div>

									<h6>Other information</h6>
									<p class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</p>
								</div>

								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<!-- /modal with invoice -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2017. <a href="#">Hayuri Hijab</a> by <a href="#" target="_blank">Hayuri</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
