<?php 
include_once '../includes/config.php'; 
include_once '../includes/header.php'; 



// error_reporting(0);


$_POST["refer"] = "";
if (isset($_POST["signup"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $tel = mysqli_real_escape_string($conn, $_POST["Tel"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["Epassword"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["Cpassword"]));
    $package = mysqli_real_escape_string($conn, $_POST["Pack"]);
    $referred = mysqli_real_escape_string($conn, $_POST["refer"]);
    $referral_code = substr(str_shuffle("0123456789aceftQWERTYUIOPASDFGHJKLZXCVBNM"), 0, 6);
  
    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE email='$email'"));
    $check_refer = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `master_user_tb` WHERE referral_code='$referred'"));
    $flag = 0;
    if($check_refer == 0 && $_POST["refer"] != ""){
      echo "<script>alert('Referral Code is Invalid !!');</script>";
      $flag = 1;
    }
    if ($password != $cpassword) {
        echo "<script>alert('Password did not match.');</script>";
       
    } elseif ($check_email > 0) {
      echo "<script>alert('Email already exists in out database.');</script>";
    } else {
      $sql = "INSERT INTO master_user_tb (name, email, mobile, password, pack, referral_code) VALUES ('$full_name', '$email', '$tel', '$password', '$package', '$referral_code')";
      $result = mysqli_query($conn, $sql);
    
      if ($result && $flag == 0) {
        echo "<script>alert('Registration successful.');</script>";
      } else {
        echo "<script>alert('Registration failed.');</script>";
    }
    }
  }





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
                                    <h3 class="mb-1">Create your account</h3>
                                    <p class="small mb-4">Made with love for users like you.</p>
                                    <form method="POST">
                                        <div class="pb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="Name" class="form-control" placeholder="Full Name" required>
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="text" name="Email" class="form-control" placeholder="name@example.com" required>
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Mobile Number</label>
                                            <input type="text" name="Tel" class="form-control" placeholder="918693018540" required pattern="^\d{2}\d{10}$">
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="Epassword" class="form-control" placeholder="***********" required>
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" name="Cpassword" class="form-control" placeholder="***********" required>
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Package</label>
                                            <select name="Pack" class="form-control" id="pack_select">
                                                <option value="" selected disabled>Select a package</option>
                                                <option value="package 1" id="pack1">Package 1 - ₹ 199</option>
                                                <option value="package 2" id="pack2">Package 2 - ₹ 399</option>
                                                <option value="package 3" id="pack3">Package 3 - ₹ 799</option>
                                                <option value="package 4" id="pack4">Package 4 - ₹ 1,599</option>
                                                <option value="package 5" id="pack5">Package 5 - ₹ 3,199</option>
                                                <option value="package 6" id="pack6">Package 6 - ₹ 6,399</option>
                                                <option value="package 7" id="pack7">Package 7 - ₹ 12,799</option>
                                                <option value="package 8" id="pack8">Package 8 - ₹ 25,599</option>
                                                <option value="package 9" id="pack9">Package 9 - ₹ 51,199</option>
                                                <option value="package 10" id="pack10">Package 10 - ₹ 1,02,399</option>

                                            </select>
                                        </div>

                                        <div class="pb-3">
                                            <label class="form-label">Referral Code </label>
                                            <input type="text" name="refer" class="form-control" placeholder="Optional" >
                                        </div>

                                        
                                        <div class="form-check m-0 pb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                        <div class="pb-3">
                                            <input id="submit" type="submit" name="signup" class="w-100 btn btn-primary" value="Create Account" >
                                        </div>
                                        <div class="text-center"><small>Already have an acocunt?</small> <a href="login.php" class="small font-weight-bold">Login</a></div>
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
            var select = document.querySelector('#pack_select'),
            input = document.querySelector('input[type="submit"]'),
            submit = document.querySelector('#submit');
            select.addEventListener('change',function(){
                let select_text = select.value;
                var pack_text = document.getElementById(select_text).innerText;
                console.log(pack_text);
                submit.removeAttribute("disabled");
                submit.value = pack_text; 
                
                
            }); 

        </script>
        
        <?php

        
            if(isset($_GET["pack"])) {
                $pack = $_GET["pack"];
                echo "<script>submit.removeAttribute('disabled');\n";
                echo "let select_text = select.value;\n";   
                echo "var pack_text = document.getElementById(select_text).innerText;\n";
                echo "submit.value = pack_text; </script>";

            }
        ?>
        <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
        var pack_id = document.getElementById("<?php echo "pack".$pack; ?>");
        console.log(pack_id.value);
        var select_pack = pack_id.value;
        // select pack on url parameter to be selected
        document.getElementById("pack_select").value = select_pack;
        
        </script>

        <?php include '../includes/footer.php'; ?>
