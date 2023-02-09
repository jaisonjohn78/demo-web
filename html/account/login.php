<?php include_once '../includes/header.php'; ?>

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
                                    <form>
                                        <div class="pb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="text" name="email" class="form-control" placeholder="name@example.com">
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Password</label>
                                            <input type="text" name="password" class="form-control" placeholder="***********'">
                                        </div>
                                        <div class="form-check m-0 pb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Remember me leter
                                            </label>
                                        </div>
                                        <div class="pb-3">
                                            <button class="w-100 btn btn-primary">Log In</button>
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
        </main>
        <!-- End Main -->
        <?php include_once '../includes/footer.php'; ?>
