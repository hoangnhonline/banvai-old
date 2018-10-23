<?php

require_once "Db.php";
class Product extends Db {

    function getDetailProduct($product_id) {
        $sql = "SELECT * FROM product WHERE product_id = $product_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function getListProductByCategory($category_id = -1, $offset = -1, $limit = -1) {
        $sql = "SELECT * FROM product WHERE category_id = $category_id OR $category_id = -1";
        if ($limit > 0 && $offset >= 0)
            $sql .= " LIMIT $offset,$limit";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function getDetailCate($cate_id){
        $sql = "SELECT * FROM category WHERE cate_id = $cate_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }
    function insertProduct() {
        $category_id = (int) $_POST['category_id'];

        $arr = $this->getDetailCate($category_id);
        $row = mysql_fetch_assoc($arr);
        $full_parent = ($row['parent_id']>0) ? $row['parent_id'] : $category_id;

        $product_name = $this->processData($_POST['product_name']);

        $status = 1;
        $hot = $_POST['is_hot'];
        $price = $_POST['price'];

        $is_hot = ($hot==true)? 1 : 0;

        $url_images = $this->processData($_POST['url_images']);
        $description = $this->processData($_POST['description']);

        $content = $_POST['content_bv'];

        $update_time = time();

        $seo_title = $seo_description = $seo_keyword = $product_name;
        $product_name_alias = $this->changeTitle($product_name);

        $sql = "INSERT INTO product	VALUES(NULL,'$product_name','$product_name_alias','$price','$url_images','$description','$content',
								'$seo_title','$seo_description','$seo_keyword',
								$category_id,$full_parent,$status,$is_hot,$update_time)";
        mysql_query($sql) or die(mysql_error() . $sql);
    }

    function updateProduct($product_id) {
        $category_id = (int) $_POST['category_id'];
        
        $arr = $this->getDetailCate($category_id);
        $row = mysql_fetch_assoc($arr);
        $full_parent = ($row['parent_id']>0) ? $row['parent_id'] : $category_id;
        
        $product_name = $this->processData($_POST['product_name']);

        $status = 1;
        $hot = $_POST['is_hot'];
        $price = $_POST['price'];

        $is_hot = ($hot==true)? 1 : 0;

        $url_images = $this->processData($_POST['url_images']);
        $description = $this->processData($_POST['description']);

        $content = $_POST['content_bv'];

        $update_time = time();

        $seo_title = $seo_description = $seo_keyword = $product_name;
        $product_name_alias = $this->changeTitle($product_name);

        $sql = "UPDATE product
					SET product_name = '$product_name',product_alias = '$product_name_alias',
                                            price = '$price',
					status = $status,is_hot = '$is_hot',content = '$content',
                    url_images = '$url_images',description = '$description',
					category_id = '$category_id',update_time = $update_time,
                    full_parent = '$full_parent',
					seo_title = '$seo_title',seo_description = '$seo_description',seo_keyword = '$seo_keyword'
					WHERE product_id = $product_id ";
        mysql_query($sql) or die(mysql_error() . $sql);
    }

}

?>