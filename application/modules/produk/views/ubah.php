<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/plugins/notifications/bootbox.min.js"></script>
<script type="text/javascript" src="<?php echo HTTP_PATH; ?>js/plugins/notifications/sweet_alert.min.js"></script>
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
				<li class="active">Edit</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">
		<?php
			if(!empty($this->input->get('sukses')) && $this->input->get('sukses') == 2){
		?>
			<div class="panel panel-flat bg-info">
				<div class="panel-heading">
					Berhasil mengubah varian
					<div class="heading-elements">
						<ul class="icons-list">
							<li><a data-action="close"></a></li>
						</ul>
					</div>
				</div>
			</div>
		<?php
			}else if(!empty($this->input->get('sukses')) && $this->input->get('sukses') == 3){
		?>
			<div class="panel panel-flat bg-danger">
				<div class="panel-heading">
					Berhasil menghapus varian
					<div class="heading-elements">
						<ul class="icons-list">
							<li><a data-action="close"></a></li>
						</ul>
					</div>
				</div>
			</div>
		<?php
			}else if(!empty($this->input->get('sukses')) && $this->input->get('sukses') == 4){
		?>
			<div class="panel panel-flat bg-info">
				<div class="panel-heading">
					Berhasil mengubah stok
					<div class="heading-elements">
						<ul class="icons-list">
							<li><a data-action="close"></a></li>
						</ul>
					</div>
				</div>
			</div>
		<?php
			}
		?>
		<form class="form-horizontal" action="<?php echo base_url('produk/edit');?>" method="POST" enctype="multipart/form-data">
		<fieldset class="content-group">
			<div class="col-lg-9">
				<div class="panel panel-flat">
					<div class="panel-body">
						<?php $id_produk = $produk->id_produk ?>
						<input type="hidden" name="id_produk" value="<?php echo $id_produk;?>">
						<div class="form-group">
							<label class="control-label col-lg-2">Jenis Produk</label>
							<div class="col-lg-10">
								<select class="select-search" name="jenis">
									<?php
										foreach($jenis as $j){
									?>
									<option value="<?php echo $j->id_jenisproduk;?>" <?php if($produk->id_jenisproduk == $j->id_jenisproduk){echo 'selected';}?>><?php echo $j->nama?></option>
									<?php		
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Kategori Produk</label>
							<div class="col-lg-10">
								<select class="select-search" name="kategori">
									<?php
										foreach($kategori as $k){
									?>
									<option value="<?php echo $k->id_kategoriproduk?>" <?php if($produk->id_kategoriproduk == $k->id_kategoriproduk){echo 'selected';}?>><?php echo $k->nama?></option>
									<?php		
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Nama Produk</label>
							<div class="col-lg-10">
								<input type="text" name="nama" value="<?php echo $produk->nama;?>" class="form-control" placeholder="Nama Produk">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Keterangan</label>
							<div class="col-lg-10">
								<textarea class="form-control" name="keterangan"><?php echo $produk->keterangan;?></textarea>
							</div>
						</div>
						<div class="form-group" id="diskon">
							<label class="control-label col-lg-2">Diskon</label>
							<div class="col-lg-2">
								<input class="form-control" type="text" name="diskon" value="<?php echo $produk->diskon;?>" placeholder="Diskon">
							</div>
						</div>
						<legend class="text-bold">
							<i class="icon-stack3 position-left"></i>
						</legend>
						<div class="table-responsive">
							<table class="table table-framed" id="table_varian">
								<thead>
									<tr>
										<th>Foto Produk</th>
										<th>SKU</th>
										<th>Harga Beli</th>
										<th>Harga Jual</th>
										<th id="varian">Varian</th>
										<th></th>
										<th id="act"></th>
									</tr>
								</thead>
								<tbody>
									<?php
										$varian = $this->db->query("SELECT * FROM varian WHERE id_produk = '$id_produk' AND aktif = '1'");
										$cekvarian = false;
										if($varian->num_rows() > 0){
											foreach($varian->result() as $v){
												$stok = $this->db->query("SELECT sum(jumlah) stok FROM stok WHERE id_varian = '".$v->id_varian."'")->result()[0]->stok;
												if(!empty($v->color) || !empty($v->size)){
													$cekvarian = true;
												}
									?>
									<tr id="tr_varian">
										<td>
											<div class="form-group">
												<input type="file" name="foto[]" class="form-control">
												<input type="hidden" name="id_varian[]" value="<?php echo $v->id_varian;?>">
											</div>
											<img src="<?php echo base_url('varian/').$v->id_varian.$v->extensi.'?'.date('Y-m-d H:i:s');;?>" style="width:100px;">
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sku[]" class="form-control" placeholder="SKU" value="<?php echo $v->sku;?>">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="number" name="harga_beli[]" class="form-control" placeholder="Harga beli" value="<?php echo $v->harga_beli;?>">
											</div>
										</td>
										<td>
											<div class="form-group">
												<div class="row">
													<?php
														$level = $this->db->query("SELECT * FROM level WHERE aktif = '1'")->result();
														foreach($level as $l){
														$harga = $this->db->query("SELECT * FROM harga WHERE id_varian = '".$v->id_varian."' AND id_level = '".$l->id_level."'")->result();
														if(count($harga) > 0){
															$harga = $harga[0]->harga;
														}else{
															$harga = 0;
														}
													?>
														<div class="form-group">
															<label><?php echo 'Harga '.$l->nama;?></label>
															<input type="number" name="<?php echo $l->nama;?>[]" class="form-control" value="<?php echo $harga;?>" placeholder="<?php echo 'Harga '.$l->nama;?>">
														</div>
													<?php
														}
													?>
													</div>
											</div>
										</td>
										<td id="varian">
											<div class="form-group">
												<label>Size</label>
												<input type="text" name="size[]" class="form-control" placeholder="Size" value="<?php echo $v->size;?>">
											</div>
											<div class="form-group">
												<label>Color</label>
												<input type="text" name="color[]" class="form-control" placeholder="Color" value="<?php echo $v->color;?>">
											</div>
										</td>
										<td>
											<div class="form-group">
												<label>Berat</label>
												<input type="number" name="berat[]" class="form-control" placeholder="Berat" value="<?php echo $v->berat;?>">
											</div>
											<div class="form-group">
												<label>Stok</label>
												<input type="number" name="stok[]" disabled class="form-control" placeholder="Stok" value="<?php echo $stok;?>">
											</div>
											<div class="row text-center">
												<a href="#" class="label label-flat label-rounded label-icon border-teal text-teal-600 modal-stok" data-id="<?php echo $v->id_varian;?>" data-toggle="modal" data-target="#modal_plus"><i class="icon-plus3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tambah stok"></i></a>
												<a href="#" class="label label-flat label-rounded label-icon border-indigo text-indigo-600 modal-stok" data-id="<?php echo $v->id_varian;?>" data-stok="<?php echo $stok;?>" data-toggle="modal" data-target="#modal_minus"><i class="icon-sync" data-toggle="tooltip" data-placement="top" title="" data-original-title="Sync stok"></i></a>
											</div>
										</td>
										<td id="act">
											<div class="form-group">
												<a href="<?php echo base_url('produk/varian/hapus/').$v->id_varian ?>" id="hapusvarian"><i class="icon-trash" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"></i></a>
											</div>
										</td>
									</tr>
									<?php
											}
										}
									?>
								</tbody>
							</table>
						</div>
						<br/>
						<div class="text-center">
							<a data-toggle="modal" data-target="#modal_tambah" class="btn bg-indigo btn-xs" id="btn_add_varian">+ varian</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="panel panel-flat">
					<div class="panel-body">
					<h6 class="panel-title">Product Setting</h6>
						<div class="form-group no-margin">
							<label class="control-label col-lg-6 text-primary">Varian</label>
							<div class="text-right">
								<input type="checkbox" id="cekvarian" class="switchery" <?php if($cekvarian){ echo 'checked';}?>>
							</div>
						</div>
						<div class="form-group no-margin">
							<label class="control-label col-lg-6 text-primary">Diskon</label>
							<div class="text-right">
								<input type="checkbox" id="cekdiskon" class="switchery" <?php if($cekdiskon){ echo 'checked';}?>>
							</div>
						</div>
					<h6 class="panel-title">Private Order Setting</h6>
						<div class="form-group no-margin">
							<label class="control-label col-lg-9 text-primary">
								Publish
								<span class="glyphicon glyphicon-question-sign small" data-toggle="tooltip" data-placement="top" title="" data-original-title="ON : Produk tampil pada private order, OFF : Produk tidak tampil pada private order"></span>
							</label>
							<div class="text-right">
								<input type="checkbox" checked name="status" class="switchery">
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan Produk</button>
				</div>
			</div>
		</form>
		<!-- Footer -->
		<div class="footer text-muted">
			&copy; 2017. <a href="#">Hayuri Hijab</a>
		</div>
		<!-- /footer -->

	</div>
	<!-- /content area -->

</div>
<div id="modal_tambah" class="modal fade">
	<div class="modal-dialog modal-small">
		<div class="modal-content">
			<div class="modal-header bg-indigo">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">Tambah Varian</h6>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('produk/varian/add');?>" method="POST" enctype="multipart/form-data">
				<fieldset class="content-group">
					<input type="hidden" name="id_produk" value="<?php echo $id_produk?>">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">Foto Produk</label>
									<div class="col-lg-8">
										<input type="file" name="foto" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">Stok</label>
									<div class="col-lg-8">
										<input type="number" name="stok" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">SKU</label>
									<div class="col-lg-8">
										<input type="text" name="sku" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">Berat</label>
									<div class="col-lg-8">
										<input type="number" name="berat" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">Harga Beli</label>
									<div class="col-lg-8">
										<input type="number" name="harga_beli" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">Size</label>
									<div class="col-lg-8">
										<input type="text" name="size" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">Harga Jual</label>
									<div class="col-lg-8">
										<?php
											$level = $this->db->query("SELECT * FROM level WHERE aktif = '1'")->result();
											foreach($level as $l){
										?>
											<div class="form-group">
												<input type="number" name="<?php echo $l->nama;?>" class="form-control" placeholder="<?php echo 'Harga '.$l->nama;?>">
											</div>
										
										<?php
											}
										?>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4">Color</label>
									<div class="col-lg-8">
										<input type="text" name="color" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
						<button type="submit" name="submit" value="submit" class="btn bg-indigo">Tambah</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
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
								<input type="hidden" id="varian_id" name="id_varian">
								<input type="number" name="jumlah" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Keterangan</label>
							<div class="col-lg-10">
								<textarea name="keterangan" placeholder="Keterangan asal pembelian produk atau lainnya" class="form-control"></textarea>
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
			<div class="modal-header bg-indigo">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">Kurangi stok</h6>
			</div>
			<form class="form-horizontal" action="<?php echo base_url('produk/varian/sync_stok');?>" method="POST">
				<fieldset class="content-group">
					<div class="modal-body">
						<h6 class="text-semibold">Gunakan fungsi sync stok, jika jumlah stok di aplikasi ngorder tidak sesuai dengan jumlah stok real digudang Anda</h6>
						<div class="form-group">
							<label class="control-label col-lg-2">Jumlah</label>
							<div class="col-lg-10">
								<input type="hidden" id="varian_id" name="id_varian">
								<input type="number" id="varian_stok" name="jumlah" class="form-control">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
						<button type="submit" name="submit" value="submit" class="btn bg-indigo">Simpan</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
<!-- /main content -->
<style>
	.table > tbody > tr > td{
		vertical-align: top;
	}
</style>
<script>
	var rowCount;
	if($('#cekvarian').prop('checked')){
		$('[id="varian"]').show();
		$('[id="btn_add_varian"]').show();
	}else{
		$('[id="varian"]').hide();
		$('[id="btn_add_varian"]').hide();
	}
	if($('#cekdiskon').prop('checked')){
		$('[id="diskon"]').show();
	}else{
		$('[id="diskon"]').hide();
	}
	$(function() {
		// Initialize multiple switches
		if (Array.prototype.forEach) {
			var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
			elems.forEach(function(html) {
				var switchery = new Switchery(html);
			});
		}
	});
	$('#cekvarian').change(function () {
		if($(this).prop('checked')){
			$('[id="varian"]').show();
			$('[id="btn_add_varian"]').show();
		}else{
			$('[id="varian"]').hide();
			$('[id="btn_add_varian"]').hide();
		}
	 });
	 $('#cekdiskon').change(function () {
		if($(this).prop('checked')){
			$('[id="diskon"]').show();
		}else{
			$('[id="diskon"]').hide();
		}
	 });
	 $('span').tooltip();
	 $('i').tooltip();
	function hapus_varian(e){
		$(e).closest('tr').remove();
		cek_act();
	}
	function cek_act(){
		rowCount = $('#table_varian tbody tr').length;
		if(rowCount > 1){
			$('[id="act"]').show();
		}else{
			$('[id="act"]').hide();
		}
	}
	$('[id="hapusvarian"]').on('click', function(e) {
		e.preventDefault();
		var linkURL = $(this).attr("href");
		swal({
			title: "Hapus varian?",
			text: "Varian yang sudah dihapus tidak dapat di-restore",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#ff0000",
			confirmButtonText: "Hapus",
			cancelButtonText: "Batal",
			closeOnConfirm: false,
			closeOnCancel: false
		},
		function(isConfirm){
			if (isConfirm) {
				window.location.href = linkURL;
			}
			else {
				swal({
					title: "Cancelled",
					text: "Berhasil dibatalkan",
					confirmButtonColor: "#F44336",
					type: "error"
				});
			}
		});
	});
	$(document).on("click", ".modal-stok", function () {
		var varian_id = $(this).data('id');
		var varian_stok = $(this).data('stok');
		$(".modal-body #varian_id").val( varian_id );
		$(".modal-body #varian_stok").val( varian_stok );
		console.log($(this).data('id'));
	});
</script>