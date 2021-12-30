<title>Thêm Product</title>
<?php include ROOT_DIR.'/src/views/admin/admin-header.php'; ?>
<?php include ROOT_DIR . '/src/views/admin/admin-navbar.php';?>
<div class="container-fluid">
                    <h3 class="text-dark mb-4"  >Thêm Product</h3>
                    <div class="row mb-3">
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <form>
                                                
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="product_id">
                                                                <strong>Product ID</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="product_id"  name="product_id">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="product_name">
                                                                <strong>Product Name</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="product_name"  name="product_name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">
                                                        <strong>Product Image Address</strong>
                                                    </label>
                                                    <input class="form-control" type="text" id="img"  name="img">
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="product_des">
                                                        <strong>Product Descripton</strong>
                                                        <br>
                                                    </label>
                                                    <textarea class="form-control" id="signature" rows="4" name="product_des"></textarea>
                                                </div>
                                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <?php include ROOT_DIR.'/src/views/admin/admin-footer.php'; ?>