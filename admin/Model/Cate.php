<?php

require_once "Db.php";

class Cate extends Db {

    function getListCate($parent_id = -1 ) {
        $sql = "SELECT * FROM category WHERE parent_id = $parent_id or $parent_id = -1 ORDER BY cate_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function insertCate() {
        $parent_id = (int) $_POST['parent_id'];

        $cate_name = $this->processData($_POST['cate_name']);

        $update_time = time();         
        
        $cate_alias = $this->changeTitle($cate_name);

        $sql = "INSERT INTO category VALUES(NULL,'$cate_name','$cate_alias',$parent_id,'$cate_name','$cate_name','$cate_name',$update_time)";								
        mysql_query($sql) or die(mysql_error() . $sql);
    }
    function updateCate($cate_id) {
        $parent_id = (int) $_POST['parent_id'];

        $cate_name = $this->processData($_POST['cate_name']);

        $update_time = time();         
        
        $cate_alias = $this->changeTitle($cate_name);

         $sql = "UPDATE category
                SET cate_name = '$cate_name',cate_alias = '$cate_alias',
                parent_id = $parent_id,update_time = $update_time,					
                seo_title = '$cate_name',seo_description = '$cate_name',seo_keyword = '$cate_name'					
                WHERE cate_id = $cate_id ";
        mysql_query($sql) or die(mysql_error() . $sql);
    }
    function getDetailCate($cate_id){
        $sql = "SELECT * FROM category WHERE cate_id = $cate_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

}

?>