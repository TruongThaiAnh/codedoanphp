<?php include ROOT_DIR.'/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php';?>
<title>Product - ABC_SHOP</title>

<main class="page product-page" style="padding-top: 5rem;" >
    <section class="clean-block clean-product dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Product Page</h2>
                <p></p>
            </div>
            <div class="block-content">


            <!-- thong tin so luoc san pham -->
                <div class="product-info">
                    <div class="row"> 

                        <!-- phan anh -->
                        <!-- <div class="col-md-6">
                            <div class="gallery">
                                <div class="sp-wrap">
                                    <a href="<?php echo BASE_URL ?>/assets/img/tech/image1.jpg"><img class="img-fluid d-block mx-auto" src="<?php echo BASE_URL ?>/assets/img/tech/image1.jpg"></a>
                                    <a href="<?php echo BASE_URL ?>/assets/img/tech/ip63.jpg"><img class="img-fluid d-block mx-auto" src="<?php echo BASE_URL ?>/assets/img/tech/ip63.jpg"></a>
                                    <a href="<?php echo BASE_URL ?>/assets/img/tech/ip61.jpg"><img class="img-fluid d-block mx-auto" src="<?php echo BASE_URL ?>/assets/img/tech/ip61.jpg"></a>
                                </div>
                            </div>
                        </div> -->
                        <!-- phan anh -->

                        <!-- phan thong tin -->
                        <div class="col-md-12"> <!-- chuyen tu 6 -> 12 -->
                            <div class="info">
                                <h3><?php echo  $product['p_name']  ?></h3>
                                <div class="price">
                                    <h3>$<?php echo  $price  ?></h3>
                                </div>
                                <a href=" <a href="<?php echo BASE_URL . '/add-to-cart/'. TienIch::vn_to_str($product ['p_name'] ).'-' .$product['p_id'] ?>"><img class="img-fluid d-block mx-auto" src="<?php echo BASE_URL .'/uploads/' .$product['p_image'] ?>"></a>

                                    <button class="btn btn-primary" type="button"><i class="icon-basket"></i>Add to Cart</button>
                                </a>
                               
                            </div>
                        </div>
                        <!-- phan thong tin -->

                    </div>
                </div> 
                 <!-- thong tin so luoc san pham -->


                <!-- thong tin san pham -->
                <div class="product-info">
                    <div>
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-toggle="tab" id="description-tab" href="#description">Description</a></li>
                        </ul>
                        <div class="tab-content" id="myTABC_SHOPontent">

                            <!-- thong tin chi tiet -->
                            <div class="tab-pane fade show active description" role="tabpanel" id="description">
                                
                                <div class="row">
                                    <div class="col-md-5">
                                        <figure class="figure"><img class="img-fluid figure-img" src="<?php echo  $product_image ?>"></figure>
                                    </div>
                                    <div class="col-md-7">
                                        <p><?php echo  $product['p_descripsion']  ?></p>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- thong tin chi tiet -->

                        </div>
                    </div>
                </div>
                <!-- thong tin san pham -->
            </div>
        </div>
    </section>
</main>
<?php include './src/views/user/footer.php'; ?>