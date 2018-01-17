<!-- Page container -->
<div class="page-container">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-main sidebar-default">
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="category-content">
						<div class="media">
							<a href="#" class="media-left"><img src="<?php echo HTTP_PATH; ?>images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
							<div class="media-body">
								<span class="media-heading text-semibold">Victoria Baker</span>
								<div class="text-size-mini text-muted">
									<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="media-right media-middle">
								<ul class="icons-list">
									<li>
										<a href="#"><i class="icon-cog3"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="sidebar-category sidebar-category-visible">
					<div class="category-content no-padding">
						<ul class="navigation navigation-main navigation-accordion">
							<li><a href="<?php echo base_url()?>dashboard"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
							<li>
								<a href="#"><i class="icon-price-tag2"></i> <span>Jenis Produk</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>jenis/tambah"><i class="icon-plus2"></i> Tambah</a></li>
									<li><a href="<?php echo base_url()?>jenis"><i class=" icon-price-tags"></i> Semua Jenis Produk</a></li>
								</ul>
							</li>
							<li>
								<a href="#"><i class=" icon-price-tag3"></i> <span>Kategori Produk</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>kategori/tambah"><i class="icon-plus2"></i> Tambah</a></li>
									<li><a href="<?php echo base_url()?>kategori"><i class=" icon-price-tags2"></i> Semua Kategori Produk</a></li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="icon-bag"></i> <span>Produk</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>produk/tambah"><i class="icon-plus2"></i> Tambah</a></li>
									<li><a href="<?php echo base_url()?>produk"><i class="icon-stack2"></i> Semua Produk</a></li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="icon-cart5"></i> <span>Order</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>order"><i class="icon-stack-empty"></i> Semua Order</a></li>
									<li><a href="<?php echo base_url()?>order/diproses"><i class="icon-stack-text"></i> Order Diproses</a></li>
									<li><a href="<?php echo base_url()?>order/selesai"><i class="icon-stack-check"></i> Order Selesai</a></li>
									<li><a href="<?php echo base_url()?>batal"><i class="icon-stack-cancel"></i> Order Batal</a></li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="icon-user"></i> <span>Users</span></a>
								<ul>
									<li <?php if($view == 'tambah'){echo 'class="active"';}?>><a href="<?php echo base_url()?>users/tambah"><i class="icon-plus2"></i> Tambah</a></li>
									<li <?php if($view == 'index'){echo 'class="active"';}?>><a href="<?php echo base_url()?>users"><i class="icon-users4"></i> Semua User</a></li>
									<li>
										<a href="#"><i class="icon-user-tie"></i> Level</a>
										<ul>
											<?php
												$data = $this->db->query("SELECT id_level, nama FROM level WHERE aktif = '1'")->result();
												foreach($data as $d){
											?>
											<li <?php if($level == $d->nama){echo 'class="active"';}?>><a href="<?php echo base_url()?>users/level/<?php echo $d->id_level; ?>"><i class="icon-user-check"></i> <?php echo $d->nama;?></a></li>
											<?php	
												}
											?>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="icon-user-lock"></i> <span>Admin</span></a>
								<ul>
									<li><a href="<?php echo base_url()?>admin/tambah"><i class="icon-plus2"></i> Tambah</a></li>
									<li><a href="<?php echo base_url()?>admin"><i class="icon-users4"></i> Semua Admin</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /main navigation -->

			</div>
		</div>
		<!-- /main sidebar -->