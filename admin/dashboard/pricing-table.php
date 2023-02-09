<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Admin Panel</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
	<link rel="stylesheet" href="vendors/styles/validation-style.css">
	<style>

	</style>


</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo">Welcome to<h1>Easyearn</h1>Gateway Services</div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

		
	

	

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="javascript:;">
				<p>Easyearn Gateway</p>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown active">
						<a class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle no-arrow">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Orders</span>
						</a>
					</li>


					<li>
						<a class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
				
					<li>
						<a href="../../html/home/index.php" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Go Back	<img src="vendors/images/coming-soon.png" alt="" width="25"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				

				<div class="container px-0">
					
					

					<h4 class="mb-0 mt-30 text-blue h2 text-center">Select a Plan </h4>
					<h4 class="mb-30 mt-0 text-grey h4 text-center">A Better  Plan, A better Future Investment </h4>

					<div class="row">
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Standard</h5>
										<p>For small businesses</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€10<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>2 TB of space</li>
											<li>120 days of file recovery</li>
											<li>Smart Sync</li>
											<li>Dropbox Paper admin tools</li>
											<li>Granular sharing permissions</li>
											<li>User and company-managed groups</li>
											<li>Live chat support</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Advanced</h5>
										<p>For big businesses</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€15<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>Everything in Standard</li>
											<li>As much space as needed</li>
											<li>Advanced admin controls</li>
											<li>Dropbox Showcase</li>
											<li>Tiered admin roles</li>
											<li>Advanced user management tools</li>
											<li>Domain verification</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Enterprise</h5>
										<p>For enterprises</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€25<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>Everything in Advanced</li>
											<li>Account Capture</li>
											<li>Network control</li>
											<li>Enterprise management support</li>
											<li>Domain Insights</li>
											<li>Advanced training for end users</li>
											<li>24/7 phone support</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Enterprise</h5>
										<p>For enterprises</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€25<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>Everything in Advanced</li>
											<li>Account Capture</li>
											<li>Network control</li>
											<li>Enterprise management support</li>
											<li>Domain Insights</li>
											<li>Advanced training for end users</li>
											<li>24/7 phone support</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-30">
							<div class="card-box pricing-card-style2">
								<div class="pricing-card-header">
									<div class="left">
										<h5>Enterprise</h5>
										<p>For enterprises</p>
									</div>
									<div class="right">
										<div class="pricing-price">
											€25<span>/month</span>
										</div>
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul>
											<li>Everything in Advanced</li>
											<li>Account Capture</li>
											<li>Network control</li>
											<li>Enterprise management support</li>
											<li>Domain Insights</li>
											<li>Advanced training for end users</li>
											<li>24/7 phone support</li>
										</ul>
									</div>
								</div>
								<div class="cta">
									<a href="#" class="btn btn-primary btn-rounded btn-lg">Get Started</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			<div class="footer-wrap pd-20 mb-20 card-box">
					End-to-end Encryption and 100% Trusted 
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
	<script src="vendors/scripts/validation.js"></script>
</body>
</html>
