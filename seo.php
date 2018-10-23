<?php
require_once "admin/Model/Home.php";
$modelHome = new Home;
$mod = isset($_GET['mod']) ? $_GET['mod'] : "";

function checkCat($uri) {
    $pattern_detail = '#chi-tiet/[a-z0-9\-]+\-\d+.html#';
    
	$pattern_contact = '#/lien-he+.html#';      
    $pattern_menu = '#[a-z0-9\-]+.html#';


    $mod = "";
    if (preg_match($pattern_menu, $uri)) {
        $mod = "menu";
    }
    if (preg_match($pattern_contact, $uri)) {
        $mod = "contact";
    }    

    if (preg_match($pattern_detail, $uri)) {
        $mod = "detail";
    }

    return $mod;
}

$uri = str_replace("/banvai", "", $_SERVER['REQUEST_URI']);
$mod = checkCat($uri);
$uri = str_replace(".html", "", $uri);
$tmp_uri = explode("/", $uri);

switch ($mod) {
    case "menu":
        if($tmp_uri[1]=='p' || $tmp_uri[1]=='c'){
            $mod = 'product';
            if($tmp_uri[1]=='p'){
                $getby = 'full_parent';
            }else{
                $getby = 'category_id';
            }
            $arrTmp = explode('-',$tmp_uri[2]);
            $page = end($arrTmp);
            $page = ($page > 0) ? $page : 1;
            $rs_cate = $modelHome->getDetailCateByAlias($tmp_uri[2]);
            $row_detail_cate = mysql_fetch_assoc($rs_cate);
            $title = $row_detail_cate["seo_title"];
            $metaD = $row_detail_cate["seo_description"];
            $metaK = $row_detail_cate["seo_keyword"];
        }else{
            $menu_alias = $tmp_uri[1];          
            $rs_menu = $modelHome->getDetailMenuByAlias($menu_alias);
            $row_menu = mysql_fetch_assoc($rs_menu);
            $article_id = $row_menu['article_id'];
            $rs_article = $modelHome->getDetailArticle($article_id);
            $title = $row_menu["seo_title"];
            $metaD = $row_menu["seo_description"];
            $metaK = $row_menu["seo_keyword"];
        }
        break;
        

    case "contact":

            $title = "Liên hệ";
            $metaD = "Liên hệ";
            $metaK = "Liên hệ";

        break;
    case "detail":
        $tieude_id = $tmp_uri[2];
        $arr = explode("-", $tieude_id);
        $product_id = (int) end($arr);
        $rs_article = $modelHome->getDetailProduct($product_id);
        $arrDetailProduct = mysql_fetch_assoc($rs_article);
        $title = $arrDetailProduct["seo_title"];
        $metaD = $arrDetailProduct["seo_description"];
        $metaK = $arrDetailProduct["seo_keyword"];
        break;

    default :
            $title = "Hoa Mai - đại lý sỉ và lẻ vải may balo - túi xách, giày, nón bảo hiểm... ";
            $metaD = "Chúng tôi chuyên cung cấp vải may balo - túi xách, các loại vải, giày dép, nón bảo hiểm và nhiều mặt hàng khác.";
            $metaK = "vải may balo, vải may túi xach, non bao hiem, nón bảo hiểm";

        break;
}
?>