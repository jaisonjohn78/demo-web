<?php 

include 'includes/header.html'; 
include '../../html/includes/config.php';



?>


	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>My Referral Code</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
							
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								
								<a id="btnn" class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									Iosan
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" onclick="copy_code()">Copy to Clipboard</a>
									<a class="dropdown-item" href="#">Copy link</a>
									<a class="dropdown-item" href="#">Share</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			

				<!-- Striped table End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="table-responsive">
					<div class="title text-center">
								<h4>My Referral</h4>
							</div>	
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">id</th>
									<th scope="col">Referred to</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Returns</th>
                                    <th scope="col">Timestamp</th>
								</tr>
							</thead>
							<tbody>


								<!-- <tr>
									<th scope="row">1</th>
									<td>Born a crime</td>
									<td>treverNoah</td>
									<td>Naveen</td>
									<td>300</td>
									<td>1</td>
									<td>29/1/2023</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td><span class="badge badge-success">Success</span></td>
									
								</tr> -->
								
								
							</tbody>
						</table>
						<h2 class="text-center">No Record Found</h2>
					</div>
					
				</div>
				<!-- Responsive tables End -->			<!-- Contextual classes End -->
			</div>




			<script>
				function copy_code() {
					navigator.clipboard.writeText("<?php echo "hii";  ?>");
					alert("Code Copied To Clipboard");
				
				}
			</script>
<?php include 'includes/footer.html'; ?>
			