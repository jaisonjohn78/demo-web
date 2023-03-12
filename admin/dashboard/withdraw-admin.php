<?php 
session_start();
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
								<h4>Withdraw</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">Withdraw Requests > </li>
									
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
			

				
			</div>

			<div class="pd-20 card-box mb-30">

			<table class="table table-striped" id="myTable">
							<thead>
								<tr>
									<th scope="col">sr</th>
									<th scope="col">refferance ID</th>
                                    <th scope="col">Account no.</th>
                                    <th scope="col">UPI ID</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Timestamp</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$withdraw = mysqli_query($conn, "SELECT * FROM `withdraw`");
								$i=1;
								if(mysqli_num_rows($withdraw) > 0){
								while($wrow = mysqli_fetch_assoc($withdraw)){


								?>


								<tr>
									<th scope="row"><?php echo $i; ?></th>
									<td><?php echo $wrow['w_id']; ?></td>
									<td><?php echo $wrow['acc_no']; ?></td>
									<td><?php echo $wrow['UPI']; ?></td>
									<td><?php echo $wrow['amount']; ?></td>
									<td><?php echo $wrow['timestamp']; ?></td>
									<?php
									if($wrow['status'] == 0){
									?>
										<td><span class="badge badge-warning">Approval Pending</span></td>
									<?php
									} elseif($wrow['status'] == 1){
									?>
                                    <td><span class="badge badge-success">Withdraw Success</span></td>

									<?php
									} elseif($wrow['status'] == 2){
									?>
									<td><span class="badge badge-danger">Withdraw Rejected</span></td>
									<?php
									}
									?>
									<td style="display: flex;justify-content: space-evenly;">
                                    
                                        <a href="withdraw-admin-edit.php?id=<?php echo $wrow['w_id']; ?>"><i class="fa fa-pencil"></i></a>
                                        <a onclick="alert('Deleting this data is restricted');"><i class="fa fa-trash"></i></a>
                                    </td>

									
								</tr>
								
								<?php
								$i++;
								}}else{
									echo "<tr><td colspan='7'>No Withdraw Request</td></tr>";
								}
								
								?>
								
							</tbody>
						</table>

			</div>
			<script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
		</script>
<?php include 'includes/footer.html'; ?>
			