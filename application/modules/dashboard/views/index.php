<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-default">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"></span> Dashboard</h4>
			</div>
		</div>

		<div class="breadcrumb-line">
			<ul class="breadcrumb">
				<li><a href=""><i class="icon-home2 position-left"></i> Dashboard</a></li>
			</ul>
		</div>
	</div>
	<!-- /page header -->


	<!-- Content area -->
	<div class="content">

		<!-- Main charts -->
		<div class="row">
			<!-- Traffic sources -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4">
						<div class="panel panel-body border-top-teal">
							<ul class="list-inline text-center">
								<li>
									<a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon valign-text-bottom" data-toggle="modal" data-target="#new_orders"><i class="icon-cart-add2"></i></a>
								</li>
								<li class="text-left">
									<div class="text-semibold">New orders</div>
									<h5 class="text-muted no-margin">2,349</h5>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-body border-top-indigo">
							<ul class="list-inline text-center">
								<li>
									<a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon valign-text-bottom" data-toggle="modal" data-target="#new_orders_paid"><i class="icon-price-tag"></i></a>
								</li>
								<li class="text-left">
									<div class="text-semibold">New orders paid</div>
									<h5 class="text-muted no-margin">5,378</h5>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="panel panel-body border-top-warning">
							<ul class="list-inline text-center">
								<li>
									<a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon valign-text-bottom" data-toggle="modal" data-target="#limited_stock"><i class="icon-dropbox"></i></a>
								</li>
								<li class="text-left">
									<div class="text-semibold">Limited stock</div>
									<h5 class="text-muted no-margin">80 varian</h5>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /traffic sources -->

			<!-- Sales stats -->
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h6 class="panel-title">Sales statistics</h6>
				</div>

				<div class="container-fluid">
					<div class="row text-center">
						<div class="col-md-4">
							<div class="content-group">
								<h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 689</h5>
								<span class="text-muted text-size-small">orders today</span>
								<div class="chart-container text-center">
									<div class="display-inline-block" id="daily"></div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="content-group">
								<h5 class="text-semibold no-margin"><i class="icon-calendar position-left text-slate"></i> 3,568</h5>
								<span class="text-muted text-size-small">orders last week</span>
								<div class="chart-container text-center">
									<div class="display-inline-block" id="weekly"></div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="content-group">
								<h5 class="text-semibold no-margin"><i class="icon-calendar3 position-left text-slate"></i> 23,464</h5>
								<span class="text-muted text-size-small">orders last month</span>
								<div class="chart-container text-center">
									<div class="display-inline-block" id="monthly"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /sales stats -->
		</div>
		<!-- /main charts -->

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
	c3.generate({
        bindto: '#daily',
        
        data: {
			x : 'x',
            columns: [
				['x', 'daily order'],
				['average', 600],
				['recent', 689]
            ],
            type : 'bar',
			colors: {
				recent: '#a2c1b4',
			},
        },
		axis: {
			x: {
				type: 'category'
			}
		}
    });
	c3.generate({
        bindto: '#weekly',
        
        data: {
			x : 'x',
            columns: [
				['x', 'weekly order'],
				['average', 3500],
				['recent', 3568]
            ],
            type : 'bar',
			colors: {
				recent: '#a2c1b4',
			},
        },
		axis: {
			x: {
				type: 'category'
			}
		}
    });
	c3.generate({
        bindto: '#monthly',
        
        data: {
			x : 'x',
            columns: [
				['x', 'monthly order'],
				['average', 23000],
				['recent', 23464]
            ],
            type : 'bar',
			colors: {
				recent: '#a2c1b4',
			},
        },
		axis: {
			x: {
				type: 'category'
			}
		}
    });
</script>
<div id="new_orders" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-teal">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">New orders</h6>
			</div>
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th width="1">ID</th>
						<th>Tanggal order</th>
						<th>Nama user</th>
						<th>Nama penerima</th>
						<th width="1" class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i=1;
						$varian = $this->db->query("SELECT varian.*, produk.nama nama, sum(jumlah) jumlah FROM varian JOIN stok USING(id_varian) JOIN produk USING(id_produk) GROUP BY id_varian")->result();
						foreach($varian as $v){
					?>
					<tr>
						<td><?php echo $v->id_varian?></td>
						<td><?php echo date('d-m-Y');?></td>
						<td><?php echo 'kuroky'?></td>
						<td><?php echo 'Kuroky'?></td>
						
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-search4"></i> Detail</a></li>
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
	</div>
</div>
<div id="new_orders_paid" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-indigo">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">New orders paid</h6>
			</div>
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th width="1">ID</th>
						<th>Tanggal order</th>
						<th>Tanggal pembayaran</th>
						<th>Nama penerima</th>
						<th>Status</th>
						<th width="1" class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i=1;
						$varian = $this->db->query("SELECT varian.*, produk.nama nama, sum(jumlah) jumlah FROM varian JOIN stok USING(id_varian) JOIN produk USING(id_produk) GROUP BY id_varian")->result();
						foreach($varian as $v){
					?>
					<tr>
						<td><?php echo $v->id_varian?></td>
						<td><?php echo date('d-m-Y');?></td>
						<td>-</td>
						<td><?php echo 'kuroky'?></td>
						<td><?php echo 'Kuroky'?></td>
						
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-search4"></i> Detail</a></li>
										<li><a href="#"><i class=" icon-package"></i> Dikemas</a></li>
										<li><a href="#"><i class="icon-truck"></i> Kirim</a></li>
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
	</div>
</div>
<div id="limited_stock" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h6 class="modal-title">Limited stock</h6>
			</div>
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th width="1">No</th>
						<th>Produk</th>
						<th>Varian</th>
						<th>Stok</th>
						<th width="1" class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$i=1;
						$varian = $this->db->query("SELECT varian.*, produk.nama nama, sum(jumlah) jumlah FROM varian JOIN stok USING(id_varian) JOIN produk USING(id_produk) GROUP BY id_varian")->result();
						foreach($varian as $v){
					?>
					<tr>
						<td><?php echo $i?></td>
						<td><?php echo $v->nama?></td>
						<td><?php echo $v->sku?></td>
						<td><?php echo $v->jumlah?></td>
						
						<td class="text-center">
							<ul class="icons-list">
								<a href="<?php echo base_url("produk/varian/ubah/").$v->id_varian;?>" title="Detail/Edit"><i class="icon-search4"></i> Detail/Edit</a>
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
	</div>
</div>