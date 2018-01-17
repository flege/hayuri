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
				<li class="active">Tambah</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">
		<form class="form-horizontal" action="<?php echo base_url('produk/add');?>" method="POST" enctype="multipart/form-data">
		<fieldset class="content-group">
			<div class="col-lg-9">
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-lg-2">Jenis Produk</label>
							<div class="col-lg-10">
								<select class="select-search" name="jenis">
									<?php
										foreach($jenis as $j){
									?>
									<option value="<?php echo $j->id_jenisproduk?>"><?php echo $j->nama?></option>
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
									<option value="<?php echo $k->id_kategoriproduk?>"><?php echo $k->nama?></option>
									<?php		
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Nama Produk</label>
							<div class="col-lg-10">
								<input type="text" name="nama" class="form-control" placeholder="Nama Produk">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-2">Keterangan</label>
							<div class="col-lg-10">
								<textarea class="form-control" name="keterangan"></textarea>
							</div>
						</div>
						<div class="form-group" id="diskon">
							<label class="control-label col-lg-2">Diskon</label>
							<div class="col-lg-2">
								<input class="form-control" type="text" name="diskon" placeholder="Diskon">
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
									<tr id="tr_varian">
										<td>
											<div class="form-group">
												<input type="file" name="foto[]" class="form-control">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" name="sku[]" class="form-control" placeholder="SKU">
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="number" name="harga_beli[]" class="form-control" placeholder="Harga beli">
											</div>
										</td>
										<td>
											<div class="form-group">
												<div class="row">
													<?php
														$level = $this->db->query("SELECT * FROM level WHERE aktif = '1'")->result();
														foreach($level as $l){
													?>
														<div class="form-group">
															<label><?php echo 'Harga '.$l->nama;?></label>
															<input type="number" name="<?php echo $l->nama;?>[]" class="form-control" placeholder="<?php echo 'Harga '.$l->nama;?>">
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
												<input type="text" name="size[]" class="form-control" placeholder="Size">
											</div>
											<div class="form-group">
												<label>Color</label>
												<input type="text" name="color[]" class="form-control" placeholder="Color">
											</div>
										</td>
										<td>
											<div class="form-group">
												<label>Berat</label>
												<input type="number" name="berat[]" class="form-control" placeholder="Berat">
											</div>
											<div class="form-group">
												<label>Stok</label>
												<input type="number" name="stok[]" class="form-control" placeholder="Stok">
											</div>
										</td>
										<td id="act">
											<div class="form-group">
												<a onclick="hapus_varian(this)"><i class="icon-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<br/>
						<div class="text-center">
							<a class="btn bg-indigo btn-xs" id="btn_add_varian">+ varian</a>
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
								<input type="checkbox" id="cekvarian" class="switchery">
							</div>
						</div>
						<div class="form-group no-margin">
							<label class="control-label col-lg-6 text-primary">Diskon</label>
							<div class="text-right">
								<input type="checkbox" id="cekdiskon" class="switchery">
							</div>
						</div>
					<h6 class="panel-title">Private Order Setting</h6>
						<div class="form-group no-margin">
							<label class="control-label col-lg-9 text-primary">
								Publish
								<span class="glyphicon glyphicon-question-sign small" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ON : Produk tampil pada private order, OFF : Produk tidak tampil pada private order"></span>
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
<!-- /main content -->
<style>
	.table > tbody > tr > td{
		vertical-align: top;
	}
	#varian, #diskon{
		display:none;
	}
	#btn_add_varian{
		display:none;
	}
</style>
<script>
	var rowCount;
	$('[id="act"]').hide();
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
	 $("#btn_add_varian").click(function() {
		var $tr = $('#tr_varian');
		var $clone = $tr.clone();
		$clone.find('input').val('');
		$tr.after($clone);
		cek_act();
	});
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
</script>