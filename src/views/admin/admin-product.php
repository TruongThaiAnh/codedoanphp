<title>Admin-Product</title>
<?php include ROOT_DIR . '/src/views/admin/admin-header.php'; ?>
<?php include ROOT_DIR . '/src/views/admin/admin-navbar.php'; ?>
<div class="container-fluid">
    <h3 class="text-dark mb-4">Team</h3>
    <div class="card shadow">

        <!-- them san pham -->
        <div class="card-header py-3" style="justify-content: space-between; display: flex; ">
            <p class="text-primary m-0 font-weight-bold">Employee Info</p>
            <a href="<?php echo BASE_URL . '/product-them' ?>">
                <button type="button" onclick="showMess" class="btn btn-info " style="margin-right: 1rem;">Thêm Sản Phẩm <i style="padding-left:7px;" class="fas fa-plus-circle"></i></button>
            </a>
        </div>
        <!-- them san pham -->

        <div class="card-body">

            <!-- phan che do hien thi va` nut tim` kiem -->
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                        <label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                </div>
            </div>
            <!-- phan che do hien thi va` nut tim` kiem -->


            <!-- phan san pham -->
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Prize</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php for ($i = 0; $i < 12; $i++) {  ?>
                        <tbody style="border-bottom: 2px solid #e3e6f0;">
                            <tr>
                                <td style="padding-top:1rem;">A01</td>
                                <td style="padding-top:1rem;">Iphone 13</td>
                                <td style="padding-top:1rem;">300$</td>
                                <td style="padding-top:1rem;">
                                    <img src="<?php echo BASE_URL ?>/assets/img/ip/13de.jpg" style="height: 50px; width:100px;">
                                </td>
                                <td style="padding-top:1rem;">Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                <td  > 
                                <a href="<?php echo BASE_URL . '/product-sua' ?>" style="text-decoration: none;">
                                        <button style="border-radius: 5px; height: 40px; width:80px" type="button" onclick="showMess" class="btn btn-success btn-sm btn-block">
                                            Sửa
                                            <i style="padding-left:7px;" class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    
                                </td>
                                <td>
                                    <button style="border-radius: 5px; height: 40px; width:80px" type="button" class="btn btn-danger btn-sm btn-block">Xóa <i style="padding-left:7px;" class="fas fa-trash"></i> </button>
                                </td>
                                <td></td>
                            </tr>

                        </tbody>
                    <?php } ?>

                </table>
            </div>
            <!-- phan san pham -->


            <!-- phan trang o day -->
            <div class="row">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- phan trang o day -->

            </div>
        </div>
    </div>
</div>
</div>


<?php include ROOT_DIR . '/src/views/admin/admin-footer.php'; ?>