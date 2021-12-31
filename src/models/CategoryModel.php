<?php
class CategoryModel extends Db{
   // lấy ra tất cả danh mục
    public  function  getCategories()
    {
        
        $sql = parent::$conection->prepare("SELECT * FROM categories ");
        return parent::select($sql);
    }
    
    // lấy số lượng sản phẩm theo category
    public function getProductsBYID($id, $name, $start)
    {
        $name= str_replace(' ', '%', $name);
        $name = "%" . $name . "%";
        $start= ($start -1) * 12;
        $sql = parent::$conection->prepare("SELECT `product` .* FROM `product` JOIN `product_category` ON `product_category`.`productID` = `product`.`p_id` JOIN `categories` 
        ON `product_category`.`category_ID` = `categories`.`c_id` 
        WHERE `product`.`status` = 1 AND `product_category`.`category_ID` =? 
        AND `categories`.`c_name` LIKE ? ORDER BY `product`.`p_id` DESC LIMIT ?, 12");
        $sql->bind_param("isi", $id, $name, $start);
        return parent::select($sql); // xuất kết quả
    }
   
}
?>