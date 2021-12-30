<title>Payment - ABC_SHOP</title>
<?php include ROOT_DIR.'/src/views/user/header.php'; ?>
<?php include ROOT_DIR . '/src/views/user/navbar.php';?>
<main class="page payment-page">
    <section class="clean-block payment-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Payment</h2>
            </div>
            <form>

                <!-- phan thong tin cac dien thoai da chon -->
                <div class="products">
                    <h3 class="title">Checkout</h3>


                    <!-- san pham o day -->
                    <!-- san pham o day -->

                    <?php for ($i = 0; $i < 4; $i++) {  ?>
                    <div class="item"><span class="price price-img ">$200</span>
                        <div class="product-image"><img class="img-fluid d-block mx-auto image" src="<?php echo BASE_URL ?>/assets/img/ip/ip12ca.jpg" style="padding:20px 0; height:50%; width:50%; "></div>
                        <p class="item-name">Product 1</p>
                        <p class="item-description">Iphone 12 cho bồ xếp </p>
                    </div>
                    <div class="total"><span></span></div>
                    <?php } ?>
                    <!-- san pham o day -->
                    <!-- san pham o day -->

                    <div class="total"><span>Total</span><span class="price">$1000</span></div>
                </div>
                <!-- phan thong tin cac dien thoai da chon -->


                <!-- phan thong ket don hang -->
                <div class="card-details">
                    <h3 class="title">Credit Card Details</h3>
                    <div class="form-row">
                        <div class="col-sm-7">
                            <div class="form-group"><label for="card_holder">Card Holder</label><input class="form-control" type="text" id="card_holder" placeholder="Card Holder" name="card_holder"></div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group"><label>Expiration date</label>
                                <div class="input-group expiration-date"><input class="form-control" type="text" placeholder="MM" name="expiration_month"><input class="form-control" type="text" placeholder="YY" name="expiration_year"></div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group"><label for="card_number">Card Number</label><input class="form-control" type="text" id="card_number" placeholder="Card Number" name="card_number"></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group"><label for="cvc">CVC</label><input class="form-control" type="text" id="cvc" placeholder="CVC" name="cvc"></div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Proceed</button></div>
                        </div>
                    </div>
                </div>
                <!-- phan thong ket don hang -->


            </form>
        </div>
    </section>
</main>
<?php include ROOT_DIR . '/src/views/user/footer.php'; ?>