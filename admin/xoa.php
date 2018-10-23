<?php	
require_once("lib/classQuanTri.php");
$qt = new quantri;	

$loai = $_GET['loai'];
$id = (int) $_GET['id'];

if($loai == "baiviet") {
    $qt->xoabaiviet($id);	
}
if($loai == "menu") {
    mysql_query("DELETE FROM menu WHERE menu_id = $id");
}
?>