<?php

require_once "Db.php";

class Article extends Db {

    function getDetailArticle($article_id) {
        $sql = "SELECT * FROM article WHERE article_id = $article_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function menu_list() {
        $sql = "SELECT * FROM menu ORDER BY menu_id DESC";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function getListArticleByCategory($category_id = -1, $offset = -1, $limit = -1) {
        $sql = "SELECT * FROM article WHERE category_id = $category_id OR $category_id = -1";
        if ($limit > 0 && $offset >= 0)
            $sql .= " LIMIT $offset,$limit";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function addArticleToMenu($menu_id, $article_id) {
        $sql = "UPDATE menu SET article_id = $article_id WHERE menu_id = $menu_id";
        $rs = mysql_query($sql) or die(mysql_error());
        return $rs;
    }

    function insertArticle() {
        $category_id = (int) $_POST['category_id'];

        $title = $this->processData($_POST['title']);

        $status = 1;
        $is_hot = 0;

        $url_images = $this->processData($_POST['url_images']);
        $description = $this->processData($_POST['description']);

        $content = $_POST['content_bv'];

        $update_time = time();

        $seo_title = $seo_description = $seo_keyword = $title;
        $title_alias = $this->changeTitle($title);

        $sql = "INSERT INTO article	VALUES(NULL,'$title','$title_alias','$url_images','$description','$content',
								'$seo_title','$seo_description','$seo_keyword',
								$category_id,$status,$is_hot,$update_time)";
        mysql_query($sql) or die(mysql_error() . $sql);
    }

    function updateArticle($article_id) {
        $category_id = (int) $_POST['category_id'];

        $title = $this->processData($_POST['title']);

        $status = 1;
        $is_hot = 0;

        $url_images = $this->processData($_POST['url_images']);
        $description = $this->processData($_POST['description']);

        $content = $_POST['content_bv'];

        $update_time = time();

        $seo_title = $seo_description = $seo_keyword = $title;
        $title_alias = $this->changeTitle($title);

        $sql = "UPDATE article
					SET title = '$title',title_alias = '$title_alias',
					status = $status,is_hot = '$is_hot',content = '$content',
                    url_images = '$url_images',description = '$description',
					category_id = '$category_id',update_time = $update_time,					
					seo_title = '$seo_title',seo_description = '$seo_description',seo_keyword = '$seo_keyword'					
					WHERE article_id = $article_id ";
        mysql_query($sql) or die(mysql_error() . $sql);
    }

}

?>