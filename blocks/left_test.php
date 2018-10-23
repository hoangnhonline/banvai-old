<style>
    .title-left{

        margin-left: 12px;       
        margin-bottom: 10px;
    }
    .title-left a .par{
        font-size: 16px;
    }
    .img-left{
        margin-right: 10px;
        width: 10px;
        height: 10px;
    }
</style>
<div id="dnn_sidebar1">

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
                <h3 class="t"><span style="float: left;"></span><span id="dnn_ctr14662_dnnTitle_lblTitle" class="Head">Danh mục sản phẩm</span>


                </h3>
            </div>

            <div align="right">



            </div>
            <div class="art-blockcontent">
                <div class="art-blockcontent-body">

                    <div id="dnn_ctr14662_ContentPane" class="DNNAlignleft"><!-- Start_Module_14662 --><div id="dnn_ctr14662_ModuleContent">
                            <div id="dnn_ctr14662_HtmlModule_HtmlModule_lblContent" class="Normal">
                                <ul class="category vertical" id="Accordion">
                                    <?php
                                    $rs_cha = $modelHome->getListCate(0);
                                    while($row_cha = mysql_fetch_assoc($rs_cha)){
                                    ?>                                  
                                    <div class="title-left">
                                        <img class="img-left" src="img/yelp-s.png">
                                        <a href="p/<?php echo $row_cha['cate_alias']?>.html" style="font-size: 15px; font-weight: bold;" class="par" title="<?php echo $row_cha['cate_name']?>">
                                            <?php echo $row_cha['cate_name']?>
                                        </a>
                                        <?php 
                                        $rs_con = $modelHome->getListCate($row_cha['cate_id']);
                                        if(mysql_num_rows($rs_con) > 0){
                                        ?>
                                        <ul class="sub_category" >
                                            <?php                                            
                                            while($row_con = mysql_fetch_assoc($rs_con)){
                                            ?>
                                            <li><a href="c/<?php echo $row_con['cate_alias']?>.html" title="<?php echo $row_con['cate_name']?>">- <?php echo $row_con['cate_name']?> </a></li>
                                            <?php } ?>                                            
                                        </ul>
                                        <?php }?>
                                    </div>                                   
                                    
                                    <?php } ?>
                                </ul>
                                <p>&nbsp;</p>
                            </div>
                            <!-- End_Module_14662 -->
                        </div></div>


                    <div class="cleared"></div>
                </div>
            </div>

            <div align="right">


            </div>

            <div class="cleared"></div>
        </div>
    </div>


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
                <h3 class="t"><span style="float: left;"></span><span id="dnn_ctr14663_dnnTitle_lblTitle" class="Head">Hình ảnh</span>


                </h3>
            </div>

            <div align="right">



            </div>
            <div class="art-blockcontent">
                <div class="art-blockcontent-body">

                    <div id="dnn_ctr14663_ContentPane" class="DNNAlignleft"><!-- Start_Module_14663 --><div id="dnn_ctr14663_ModuleContent">
                            <div id="dnn_ctr14663_HtmlModule_HtmlModule_lblContent" class="Normal">
                                <p style="text-align: center;">
                                    <a href="">
                                        <img alt="" src="static/Nh%2520Xng.jpg" height="150" width="200">
                                    </a>
                                </p>
                            </div>
                            <!-- End_Module_14663 -->
                        </div></div>


                    <div class="cleared"></div>
                </div>
            </div>

            <div align="right">


            </div>

            <div class="cleared"></div>
        </div>
    </div>

    <span id="dnn_ctr14664_ContentPane" class="DNNAlignleft"><!-- Start_Module_14664 --><div id="dnn_ctr14664_ModuleContent">
            <img src="static/hotline.png" style="width:235px; margin-left:10px;" />
            <!-- End_Module_14664 -->
        </div></span>


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
                <h3 class="t"><span style="float: left;"></span><span id="dnn_ctr14666_dnnTitle_lblTitle" class="Head">Hỗ trợ trực tuyến</span>


                </h3>
            </div>

            <div align="right">



            </div>
            <div class="art-blockcontent">
                <div class="art-blockcontent-body">

                    <div id="dnn_ctr14666_ContentPane" class="DNNAlignleft"><!-- Start_Module_14666 --><div id="dnn_ctr14666_ModuleContent">
                            <div id="dnn_ctr14666_HtmlModule_HtmlModule_lblContent" class="Normal">
                                <p style="text-align: center; "><img alt="" src="static/hotrotructuyen.jpg" height="32" width="136"></p>

                            </div>
                            <!-- End_Module_14666 -->
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