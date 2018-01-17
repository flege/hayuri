<!-- Main content -->
<div class="content-wrapper">
	
	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><span class="text-semibold">Order Diproses</span></h4>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href="#"><i class="icon-home2 position-left"></i> Order</a></li>
				<li class="active">Diproses</li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">
		<div class="panel panel-flat">
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th width="1">No</th>
						<th>Nama Pemesan</th>
						<th>Nama Penerima</th>
						<th width="1">Status Pembayaran</th>
						<th width="1">Status Pengiriman</th>
						<th width="1" class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i=1;
						foreach($order as $o){
					?>
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $o->id_users?></td>
						<td><?php echo $o->nama_penerima?></td>
						<td><?php echo $o->id_statuspembayaran?></td>
						<td><?php echo $o->id_statuspengiriman?></td>
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
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