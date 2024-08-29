<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="../public/dist/img/AdminLTELogo.png" alt="makueni Logo" class="brand-image" style="opacity: .8">
		<span class="brand-text font-weight-light">Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>

			<div class="info pt-0 mt-0">
				<a href="#" class="">
					<?php echo $_SESSION['user_names']; ?>
					<br />
					<?php echo $_SESSION['user_access_level']; ?>
				</a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>


		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

				<li class="nav-item">
					<a href="dashboard" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt text-success"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<!-- Products -->
				<li class="nav-item">
					<a href="admin_products" class="nav-link">
						<i class="nav-icon fas fa-flag text-success"></i>
						<p>
							Products
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="admin_products" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Mashamba</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="admin_products" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Manyumba</p>
							</a>
						</li>

					</ul>
				</li>

				<!-- Users -->
				<li class="nav-item">
					<a href="users" class="nav-link">
						<i class="nav-icon fas fa-users text-success"></i>
						<p>
							System Users
						</p>
					</a>
				</li>

				<!-- Logout -->
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#end_session" href="">
						<i class="nav-icon fas fa-power-off text-success"></i>
						<p>
							Logout
						</p>
					</a>
				</li>


			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>