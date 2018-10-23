<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script type="text/javascript">    
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 120,
        itemMargin: 5,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
<div id="dnn_Top0"><a name="13846"></a>
    <span id="dnn_ctr13846_ContentPane" class="DNNAlignleft"><!-- Start_Module_13846 --><div id="dnn_ctr13846_ModuleContent">
            <div id="dnn_ctr13846_HtmlModule_HtmlModule_lblContent" class="Normal">
                <div align="center">
                    <table height="145" cellspacing="0" cellpadding="0" border="0" background="img/khungsanphamchay.jpg" width="973">
                        <tbody>
                            <tr>
                            <td height="99" width="970" style="padding-left:40px;">                            
                                <div align="center" class="flexslider carousel" style="width: 870px; height: 90px;">
                                    <ul class="slides">
                                        <?php 
                                        $rs_slider = $modelHome->getListProductSlider();
                                        while($row_slider = mysql_fetch_assoc($rs_slider)){
                                        ?>
                                        <li style="margin-right: 20px;">
                                            <img src="<?php echo str_replace("../","",$row_slider['url_images']);?>" height="94" />
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                        </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End_Module_13846 -->
        </div>
    </span>
</div>