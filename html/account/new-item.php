<?php include '../includes/header.php'; ?>

        <!-- Main -->
        <main>
            <!-- Section -->
            <section class="py-5 py-lg-8 border-bottom border-gray-100">
                <div class="container">
                    <div class="text-center">
                        <h1 class="m-0">Crete a New NFT</h1>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form>
                                <h6>Upload file</h6>
                                <div class="px-file-upload">
                                    <input name="file" id="px_file" type="file" class="px-input-file" data-multiple-caption="{count} Files Selected" multiple="">
                                    <label for="px_file" title="No File Choosen">
                                        <i class="feather-upload"></i>
                                        <span class="text-center d-inline-block w-100 mb-3">PNG, GIF, WEBP, MP4 or MP3. Max 100mb.</span>
                                        <span class="btn btn-primary-soft px-input-selected-file">Choose File</span>
                                    </label>
                                </div>
                                <div class="py-3">
                                    <h6>Price</h6>
                                    <input type="text" name="price" class="form-control" placeholder="Enter price for one piece">
                                </div>
                                <div class="py-3">
                                    <h6>Name</h6>
                                    <input type="text" name="Name" class="form-control" placeholder="e. g. 'Marioni with logo'">
                                </div>
                                <div class="py-3">
                                    <h6>Description <span class="fw-400 text-body">(Optional)</span></h6>
                                    <textarea class="form-control" rows="5" placeholder="After purchasing you’ll be able to get the real Logo"></textarea>
                                </div>
                                <div class="py-3">
                                    <h6>Royalties</h6>
                                    <input type="text" name="Royalties" class="form-control" placeholder="10%">
                                    <span class="opacity-8 small">Suggested: 0%, 10%, 20%, 30%. Maximum is 50%</span>
                                </div>
                                <div class="py-3">
                                    <h6>Properties <span class="fw-400 text-body">(Optional)</span></h6>
                                    <div class="row g-2">
                                        <div class="col">
                                            <input type="text" name="Size" class="form-control" placeholder="e.g. Size">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="m" class="form-control" placeholder="e.g. M">
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3">
                                    <h6>Alternative text for NFT <span class="fw-400 text-body">(Optional)</span></h6>
                                    <input type="text" name="Alternative" class="form-control" placeholder="Description in details">
                                </div>
                                <div class="py-3">
                                    <button class="w-100 btn btn-primary">Create your item</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <h6>Preview</h6>
                            <div class="product-card">
                                <div class="product-card-img-box">
                                    <a href="#">
                                        <img class="product-card-img" src="../../assets/img/artist.gif" title="" alt="">
                                    </a>
                                </div>
                                <div class="product-card-body">
                                    <div class="product-title mb-3">
                                        <h6 class="m-0">
                                            <a class="text-reset stretched-linka" href="#">Title</a>
                                        </h6>
                                        <span class="small">Highest bid 5/11</span>
                                    </div>
                                    <div class="product-actions d-flex align-items-end">
                                        <div class="price">
                                            <h6 class="m-0">3.99 ETH <span class="text-body fw-400">1/1</span> </h6>
                                            <a class="link-primary small fw-600" href="#">Buy Now</a>
                                        </div>
                                        <div class="like ms-auto">
                                            <a href="#" class="d-flex lh-1 fw-500 text-reset">
                                                <i class="bi bi-heart me-1"></i> <small>811</small>
                                            </a>
                                        </div>
                                    </div>
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
