<?php 
require_once "admin/Model/Home.php";
require_once("seo.php");
$modelHome = new Home;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="gecko firefox2  win" xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi-VN" lang="vi-VN">
<head id="Head">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"></meta>
<title><?php echo $title; ?></title>
<meta name="keywords" content="<?php echo $metaK; ?>">
<meta name="description" content="<?php echo $metaD; ?>">
<base href="http://<?php echo $_SERVER['SERVER_NAME']?>/banvai/" />
<link id="_Portals__default_" rel="stylesheet" type="text/css" href="static/default.css">
<link id="_Portals_292_" rel="stylesheet" type="text/css" href="static/portal.css">
<link id="style" rel="stylesheet" type="text/css" href="static/style.css">
<!--[if IE 6]><link id="styleIE6" rel="stylesheet" type="text/css" href="/Portals/292/Skins/A-0096-QuocOai/style.ie6.css" /><![endif]--><!--[if IE 7]><link id="styleIE7" rel="stylesheet" type="text/css" href="/Portals/292/Skins/A-0096-QuocOai/style.ie7.css" /><![endif]-->
                 
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
</head>
<body id="Body">
<link rel="stylesheet" href="default/default.css" type="text/css" media="screen" />

<script src="js/jquery.js" type="text/javascript"></script>
	
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />


	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

		});
	</script>
	
<script type="text/javascript">
    $(document).ready(function() {
        // alert("a");
        $('ul.sub_category').show();
        $('a.par').click(function() {
            $(this).next().slideToggle();
        });
    });
</script>

<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/carol.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>   
<div style="float:right;">
	<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:50px;top:50px;">
<a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
<a class="addthis_button_tweet" tw:count="vertical"></a>
<a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
<a class="addthis_counter"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52316db4627ec89c"></script>
<!-- AddThis Button END -->
</div>

<div id="art-page-background-middle-texture">
    <div id="art-main">
        <div class="art-sheet">
            <div class="art-sheet-tl"></div>
            <div class="art-sheet-tr"></div>
            <div class="art-sheet-bl"></div>
            <div class="art-sheet-br"></div>
            <div class="art-sheet-tc"></div>
            <div class="art-sheet-bc"></div>
            <div class="art-sheet-cl"></div>
            <div class="art-sheet-cr"></div>
            <div class="art-sheet-cc"></div>
            <div class="art-sheet-body">
                <div id="dnn_ControlPanel"></div>
                <?php include"blocks/header.php"; ?>
                <?php include"blocks/menu.php"; ?>
                
                <?php if($mod=='') include"blocks/slide.php"; ?>
                <?php include"blocks/slide_sp_moi.php"; ?>

                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
                            <?php include"blocks/left_test.php"; ?>
                            <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-content">
                         <?php if($mod!=''){                             
                                switch($mod){
                                        case "menu" : include "page/detail.php";break;	
                                        case "news" : include "page/news.php";break;
                                        case "detail" : include "page/chitiet.php";break;	
                                        case "contact" : include "page/lien-he.php";break;							
                                        case "product" : include "page/product.php";break;							
                                }			
                        }else{ 
                                include "blocks/content.php";                                                           			
                        }                                                 
                        ?>
                        </div>

                    </div>
                </div>
                <div class="cleared"></div>

                <?php include"blocks/footer.php"; ?>


                <div class="cleared"></div>
            </div>
        </div>
        <div class="cleared"></div>

    </div>
</div>

        </body>
        </html>