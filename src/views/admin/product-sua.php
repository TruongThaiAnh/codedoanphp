<title>Sửa Product</title>
<?php include ROOT_DIR.'/src/views/admin/admin-header.php'; ?>
<?php include ROOT_DIR . '/src/views/admin/admin-navbar.php';?>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Sửa Product</h3>
    <div class="row mb-3">
        <div class="col-lg-10">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-body">
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

</div>
                <?php include ROOT_DIR.'/src/views/admin/admin-footer.php'; ?>