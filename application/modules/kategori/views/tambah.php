<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Kategori Produk</span></h4>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="#"><i class="icon-home2 position-left"></i> Kategori Produk</a></li>
				<li class="active">Tambah</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">
		<div class="panel panel-flat">
			<div class="panel-body">
				<form class="form-horizontal" action="<?php echo base_url()?>kategori/add" method="POST">
					<fieldset class="content-group">
						<div class="form-group">
							<label class="control-label col-lg-2">Kategori Produk</label>
							<div class="col-lg-10">
								<input type="text" name="kategori" class="form-control">
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
						<div class="text-right">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah <i class="icon-arrow-right14 position-right"></i></button>
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