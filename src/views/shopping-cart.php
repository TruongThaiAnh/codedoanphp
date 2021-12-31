<title>Shopping Cart - abc</title>
<?php include ROOT_DIR.'/src/views/header.php'; ?>
    <main class="page shopping-cart-page">
        <section class="clean-block clean-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Shopping Cart</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="content">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="<?php echo BASE_URL ?>/assets/img/ip/ip12sh.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Iphone 12</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">6.1 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">8GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">64GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$200</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="<?php echo BASE_URL ?>/assets/img/ip/ip13sh.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Iphone 13</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">7.4inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">8GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">128GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="2"></div>
                                        <div class="col-6 col-md-2 price"><span>$300</span></div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3">
                                            <div class="product-image"><img class="img-fluid d-block mx-auto image" src="<?php echo BASE_URL ?>/assets/img/ip/ip12sh.jpg"></div>
                                        </div>
                                        <div class="col-md-5 product-info"><a class="product-name" href="#">Iphone 12</a>
                                            <div class="product-specs">
                                                <div><span>Display:&nbsp;</span><span class="value">6.1 inch</span></div>
                                                <div><span>RAM:&nbsp;</span><span class="value">8GB</span></div>
                                                <div><span>Memory:&nbsp;</span><span class="value">64GB</span></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-2 quantity"><label class="d-none d-md-block" for="quantity">Quantity</label><input type="number" id="number" class="form-control quantity-input" value="1"></div>
                                        <div class="col-6 col-md-2 price"><span>$200</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <h4><span class="text">Subtotal</span><span class="price">$1000</span></h4>
                                <h4><span class="text">Discount</span><span class="price">$0</span></h4>
                                <h4><span class="text">Shipping</span><span class="price">$2</span></h4>
                                <h4><span class="text">Total</span><span class="price">$1002</span></h4>
                                <a href="<?php echo BASE_URL . '/thanh-toan' ?>">
                                <button class="btn-g12" type="button">Payment</button> 
                                </a>
                                <div class="text-center"><a class="small" href="<?php echo BASE_URL . ""?>">Back To Home</a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include ROOT_DIR.'/src/views/footer.php'; ?>