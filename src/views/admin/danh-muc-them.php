<title>Thêm Category</title>
<?php include ROOT_DIR . '/src/views/admin/admin-header.php'; ?>
<?php include ROOT_DIR . '/src/views/admin/admin-navbar.php'; ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Thêm Category</h3>
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
                                            <label for="category_id">
                                                <strong>Category ID</strong>
                                            </label>
                                            <input class="form-control" type="text" id="categoryt_id" name="categoryt_id">
                                        </div>
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
<?php include ROOT_DIR . '/src/views/admin/admin-footer.php'; ?>