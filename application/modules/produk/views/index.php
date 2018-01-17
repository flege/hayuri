<!-- Main content -->
<div class="content-wrapper">
	
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><span class="text-semibold">Produk</span></h4>
			</div>
			
			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="<?php echo base_url()?>produk/tambah" class="btn btn-link btn-float has-text"><i class="icon-plus3 text-primary"></i> <span>Tambah</span></a>
				</div>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="#"><i class="icon-home2 position-left"></i> Produk</a></li>
				<li class="active">Semua</li>
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
			<div class="panel panel-flat bg-info">
				<div class="panel-heading">
					Berhasil mengubah produk
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
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th width="1">No</th>
						<th>Jenis Produk</th>
						<th>Kategori Produk</th>
						<th>Nama Produk</th>
						<th>varian</th>
						<th width="1">Status</th>
						<th width="1"></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i=1;
						foreach($produk as $p){
					?>
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $p->jenis?></td>
						<td><?php echo $p->kategori?></td>
						<td><?php echo $p->nama?></td>
						<td class="text-center">
							<?php
								$varian = $this->db->query("SELECT * FROM varian WHERE id_produk = '".$p->id_produk."'");
								if($varian->num_rows() > 0){
							?>
									<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-stack3"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
							<?php
									foreach($varian->result() as $v){
										$stok = $this->db->query("SELECT sum(jumlah) stok FROM stok WHERE id_varian = '".$v->id_varian."'")->result()[0]->stok;
							?>
										<li><a href="<?php echo base_url("produk/varian/ubah/").$v->id_varian;?>"><span class="badge badge-primary"><?php echo $stok?></span><?php echo $v->sku?></a></li>
							<?php
									}
							?>
										</ul>
									</li>
									</ul>
							<?php
								}else{
									echo 'belum ada varian';
								}
							?>
						</td>
						<?php
							if($p->aktif == 1){
						?>
						<td><span class="label label-success">Aktif</span></td>	
						<?php 
							}else{
						?>
						<td><span class="label label-danger">Tidak Aktif</span></td>
						<?php		
							}
						?>
						<td class="text-center">
							<ul class="icons-list">
								<a href="<?php echo base_url("produk/ubah/").$p->id_produk;?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="icon-pencil"></i> Edit</a>
							</ul>
						</td>
					</tr>
					<?php 
						$i++;
						}
						?>
				</tbody>
			</table>
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
<script>
	$('a').tooltip();
</script>