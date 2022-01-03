<?php

class ProductController
{  //home
    public static function HomeController()
    {
        $productModels = new ProductModel();
        $productList = $productModels->getProductsView();
        $pruductHot = $productModels->getProductsBySale();
        $slider = new SliderModel();
        $sliders = $slider->getSliderAll();
        include_once ROOT_DIR . '/src/views/user/trangchu.php';

    }
    // tìm kiếm sản phẩm
    public static function SearchController()
    {
        
        $productModels = new ProductModel();
        if (!empty($_GET["search"])){
        $search = $_GET["search"];
        
        $page = 1;

   
            if (count(URL) > 1) {
                $arr = explode("-", URL[1]);

                $page = $arr[count($arr) - 1];
            }

            /** 
             * Lấy số lượng sản phẩm hiện đang có dùng để phân trang (mỗi trang 12 sản phẩm)
             * Nếu số lượng sản phẩm không chia hết cho 12 => cộng thêm 1 vào số trang
             */
             $count = $productModels->CountsearchProducts($search);
             var_dump($count);
             $count = $count % 12 == 0 ? intval($count / 12) : intval($count / 12) + 1;
            
            /**
             * Tạo đường dẫn dùng cho phân trang
             */

            $link = BASE_URL . '/tim-kiem/'. '/trang-'  ;

            $products = $productModels->searchProducts($search,$page);
            var_dump($products);
           
        }
        include_once ROOT_DIR . '/src/views/user/tim-kiem.php';
    }

    //show sản phẩm
    public static function ProductInfoController()
    {
        /**
         * Nếu URL > 1 => đã xác định sản phẩm => sản phẩm không tồn tại => hiển thị trang 404
         * Ngược lại => chưa xác định sản phẩm => hiển thị trang 404
         */
        $productInfo = new ProductModel();
        if (count(URL) > 1) {
           /**
             * Tách chuỗi tên-id thành 2 biến name và id
             */
            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $nme = "%" . implode("%", $arr) . "%";
            // $name ="iphone X";

            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";
            $product_info = $productInfo->getProductInfo($id, $name);

  

            /**
             * Kiểm tra cookie đã lưu lần cập lượt xem của sản phẩm này chưa
             * Nếu chưa => lưu cookie => cập nhật lượt xem 
             */
            if (empty($_COOKIE[URL[1]])) {
                setcookie(URL[1], true, time() + 86400);
                 $productInfo->updateViewProduct($id);
            }
          
            /**
             * Lấy thông tin sản phẩm
             * Nếu sản phẩm không tồn tại => hiển thị trang 404
             * Nếu sản phẩm tồn tại => cắt chuỗi product_image thành mảng hình ảnh để hiển thị, tính giá tiền sản phẩm sau khi giảm giá => hiển thị giao diện trang thông tin sản phẩm
             */
            $product = $productInfo->getProductInfo($id, $name);
            if (empty($product)) {
               // include ROOT_DIR . '/src/views/admin/404.php';
            } else {
                $product_image = $product['p_image'];
                $price = $product['p_price'] * (100 - $product['sale']) / 100;
              //  include ROOT_DIR . '/src/views/user/san-pham.php';
            }
            var_dump($product);
            
        }
    }
    public static function GetProductController()
    {
        $productModels = new ProductModel();
        $productList = $productModels->getProduct();
        include_once ROOT_DIR .'/src/views/user/product-page.php';
      var_dump($productList);
    }
    public static function AboutUs()
    {
        include_once ROOT_DIR . '/src/views/user/about-us.php';
    }

    public static function ContactUs()
    {
        include_once ROOT_DIR . '/src/views/user/contact-us.php';
    }

    public static function Category()

    {   $categoryModel = new CategoryModel();
        $productModel = new ProductModel();
        $categories =  $categoryModel->getCategories();
        var_dump($categories);
        /**
         * Nếu URL > 1 => đã xác định danh mục => Nếu danh mục không tồn tại => hiển thị trang 404
         * Ngược lại => chưa xác định danh mục => điều hướng đến danh mục đầu tiên trong mảng danh mục
         */
        if (count(URL) > 1) {
            /**
             * Tách chuỗi tên-id thành 2 biến name và idF
             */
            $arr = explode("-", URL[1]);
            $id = $arr[count($arr) - 1];
            unset($arr[count($arr) - 1]);
            $name = "%" . implode("%", $arr) . "%";

            /**

             * Mặc định page = 1
             * Nếu URL > 2 => có số trang => gắn page lại bằng cách tách chuỗi trang-page
             */
            $page = 1;
            if (count(URL) > 2) {
                $arr = explode("-", URL[2]);

                $page = $arr[count($arr) - 1];
            }

            /** 
             * Lấy số lượng sản phẩm hiện đang có dùng để phân trang (mỗi trang 12 sản phẩm)
             * Nếu số lượng sản phẩm không chia hết cho 12 => cộng thêm 1 vào số trang
             */
            $count = $productModel->getCountProductsCategory($id, $name);
            $count = $count % 12 == 0 ? intval($count / 12) : intval($count / 12) + 1;
           
            /**
             * Tạo đường dẫn dùng cho phân trang
             */
            $link = BASE_URL . '/danh-muc/' . URL[1] . '/trang-';
            $products = $categoryModel->getProductsBYID($id, $name, $page);
            var_dump($count);
            var_dump($products);
            //include ROOT_DIR . '/src/views/user/danh-muc.php';
        } else {
            /**
             * Chuyển hướng đường dẫn
             */
            header("Location: " . BASE_URL . '/danh-muc/' . TienIch::vn_to_str($categories[0]['c_name']) . '-' . $categories[0]['c_id']);
        }


    }
    // public static function Pagination()
    // {
    //     $page=1;
    //     include_once ROOT_DIR . '/src/views/user/pagination.php';
    // }
    

}

