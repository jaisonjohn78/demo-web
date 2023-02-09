<?php include '../includes/header.php'; ?>

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
                                    <p class="small mb-4">Made with love for designers & developers.</p>
                                    <form>
                                        <div class="pb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="Name" class="form-control" placeholder="Rachel Roth">
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Email address</label>
                                            <input type="text" name="Email" class="form-control" placeholder="name@example.com">
                                        </div>
                                        <div class="pb-3">
                                            <label class="form-label">Password</label>
                                            <input type="text" name="Password" class="form-control" placeholder="***********'">
                                        </div>
                                        <div class="form-check m-0 pb-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree to the <a href="#">terms and conditions</a>
                                            </label>
                                        </div>
                                        <div class="pb-3">
                                            <button class="w-100 btn btn-primary">Create account</button>
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
        </main>
        <!-- End Main -->
        <?php include '../includes/footer.php'; ?>
