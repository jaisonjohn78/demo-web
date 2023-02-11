<?php 
include_once '../includes/config.php';


if (isset($_POST["login"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
  
    $check_email = mysqli_query($conn, "SELECT id FROM `master_user_tb` WHERE email='$email' AND password='$password' AND status='0'");
  
    if (mysqli_num_rows($check_email) > 0) {
      $row = mysqli_fetch_assoc($check_email);
      
    session_start();
      $_SESSION["user_id"] = $row['id'];
      echo "<script>window.location.href = '../../admin/dashboard/index.php';</script>";
    } else {
      echo "<script>alert('Login details is incorrect. Please try again.');</script>";
    }
  }

  
  
include_once '../includes/header.php';

?>

        <!-- Main -->
        <main>
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-5 col-xl-4">
                            <div class="card">
                                <div class="card-body p-4 p-xl-5">
                                    <h3 class="mb-1">Login</h3>
                                    <p class="small mb-4">Sign in to your account to continue.</p>
                                    <form method="POST" >
                                        <div class="pb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="text" name="email" class="form-control" placeholder="name@example.com" required>
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="***********" required>
                                        </div>
                                        <div class="form-check m-0 pb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me later
                                            </label>
                                        </div>
                                        <div class="pb-3">
                                            <input type="submit" name="login" value="Login" class="w-100 btn btn-primary">
                                        </div>
                                        <div class="text-center"><small>Not registered?</small> <a href="sign-up.php" class="small font-weight-bold">Create account</a></div>
                                        <div class="text-center"><small>Forgot Password?</small> <a href="forget-password.php" class="small font-weight-bold">Recover Password</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <div class="left-effects d-none d-lg-block"></div>
            <div class="right-effects d-none d-lg-block"></div>
        </main>
        <!-- End Main -->

        <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
        </script>
        <?php include_once '../includes/footer.php'; ?>
