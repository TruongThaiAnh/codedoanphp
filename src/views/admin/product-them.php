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
                                            <!-- form thêm -->
                                            <form  action="product-them.php" method="POST">
                                                
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="product_id">
                                                                <strong>Product Name</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="product_id"  name="productName">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="product_name">
                                                                <strong>Product Price</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="product_name"  name="productPrice">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">
                                                        <strong>Product Image </strong>
                                                    </label>
                                                    <input class="form-control" type="text" id="img"  name="productImage">
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="product_des">
                                                        <strong>Product Descripton</strong>
                                                        <br>
                                                    </label>
                                                    <textarea class="form-control" id="signature" rows="4" name="productDescription"></textarea>
                                                </div>
                                                <div class="col">
                                                        <div class="form-group">
                                                            <label for="product_name">
                                                                <strong>Product Status</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="product_status"  name="status">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="product_name">
                                                                <strong>Last update</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="product_last_update"  name="lastupdate">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="product_name">
                                                                <strong>Sales</strong>
                                                            </label>
                                                            <input class="form-control" type="text" id="sale"  name="sale">
                                                        </div>
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
                <!-- chk fillder -->
     <div class="row mb-3">
        <div class="col-lg-10">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <!-- form thêm -->
                            <form action="./test-2" method="post">
                                <input type="text" name="name">
                                <textarea name="description"></textarea>
                                <input id="ckfinder-input-2" type="text" style="width:60%" name="input-name">
                                <a id="ckfinder-popup-2" class="button-a button-a-background">Browse Server</a>
                                <img src="" id="img">

                                <input type="submit">
                            </form>
                            <script>
                                var editor = CKEDITOR.replace('description');
                                CKFinder.setupCKEDITOR(editor);
                                var button2 = document.getElementById('ckfinder-popup-2');
                                var img = document.getElementById('img');


                                button2.onclick = function() {
                                    selectFileWithCKFinder('ckfinder-input-2');
                                };

                                function selectFileWithCKFinder(elementId) {
                                    CKFinder.popup({
                                        chooseFiles: true,
                                        width: 800,
                                        height: 600,
                                        onInit: function(finder) {
                                            finder.on('files:choose', function(evt) {
                                                var file = evt.data.files.first();
                                                var output = document.getElementById(elementId);
                                                output.value = file.getUrl();
                                                img.src = file.getUrl();
                                            });

                                            finder.on('file:choose:resizedImage', function(evt) {
                                                var output = document.getElementById(elementId);
                                                output.value = evt.data.resizedUrl;
                                            });
                                        }
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- chk filder chưa xong -->
                <?php include ROOT_DIR.'/src/views/admin/admin-footer.php'; ?>