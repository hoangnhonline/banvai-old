<div class="art-nav">
    <div class="l"></div>
    <div class="r"></div>
    <div class="art-nav-center">
        <ul class="art-menu">
            <li class="art-menu-li-separator"><span class="art-menu-separator"> </span></li>
            <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" class="<?php if ($menu_alias =='' && $mod !='contact') echo "active" ;?>">
                    <span class="l"></span><span class="r"></span><span class="t">Trang chủ</span></a></li>
            <li class="art-menu-li-separator"><span class="art-menu-separator"> </span></li>
            <li><a href="gioi-thieu.html" class="<?php echo ($menu_alias =='gioi-thieu') ? "active" : "";?>"><span class="l"></span>
                    <span class="r"></span><span class="t">Giới thiệu</span></a></li><li class="art-menu-li-separator"><span class="art-menu-separator"> </span></li>
            <li><a href="#"><span class="l"></span>
                    <span class="r"></span><span class="t">Sản phẩm</span></a>
                <ul>
                    <?php
                    $rs_cha = $modelHome->getListCate(0);
                    while($row_cha = mysql_fetch_assoc($rs_cha)){
                    ?>    
                    <li><a href="p/<?php echo $row_cha['cate_alias']?>.html"><?php echo $row_cha['cate_name']?></a>
                        <?php 
                        $rs_con = $modelHome->getListCate($row_cha['cate_id']);
                        if(mysql_num_rows($rs_con) > 0){
                        ?>
                        <ul>
                            <?php                                            
                            while($row_con = mysql_fetch_assoc($rs_con)){
                            ?>
                            <li><a href="c/<?php echo $row_con['cate_alias']?>.html"><?php echo $row_con['cate_name']?></a></li>
                            <?php } ?>
                        </ul>
                        <?php }?>
                    </li> 
                    <?php } ?>
               </ul>
            </li>
            <li class="art-menu-li-separator">
                <span class="art-menu-separator"> </span>
            </li>
            <li ><a href="dich-vu.html" class="<?php echo ($menu_alias =='dich-vu') ? "active" : "";?>">
                    <span class="l"></span>
                    <span class="r"></span>
                    <span class="t">Dịch vụ</span>
                </a>
            </li>
            <li class="art-menu-li-separator">
                <span class="art-menu-separator"> </span>
            </li>
            <li>
                <a href="khuyen-mai.html" class="<?php echo ($menu_alias =='khuyen-mai') ? "active" : "";?>">
                    <span class="l"></span>
                    <span class="r"></span>
                    <span class="t">Khuyến mãi</span>
                </a>
            </li>
            <li class="art-menu-li-separator">
                <span class="art-menu-separator"> </span>
            </li>
            <li>
                <a href="ho-tro-tu-van.html" class="<?php echo ($menu_alias =='ho-tro-tu-van') ? "active" : "";?>">
                    <span class="l"></span>
                    <span class="r"></span>
                    <span class="t">Hỗ trợ - Tư vấn</span>
                </a>
            </li>
            <li class="art-menu-li-separator">
                <span class="art-menu-separator"> </span>
            </li>
            <li class="art-menu-li-separator">
                <span class="art-menu-separator"> </span>
            </li>
            <li>
                <a href="lien-he.html" class="<?php echo ($mod =='contact') ? "active" : "";?>">
                    <span class="l"></span>
                    <span class="r"></span>
                    <span class="t">Liên hệ</span>
                </a>
            </li>
        </ul>
    </div>
</div>