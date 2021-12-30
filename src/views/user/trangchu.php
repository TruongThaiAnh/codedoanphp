<title>Home - ABC_SHOP</title>

<?php include ROOT_DIR . '/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php'; ?>

<main class="page landing-page" style="margin-top: 5rem;" >

    <!-- TAM THOI -->
    <a href="<?php echo BASE_URL . '/danh-muc-admin' ?>" style="margin : 0 30rem;" >
        <button class="btn-g12" type="button">Admin</button>
    </a>
    <!-- TAM THOI -->

    <!-- slider -->
    <section class="clean-block slider dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Các Mẫu Iphone mà ABC_SHOP Shop Hiện Có</h2>
            </div>
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner">

                    <!-- anh slider -->
                    <div class="carousel-item active">
                        <img class="w-100 d-block" src="assets/img/ip/11de2.jpg" alt="Slide Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/ip/12de2.jpg" alt="Slide Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/ip/13de2.jpg" alt="Slide Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/ip/14de2.jpg" alt="Slide Image">
                    </div>
                    <!-- anh slider -->
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- slider -->


    <!-- sản phẩm đang hot -->
    <section class="clean-block clean-catalog dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Các Sản Phẩm Đang Hot</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products" style="margin-left:20px;">
                            <div class="row no-gutters">
                                <!-- san pham o day  -->
                                <?php foreach ($productList as $product) {  ?>
                                    <div class="col-12 col-md-6 col-lg-3" style="margin:5px 0;">
                                        <div class="clean-product-item">
                                            <div class="image" style="width :300px; height:200px; margin-left:-70px; ">
                                                <a href="<?php echo BASE_URL . '/san-pham' ?>"><img class="img-fluid d-block mx-auto" src="assets/img/ip/13poca.jpg"></a>
                                            </div>
                                            <div class="product-name"><?php  echo $product['p_name'] ?> </div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$300</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- san pham o day  -->

                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sản phẩm đang hot -->
    <!-- phan trang o day -->


    <!-- Sắp ra mẳt-->
    <section class="clean-block clean-info dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Thông Tin Sản Phẩm Sắp Được Ra Mắt</h2>

            </div>
            <div class="row align-items-center">
                <div class="col-md-6"><img class="img-thumbnail" src="assets/img/ip/ip13.jpg"></div>
                <div class="col-md-6" style="margin-top: 3rem;">
                    <h3>Iphone 13</h3>
                    <div class="getting-started-info">
                        <p>Nếu đúng như dự kiến thì rất có thể rằng iPhone 13 Pro Max sẽ được cho ra mắt bởi Apple vào năm 2022 nếu các thử nghiệm về chip mới cũng như các công nghệ mới được đề cập ở trên hoàn thành trong cuối năm 2021. Tuy nhiên vẫn chưa có thông tin hoàn toàn chính xác nào về ngày ra mắt trên thị trường nên chúng ta chỉ có thể tiếp tục chờ đợi tin tức từ Apple..</p>
                    </div>
                    <button class="btn btn-outline-primary btn-lg" type="button">Pre-Order Now</button>
                </div>

            </div>

        </div>
        </div>
    </section>
    <!-- Sắp ra mẳt-->


    <!-- Sản phẩm đang giảm giá -->
    <section class="clean-block clean-catalog dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Các Sản Phẩm Đang Được Giảm Giá</h2>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="products" style="margin-left:20px;">
                            <div class="row no-gutters">
                                <!-- san pham o day  -->
                                <?php for ($i = 0; $i < 12; $i++) {  ?>
                                    <div class="col-12 col-md-6 col-lg-3" style="margin:5px 0;">
                                        <div class="clean-product-item">
                                            <div class="image" style="width :300px; height:200px; margin-left:-70px; ">
                                                <a href="<?php echo BASE_URL . '/san-pham' ?>"><img class="img-fluid d-block mx-auto" src="assets/img/ip/11poca.jpg"></a>
                                            </div>
                                            <div class="product-name">Iphone 13</div>
                                            <div class="about">
                                                <div class="price">
                                                    <h3>$300</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- san pham o day  -->

                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sản phẩm đang giảm giá -->
    <!-- phan trang o day -->


    <!-- more -->
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">More</h2>
            </div>
            <div class="row justify-content-center">
                <?php for ($i = 0; $i < 4; $i++) {  ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/ip/12de3.jpg">
                            <div class="card-body info">
                                <p class="card-text">iPhone 12 mỏng hơn 11%, nhỏ hơn 15% và nhẹ hơn 16% so với phiên bản tiền nhiệm. Chiếc iPhone 12 vẫn tiếp tục sở hữu màn hình kích thước 6.1 inch, trong khi đó iPhone 12 Mini có kích thước màn hình nhỏ hơn với 5.3 inch</p>
                                <a href="<?php echo BASE_URL . '/gio-hang' ?>">
                                    <button class="btn btn-outline-primary btn-sm" type="button">Buy Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- more -->


</main>
<?php include './src/views/user/footer.php'; ?>