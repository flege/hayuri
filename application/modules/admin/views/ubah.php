<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">admin Produk</span></h4>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url()?>admin"><i class="icon-home2 position-left"></i> Admin</a></li>
				<li class="active">Edit</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">
		<div class="panel panel-flat">
			<div class="panel-body">
				<form class="form-horizontal" action="<?php echo base_url()?>admin/edit" method="POST">
					<fieldset class="content-group">
						<div class="form-group">
							<label class="control-label col-lg-2">Email</label>
							<div class="col-lg-10">
								<input type="text" name="email" value="<?php echo $admin->email?>" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Password</label>
							<div class="col-lg-10">
								<input type="text" name="password" value="<?php echo $admin->password?>" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Nama</label>
							<div class="col-lg-10">
								<input type="text" name="nama" value="<?php echo $admin->nama?>" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">No HP</label>
							<div class="col-lg-10">
								<input type="text" name="no_hp" value="<?php echo $admin->no_hp?>" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-2">Status</label>
							<div class="col-lg-10">
								<select name="status" class="form-control">
									<option value="1" <?php if($admin->aktif == 1){echo 'selected';} ?>>Aktif</option>
									<option value="0" <?php if($admin->aktif == 0){echo 'selected';} ?>>Tidak Aktif</option>
								</select>
							</div>
						</div>
						<div class="text-right">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan <i class="icon-arrow-right14 position-right"></i></button>
						</div>
					</fieldset>
				</form>
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