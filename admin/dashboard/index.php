<?php 
session_start();
include '../../html/includes/config.php';
include_once '../../html/includes/package.php';


if(!isset($_SESSION["user_id"])){
	header("Location: ../../html/account/login.php");
}



$user_id = $_SESSION['user_id'];

$user_info = mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE id='$user_id'");
$row = mysqli_fetch_assoc($user_info);


include 'includes/header.html'; 
?>


	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Welcome back <div class="weight-600 font-30 text-blue"><?php echo $row['name']; ?>!</div>
						</h4>
						<p class="font-18 max-width-600 align-right">
							<?php

								echo "Your Balance: " . $row['balance'];
							

							


							?>

						</p>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo "₹ " . $row['earned']; ?></div>
								<div class="weight-600 font-14">Total Earning</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart2"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0"><?php echo "₹ " . $row['withdraw']; ?></div>
								<div class="weight-600 font-14">Withdrawn</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div id="chart4"></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">
									<?php
										echo $row['refers'];
										
									?>
								</div>
								<div class="weight-600 font-14">Refferals</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Activity</h2>
						<div id="chart5"></div>
					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Accuracy</h2>
						<div id="chart6"></div>
					</div>
				</div>
			</div>



			<!-- <div class="card-box mb-30 col-12">
				<h2 class="h4 pd-20">Catalog</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus">Sr No.</th>
							<th class="table-plus">Name</th>
							<th  class="table-plus">Date of Issue</th>
							<th>Date of Submition</th>
							<th>Due</th>
							<th>Oty</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>



						<tr>
							<td class="table-plus">
								1
							</td>
							<td>
								<h5 class="font-16">Alice in Wonderland</h5>
								by Nikhil
							</td>
							<td>2023-01-01 15:45:21</td>
							<td style="color: red;">2023-01-30 15:45:21</td>
							<td style="color: red;">₹120</td>
							<td>4</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-alarm"></i> Notify User</a>
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
						</tr>
						
						
						
					</tbody>
				</table>
			</div> -->





			
			
			<?php include 'includes/footer.html'; ?>