<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Produk</span></h4>
			</div>
			
			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="<?php echo base_url('produk/varian/tambah/').$produk->id_produk?>" class="btn btn-link btn-float has-text"><i class="icon-plus3 text-primary"></i> <span>Tambah Varian</span></a>
				</div>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="<?php echo base_url('produk');?>"><i class="icon-home2 position-left"></i> Produk</a></li>
				<li class="active">Edit</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">
		<?php
			if(!empty($this->input->get('sukses')) && $this->input->get('sukses') == 1){
		?>
			<div class="panel panel-flat bg-success">
				<div class="panel-heading">
					Berhasil menambah produk
					<div class="heading-elements">
						<ul class="icons-list">
							<li><a data-action="close"></a></li>
						</ul>
					</div>
				</div>
			</div>
		<?php
			}else if(!empty($this->input->get('sukses')) && $this->input->get('sukses') == 2){
		?>
			<div class="panel panel-flat bg-success">
				<div class="panel-heading">
					Berhasil menambah varian
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
		<div class="panel panel-flat">
			<div class="panel-body">
				<form class="form-horizontal" action="<?php echo base_url('produk/edit');?>" method="POST">
					<fieldset class="content-group">
						<legend class="text-semibold">
							<i class="icon-file-text2 position-left"></i>
							Informasi Produk
							<a class="control-arrow" data-toggle="collapse" data-target="#main">
								<i class="icon-circle-down2"></i>
							</a>
						</legend>
						<div class="collapse in" id="main">
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
									<input type="text" name="nama" value="<?php echo $produk->nama;?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-2">Keterangan</label>
								<div class="col-lg-10">
									<textarea class="form-control" name="keterangan"><?php echo $produk->keterangan;?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-2">Status</label>
								<div class="col-lg-10">
									<select name="status" class="form-control">
										<option value="1" <?php if($produk->aktif == 1){echo 'selected';} ?>>Aktif</option>
										<option value="0" <?php if($produk->aktif == 0){echo 'selected';} ?>>Tidak Aktif</option>
									</select>
								</div>
							</div>
							<div class="text-right">
								<button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan <i class="icon-arrow-right14 position-right"></i></button>
							</div>
						</div>
					</fieldset>
				</form>
				<legend class="text-bold">
					<i class="icon-stack3 position-left"></i>
					Varian
					<a class="control-arrow" data-toggle="collapse" data-target="#varian">
						<i class="icon-circle-down2"></i>
					</a>
				</legend>
				<div class="collapse in" id="varian">
					<?php
						$id = $produk->id_produk;
						$varian = $this->db->query("SELECT * FROM varian WHERE id_produk = '$id'");
						if($varian->num_rows() > 0){
							foreach($varian->result() as $v){
					?>
							<div class="col-lg-3">
								<div class="thumbnail">
									<div class="caption">
										<h6 class="no-margin"><a href="<?php echo base_url('produk/varian/ubah/').$v->id_varian;?>" class="text-default"><?php echo $v->sku ?></a> <a href="<?php echo base_url('produk/varian/ubah/').$v->id_varian;?>" class="text-muted" title="edit varian"><i class="icon-pencil7 pull-right"></i></a></h6>
									</div>
								</div>
							</div>
					<?php
							}
						}else{
							echo '<p style="text-align:center">belum ada varian</p>';
						}
					?>
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