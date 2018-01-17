<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Produk</span></h4>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url('produk')?>"><i class="icon-home2 position-left"></i> Produk</a></li>
				<li><a href="<?php echo base_url('produk/ubah/').$id;?>">Edit</a></li>
				<li class="active">Tambah varian</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">
		<div class="panel panel-flat">
			<div class="panel-body">
				<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url('produk/varian/add');?>" method="POST">
					<fieldset class="content-group">
						<div class="form-group">
							<label class="control-label col-lg-2">SKU</label>
							<div class="col-lg-10">
								<input type="text" name="sku" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Berat</label>
							<div class="col-lg-10">
								<input type="number" name="berat" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Foto</label>
							<div class="col-lg-10">
								<input type="file" name="foto" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Harga</label>
							<div class="col-lg-10">
								<div class="row">
								<?php
									$level = $this->db->query("SELECT * FROM level WHERE aktif = '1'")->result();
									foreach($level as $l){
								?>
									<div class="form-group">
										<label class="control-label col-lg-2"><?php echo $l->nama;?></label>
										<div class="col-lg-4">
											<input type="number" name="harga[]" class="form-control">
										</div>
									</div>
								
								<?php
									}
								?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Stok</label>
							<div class="col-lg-5">
								<input type="number" name="stok" class="form-control">
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