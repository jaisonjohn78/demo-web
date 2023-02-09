<?php include '../includes/header.php'; ?>

        <!-- Main -->
        <main>
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center section-heading">
                        <div class="col-lg-9 col-xl-7 text-center">
                            <h3 class="h1 mb-3">Contact Us</h3>
                            <div class="lead">Any doubts or problems, feel free to contact us!</div>
                        </div>
                    </div>  
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body p-5 p-lg-7">
                                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="static/vendor/mail/bat/rd-mailform.php">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="contact-name">Your Name</label>
                                                    <input id="contact-name" type="text" name="name" placeholder="Rachel Roth" data-constraints="@Required" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="contact-email">Email Address</label>
                                                    <input id="contact-email" type="email" name="email" placeholder="name@example.com" data-constraints="@Required" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="contact-phone">Phone (optional)</label>
                                                    <input type="tel" name="contact-phone" class="form-control" placeholder="+01 888 888 6666" id="contact-phone">
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex flex-row">
                                                <div class="form-group w-100 d-flex flex-column">
                                                    <label class="form-label" for="contact-message">Message</label>
                                                    <textarea class="form-control min-h-150px h-100 w-100" id="contact-message" name="message" rows="3" placeholder="Hi there, I would like to ..." data-constraints="@Required" style="height: 150px"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 pt-2">
                                                <button class="btn btn-primary" type="submit" name="send">Get Started</button>
                                                <div class="snackbars" id="form-output-global"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <section>
                <div class="container">
                    <div class="border border-gray-200 position-relative bg-body rounded-3 z-index-1">
                        <div class="row separated">
                            <div class="col-lg-3 col-sm-6">
                                <div class="py-5 text-center">
                                    <div class="icon-lg bg-primary-soft text-primary rounded-circle mb-4">
                                        <i class="fs-4 bi bi-map"></i>
                                    </div>
                                    <h6 class="m-0">New York, NY 92103, USA</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="py-5 text-center">
                                    <div class="icon-lg bg-primary-soft text-primary rounded-circle mb-4">
                                        <i class="fs-4 bi bi-phone"></i>
                                    </div>
                                    <h6 class="m-0">1-800-222-000</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="py-5 text-center">
                                    <div class="icon-lg bg-primary-soft text-primary rounded-circle mb-4">
                                        <i class="fs-4 bi bi-envelope"></i>
                                    </div>
                                    <h6 class="m-0">info@domain.com</h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="py-5 text-center">
                                    <div class="icon-lg bg-primary-soft text-primary rounded-circle mb-4">
                                        <i class="fs-4 bi bi-map"></i>
                                    </div>
                                    <h6 class="m-0">1800 302 2302</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <div class="mt-n12">
                <div class="ratio ratio-21x9" style="--bs-aspect-ratio: 50vh;">
                    <iframe class="grayscale" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
                </div>
            </div>
            <!-- End Section -->
        </main>
        <!-- End Main -->
        <?php include '../includes/footer.php'; ?>
