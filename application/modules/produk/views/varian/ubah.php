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
				<li class="active">Edit varian</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">
		<div class="panel panel-flat">
			<div class="panel-body">
				<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url('produk/varian/edit');?>" method="POST">
					<fieldset class="content-group">
						<div class="form-group">
							<label class="control-label col-lg-2">SKU</label>
							<div class="col-lg-10">
								<input type="text" name="sku" value="<?php echo $varian->sku; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Berat</label>
							<div class="col-lg-10">
								<input type="number" name="berat" value="<?php echo $varian->berat; ?>" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Foto</label>
							<div class="col-lg-10">
								<input type="file" name="foto" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2"></label>
							<div class="col-lg-10">
								<a href="<?php echo base_url('varian/').$varian->id_varian.$varian->foto;;?>">Lihat Foto</a>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Harga</label>
							<div class="col-lg-10">
								<div class="row">
								<?php
									$harga = $this->db->query("SELECT * FROM harga RIGHT OUTER JOIN level USING(id_level) WHERE id_varian = '".$varian->id_varian."' AND level.aktif = '1'")->result();
									if(empty($harga)){
										$harga = $this->db->query("SELECT *, 0 as harga FROM level WHERE aktif = '1'")->result();
									}
									foreach($harga as $h){
								?>
									<div class="form-group">
										<label class="control-label col-lg-2"><?php echo $h->nama;?></label>
										<div class="col-lg-4">
											<input type="number" name="harga[]" value="<?php echo $h->harga;?>" class="form-control">
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
								<p class="form-control"><?php if($varian->stok > 0){echo $varian->stok;}else{echo 0;}?></p>
							</div>
							<div class="col-lg-2">
								<a href="#" class="label label-flat label-rounded label-icon border-teal text-teal-600" data-toggle="modal" data-target="#modal_plus"><i class="icon-plus3"></i></a>
								<a href="#" class="label label-flat label-rounded label-icon border-danger text-danger-600" data-toggle="modal" data-target="#modal_minus"><i class="icon-minus3"></i></a>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-lg-2">Status</label>
							<div class="col-lg-10">
								<select name="status" class="form-control">
									<option value="1" <?php if($varian->aktif == 1){echo 'selected';} ?>>Aktif</option>
									<option value="0" <?php if($varian->aktif == 0){echo 'selected';} ?>>Tidak Aktif</option>
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
<div id="modal_plus" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">Tambah stok</h6>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('produk/varian/add_stok');?>" method="POST">
				<fieldset class="content-group">
					<div class="modal-body">
						<h6 class="text-semibold">Periksa kembali inputan anda. Stok yang sudah dikirim tidak dapat dibatalkan</h6>
						<div class="form-group">
							<label class="control-label col-lg-2">Jumlah</label>
							<div class="col-lg-10">
								<input type="number" name="jumlah" class="form-control">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
						<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<div id="modal_minus" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">Kurangi stok</h6>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('produk/varian/reduce_stok');?>" method="POST">
				<fieldset class="content-group">
					<div class="modal-body">
						<h6 class="text-semibold">Periksa kembali inputan anda. Stok yang sudah dikirim tidak dapat dibatalkan</h6>
						<div class="form-group">
							<label class="control-label col-lg-2">Jumlah</label>
							<div class="col-lg-10">
								<input type="number" name="jumlah" class="form-control">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
						<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>