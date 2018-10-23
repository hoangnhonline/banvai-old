<?php 
$arrDetailArticle = mysql_fetch_assoc($rs_article);	
?>
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
    <h3 class="t"><span style="float: left;"></span><span id="dnn_ctr14887_dnnTitle_lblTitle" class="Head"><?php echo $title; ?></span>


</h3>
</div>

          <div align="right">

                  
                  
              </div>
<div class="art-blockcontent">
    <div class="art-blockcontent-body">

<div id="dnn_ctr14887_ContentPane" class="DNNAlignleft"><!-- Start_Module_14887 -->
    
    <div id="dnn_ctr14887_ModuleContent">
	<?php echo $arrDetailArticle['content']; ?>
<!-- End_Module_14887 -->
</div>

</div>


		<div class="cleared"></div>
    </div>
</div>

              <div align="right">
                  
                  
              </div>

		<div class="cleared"></div>
    </div>
</div>