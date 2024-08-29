<?php
session_start();

require_once('../functions/reusableQuery.php');
require_once('../config/config.php');
include('../config/checklogin.php');
require_once('../helpers/products.php');
require_once('../partials/headn.php');
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <?php include('../partials/preloader.php'); ?>

        <!-- Navbar -->
        <?php include('../partials/header.php'); ?>
        <!-- /.navbar -->

      <!-- Main Sidebar Container -->
	  <?php include('../partials/ward_admin_sidenav.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Products</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

			 <!-- Main content -->
			 <div class="content">                
				<div class="container">
					<!-- row  -->
                    <div class="row">
                        <!-- system users dashboard -->
                        <div class="col-lg-12">
							<div class="card card-primary card-outline">
								<div class="card-header">
									<h3 class="card-title"></h3>
									<!-- Add new user button -->
									<div class="card-tools flex">										
										<a data-toggle="modal" data-target="#addUser"><button type="button" class="btn btn-block btn-success">Add New</button></a>
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>                  
											<tr>
												<th style="width: 10px">#</th>
												<th>Description</th>
												<th>Price range</th>																				
												<th>Image</th>																				
												<th>Product Type</th>																				
												<th>Status</th>												
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										<?php
                                        $fetch_records_sql = mysqli_query(
                                            $mysqli,
                                            "SELECT * FROM products"												
                                        );
                                        if (mysqli_num_rows($fetch_records_sql) > 0) {
                                            $cnt =  1;
                                            while ($rows = mysqli_fetch_array($fetch_records_sql)) {
                                        ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $cnt; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rows['products_description']; ?>
                                                    </td>
													<td>
														<?php echo $rows['products_price_to']; ?>
													</td>                                                 
													<td>
														My image
														<?php $rows['products_img']; ?>
													</td>                                                 
                                                    <td>
                                                        <?php echo $rows['products_type']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if($rows['product_status']){
															echo 'Sold';
														}else{
															echo 'Available';
														} ?>
                                                    </td>
                                                    <td>
                                                        <a data-toggle="modal" href="#password" class="badge badge-warning"><i class="fas fa-lock"></i>View</a>
                                                        <a data-toggle="modal" href="#update" class="badge badge-primary"><i class="fas fa-edit"></i> Edit</a>
                                                        <a data-toggle="modal" href="#deactivate" class="badge badge-danger"><i class="fas fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>
                                        <?php
                                                $cnt = $cnt + 1;
                                                include('../modals/products.php');
                                            }
                                        } ?>
                                    </tbody>
																					
										</tbody>										
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
				</div>
            </div>
            <!-- /.content -->
        <?php include('../modals/products.php');?>
			<!-- Add user modal -->   
        </div>
        <!-- /.content-wrapper -->
        <?php include('../partials/footer.php'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include('../partials/scriptn.php'); ?>
	
</body>

</html>

