<!-- Main content -->
<div class="content-wrapper">
	
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><span class="text-semibold">Users</span></h4>
			</div>
			
			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="<?php echo base_url()?>jenis/tambah" class="btn btn-link btn-float has-text"><i class="icon-plus3 text-primary"></i> <span>Tambah</span></a>
				</div>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="#"><i class="icon-home2 position-left"></i> Users</a></li>
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
					Berhasil menambah user
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
					Berhasil mengubah user
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
						<th>Email</th>
						<th>Nama</th>
						<th>No HP</th>
						<th>Level</th>
						<th width="1">Status</th>
						<th width="1" class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i=1;
						foreach($users as $u){
					?>
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $u->email?></td>
						<td><?php echo $u->nama?></td>
						<td><?php echo $u->no_hp?></td>
						<td><?php echo $u->level?></td>
						<?php
							if($u->aktif == 1){
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
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="<?php echo base_url()?>users/ubah/<?php echo $u->id_users?>"><i class="icon-pencil"></i> Edit</a></li>
									</ul>
								</li>
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