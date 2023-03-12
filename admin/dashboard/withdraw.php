<?php 
session_start();
include 'includes/header.html'; 
include '../../html/includes/config.php';


$user_id = $_SESSION['user_id'];

$user_info = mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE id='$user_id'");
$row = mysqli_fetch_assoc($user_info);

if(isset($_POST['submit'])){
$amount = $_POST['w_amount'];
$acc_no = $_POST['ac_no'];
$upi = $_POST['upi'];
$phone = $_POST['phone'];
$balance = $row['balance'];

if(intval($balance) < intval($amount)){
	echo "<script>alert('Insufficient Balance');</script>";
}
else{
	$w_id = mt_rand(1111,9999);
	$withdraw = mysqli_query($conn, "INSERT INTO `withdraw`( `user_id`, `w_id`, `acc_no`, `UPI`, `phone`, `amount`) VALUES ('$user_id','$w_id','$acc_no','$upi','$phone','$amount')");
	
	if($withdraw){
		echo "<script>alert('Withdraw Request Sent✅');</script>";
	}
	else{
		echo "<script>alert('Something Went Wrong');</script>";
	}

}
}


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
									<li class="breadcrumb-item">My Balance:  ₹<?php echo $row['balance'];?></li>
									
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
			

				<!-- Striped table End -->
				<!-- Responsive tables Start -->
				<div class="pd-20 card-box mb-30">
					<div class="row">
					<form class="p-5" method="POST">
						<h2 class="pb-4">Withdraw Request</h2>
  <div class="form-row">
    <div class="form-group col-md-6">

      <label for="inputEmail4">Account Number</label>
      <input type="text" name="ac_no" class="form-control" id="inputEmail4" placeholder="Account Number" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">UPI ID</label>
      <input type="text" name="upi" class="form-control" id="inputPassword4" placeholder="UPI ID" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Phone Number</label>
      <input type="tel" name="phone" class="form-control" value="+91" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Withdraw Amount</label>
	  <div class="input-group-prepend">
          <div class="input-group-text">₹</div>
		  <input type="number" name="w_amount" class="form-control" max="6000" step="250" min="250" required>
        </div>
	  

	  

    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Time</label>
      <select id="inputState" class="form-control">
        <option selected disabled>Choose...</option>
        <option>Instant</option>
        <option>3-4 Working Days</option>
      </select>
    </div>

  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Yes, I agree that all the details are correct
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit Request</button>
</form>
					</div>
					
				</div>
				<!-- Responsive tables End -->			<!-- Contextual classes End -->
			</div>

			<div class="pd-20 card-box mb-30">

			<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">sr</th>
									<th scope="col">refferance ID</th>
                                    <th scope="col">Account no.</th>
                                    <th scope="col">UPI ID</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Timestamp</th>
                                    <th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$withdraw = mysqli_query($conn, "SELECT * FROM `withdraw` WHERE user_id='$user_id'");
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
			