<?php 
session_start();
include '../../html/includes/config.php';
include 'includes/header-admin.html'; 



$w_id = $_GET['id'];

$withdraw = mysqli_query($conn, "SELECT * FROM `withdraw` WHERE w_id='$w_id'");
$wrow = mysqli_fetch_assoc($withdraw);

$uid = $wrow['user_id'];
$user = mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE id='$uid'");
$urow = mysqli_fetch_assoc($user);

if(isset($_POST['submit'])){
$status = $_POST['status'];
$amount = $_POST['amount'];
$withdraw = mysqli_query($conn, "UPDATE `withdraw` SET `amount` = '$amount',`status` = '$status' WHERE `w_id` = $w_id;");
echo "<script>alert('Withdraw Request Updated✅');";
echo "window.location.href='withdraw-admin.php'</script>;";
}




?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Order Edit</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">horizontal Basic Forms</h4>
							
						</div>
						
					</div>
					<form method="POST">
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>ID</label>
                                <input class="form-control" type="text" placeholder="id" value="<?php echo $wrow['w_id']; ?>" readonly>
                            </div>
                            
                            <div class="col-md-6 form-group">
                                <label>username</label>
                                <input class="form-control" type="text" placeholder="username" value="<?php echo $urow['name']; ?>" required readonly>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="phone" placeholder="phone" value="<?php echo $wrow['phone']; ?>" readonly required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>account number</label>
                                <input class="form-control" type="text" name="acc_no" placeholder="account" value="<?php echo $wrow['acc_no']; ?>" readonly required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>UPI</label>
                                <input class="form-control" type="text" name="upi" placeholder="UPI" value="<?php echo $wrow['UPI']; ?>" readonly required>
                                
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-4 form-group">
                                <label>Amount</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-rupee "></i>
                                    </div>
                                    <input class="form-control" type="text" name="amount" value="<?php echo $wrow['amount']; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Time</label>
                                <input class="form-control" type="text" placeholder="time" value="<?php echo $wrow['timestamp']; ?>" readonly required>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option value="0">Pending</option>
                                    <option value="1">Approved</option>
                                    <option value="2">Rejected</option>
                                </select>
                            </div>

                        </div>

                              
                              <div class="form-group" >
                                   <input class="btn btn-primary btn-lg float-right" type="submit" name="submit">
                              </div>

						<div class="form-group">
							<small class="form-text text-muted">
                                        All fields are must filled!
							</small>
						</div>

					</form>
					
				</div>

                <?php include 'includes/footer.html';  ?>
