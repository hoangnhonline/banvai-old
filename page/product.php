<?php 
    $link = "tin-tuc";
    $limit = 10;
    $sp = $modelHome->getListProductByCategoryNew($getby,$row_detail_cate['cate_id'],-1,-1);  
?>

<table class="position" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr valign="top">
            <td id="dnn_User1" class="DNNEmptyPane" width="50%"></td>

            <td id="dnn_User2" class="DNNEmptyPane"></td>

        </tr>
    </tbody></table>

<div id="dnn_ContentPane"><a name="13836"></a>

    <div class="art-block">
        <div class="art-block-tl"></div>
        <div class="art-block-tr"></div>
        <div class="art-block-bl"></div>
        <div class="art-block-br"></div>
        <div class="art-block-tc"></div>
        <div class="art-block-bc"></div>
        <div class="art-block-cl"></div>
        <div class="art-block-cr"></div>
        <div class="art-block-cc"></div>
        <div class="art-block-body">

            <div class="art-blockheader">
                <div class="l"></div>
                <div class="r"></div>
                <h3 class="t"><span style="float: left;"></span><span id="dnn_ctr13836_dnnTitle_lblTitle" class="Head">
                        <?php echo $row_detail_cate['cate_name']; ?>
                    </span>

                </h3>
            </div>

            <div align="right">

            </div>
            <div class="art-blockcontent">
                <div class="art-blockcontent-body">

                    <div id="dnn_ctr13836_ContentPane" class="DNNAlignleft"><!-- Start_Module_13836 --><div id="dnn_ctr13836_ModuleContent">
                            <div id="dnn_ctr13836_HtmlModule_HtmlModule_lblContent" class="Normal">
                                <?php 
                                if(mysql_num_rows($sp)>0){
                                while($row = mysql_fetch_assoc($sp)){ ?>
                                <div class="item-product" style="padding:5px;float:left;width: 190px;height: 200px;margin: 15px;text-align: center">
                                    <div class="image-product" style="height:150px">
                                        <a class="fancybox" data-fancybox-group="<?php echo $row['category_id']; ?>"  href="<?php echo str_replace("../",'',$row['url_images']); ?>">                                        
                                            <img src="<?php echo str_replace("../",'',$row['url_images']); ?>" width="180px" height="150px"/>
                                        </a>
                                    </div>
                                    <p class="product-name" style="margin-top: 10px;text-align: center;font-weight: bold">
                                        <a href="chi-tiet/<?php echo $row['product_alias']; ?>-<?php echo $row['product_id']; ?>.html">
                                            <?php echo $row['product_name']; ?>
                                        </a>
                                    </p>
                                </div>                                
                                <?php }}else{ ?>
                                <p> Danh mục chưa có sản phẩm nào!</p>
                                <?php } ?>
                                
                                <p>&nbsp;</p>
                            </div>
                            <!-- End_Module_13836 -->
                        </div></div>


                    <div class="cleared"></div>
                </div>
            </div>

            <div align="right">


            </div>

            <div class="cleared"></div>
        </div>
    </div>

</div>
<div id="dnn_Banner3"><a name="14717"></a><span id="dnn_ctr14717_ContentPane" class="DNNAlignleft"><!-- Start_Module_14717 --><div id="dnn_ctr14717_ModuleContent">
            <div id="dnn_ctr14717_HtmlModule_HtmlModule_lblContent" class="Normal">
                <p style="text-align: right; "><a href="javascript:history.go(-1)">
                        <span style="font-size: 7.5pt; font-family: Tahoma; ">Back</span></a>&nbsp;<a href="#top"><img src="static/up.gif" alt="" id="_x0000_i1046" border="0" height="10" width="10"></a>&nbsp;<span style="font-size: 7.5pt; font-family: Tahoma; "><a href="#top">Top</a>&nbsp; &nbsp; &nbsp;&nbsp;</span>&nbsp;</p>
            </div>
            <!-- End_Module_14717 -->
        </div></span>
</div>
<table class="position" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr valign="top">
            <td id="dnn_User3" class="DNNEmptyPane" width="50%"></td>

            <td id="dnn_User4" class="DNNEmptyPane"></td>

        </tr>
    </tbody></table>
<div class="cleared"></div>
