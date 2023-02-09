<?php include '../includes/header.php'; ?>

        <!-- Main -->
        <main>
            <!-- Section -->
            <section class="py-5 py-lg-8 bg-center bg-no-repeat bg-cover" style="background-image: url(../../assets/img/page-title.jpg);">
                <div class="container">
                    <div class="text-center">
                        <h1 class="m-0 text-white">Explore All NFTs</h1>
                        <ol class="breadcrumb breadcrumb-light justify-content-center pt-4 text-white">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item active text-white"><a class="text-white" href="../account/new-item.php">Create your Own NFT ?</a></li>
                        </ol>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Filter -->
            <section class="py-5 py-lg-8">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-3 col-md-4 sticky-lg-top sticky-lg-top-header z-index-8">
                            <div class="card bg-transparent">
                                <div class="card-header bg-transparent">
                                    <h6 class="m-0">Explore Filter</h6>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Sort by</label>
                                        <select class="px-nice-select">
                                            <option data-display="Sort by">Sort by</option>
                                            <option value="1">Recently added</option>
                                            <option value="2">Price: Low to High</option>
                                            <option value="3">Price: High to Low</option>
                                            <option value="4">Auction ending soon</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">LIKES</label>
                                        <select class="px-nice-select">
                                            <option data-display="All">All</option>
                                            <option value="1">Most liked</option>
                                            <option value="2">Least liked</option>
                                        </select>
                                    </div>
                                    
                                    <div>
                                        <label class="form-label">Price range</label>
                                        <input type="range" name="" id="" style="background-color: transparent; border: none;">
                                        <div class="row pt-3">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="From" name="low">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="To" name="high">
                                            </div>
                                            <div class="col-12 pt-3">
                                                <button class="btn btn-primary w-100 btn-sm">Apply Price</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 mt-5 mt-lg-0">
                            <div class="row g-3">
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-2.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-3.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-4.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-5.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-6.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-7.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-8.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="product-card-02">
                                        <div class="product-card-media">
                                            <div class="like">
                                                <a href="#">
                                                    <i class="bi bi-heart me-2"></i> <small>811</small>
                                                </a>
                                            </div>
                                            <div class="place-bid">
                                                <a href="#" class="btn btn-primary">
                                                    <i class="bi bi-cart3 me-1"></i> Place Bid
                                                </a>
                                            </div>
                                            <a href="#">
                                                <img class="product-card-img" src="../../assets/img/product-1.jpg" title="" alt="">
                                            </a>
                                        </div>
                                        <div class="product-card-body">
                                            <div class="product-title">
                                                <h5 class="m-0 fw-500"><a class="text-reset" href="#">NiftyGateway Contemplates</a></h5>
                                                <div class="tags">bsc</div>
                                            </div>
                                            <div class="product-actions d-flex align-items-start">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img class="avatar-img rounded-circle" src="../../assets/img/avatar-1.jpg" title="" alt="">
                                                    </div>
                                                    <div class="ps-2 lh-sm">
                                                        <span>Creator</span>
                                                        <h6 class="m-0"><a href="#" class="text-reset">nancydrew</a> </h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <span>Current Bid</span>
                                                    <h6 class="m-0"> 4.89 ETH</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-6 pt-lg-8 text-center">
                                <a class="btn btn-primary-soft" href="#">
                                    Load More <i class="bi bi-arrow-clockwise"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Filter -->
        </main>
        <!-- End Main -->
        <?php include '../includes/footer.php'; ?>
