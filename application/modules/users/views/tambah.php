<div class="content-wrapper">
	
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Users</span></h4>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="#"><i class="icon-home2 position-left"></i> Users</a></li>
				<li class="active">Tambah</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">
		<div class="panel panel-flat">
			<div class="panel-body">
				<form class="form-horizontal" action="<?php echo base_url()?>users/add" method="POST">
					<fieldset class="content-group">
						<div class="form-group">
							<label class="control-label col-lg-2">Email</label>
							<div class="col-lg-10">
								<input type="text" name="email" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Password</label>
							<div class="col-lg-10">
								<input type="text" name="password" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Nama</label>
							<div class="col-lg-10">
								<input type="text" name="nama" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Alamat</label>
							<div class="col-lg-10">
								<textarea class="form-control" name="alamat"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">No HP</label>
							<div class="col-lg-10">
								<input type="text" name="no_hp" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Level</label>
							<div class="col-lg-10">
								<select class="select-search" name="level">
									<?php
										foreach($list_level as $l){
									?>
									<option value="<?php echo $l->id_level?>"><?php echo $l->nama?></option>
									<?php		
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-2">Status</label>
							<div class="col-lg-10">
								<select name="status" class="form-control">
									<option value="1">Aktif</option>
									<option value="0">Tidak Aktif</option>
								</select>
							</div>
						</div>
				</form>
				<div class="text-right">
					<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah <i class="icon-arrow-right14 position-right"></i></button>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<div class="footer text-muted">
			&copy; 2017. <a href="#">Hayuri Hijab</a>
		</div>
		<!-- /footer -->

	</div>
	<!-- /content area -->

</div>
<!-- /main content -->