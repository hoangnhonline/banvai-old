<?php
$link = "index.php?com=product_list";

    if (isset($_GET['category_id']) && $_GET['category_id'] > 0) {
        $category_id = (int) $_GET['category_id'];
        $link.="&category_id=$category_id";
    } else {
        $category_id = -1;
    }
    $page_show = 5;

    $limit = 20;

    $trangs = $modelProduct->getListProductByCategory($category_id, -1, -1);

    $total_record = mysql_num_rows($trangs);

    $total_page = ceil($total_record / $limit);

    if (isset($_GET['page']) == false) {
        $page = 1;
    } else {
        $page = (int) $_GET['page'];
    }

    $offset = $limit * ($page - 1);

    $list_trang = $modelProduct->getListProductByCategory($category_id, $offset, $limit);

?>
<script type="text/javascript">
     $(document).ready(function(){
        $(".linkxoa").live('click',function(){
            var flag = confirm("Bạn có chắc chắn xóa");
            if(flag == true){
                var product_id = $(this).attr("product_id");
                $.get('xoa.php',{loai:"baiviet",id:product_id},function(data){
                    window.location.reload();
                });
            }
        });
    });
</script>
<div>
    <div>
        <div style="width: 48%;float: left"><h3>Quản lý bài viết : Xem danh sách</h3></div>
        <div style="width: 48%;float: left;text-align: right;padding-top: 20px;text-transform: uppercase;font-size: 15px;font-weight: bold"><a href="index.php?com=product_add">Thêm sản phẩm</a></div>
    </div>

    <div class="clr" style="clear: both"></div>
</div>
<div id="main_admin">

    <div>

        <div>
            <table>
                <thead>
                    <tr>
                        <td colspan="6">
                            <form method="get" action="" name="formTim" id="formTim">
                                Danh mục
                                <select name='category_id' id="category_id">
                            <option value='0'>Tất cả</option>
                            <?php
                            $rs_cha = $modelCate->getListCate(0);
                            while($row_cha = mysql_fetch_assoc($rs_cha)){
                            ?>
                            <optgroup label="<?php echo $row_cha['cate_name']?>">
                                <?php
                            $rs_con = $modelCate->getListCate($row_cha['cate_id']);
                            if(mysql_num_rows($rs_con) > 0) {while($row_con = mysql_fetch_assoc($rs_con)){
                            ?>
                                <option value="<?php echo $row_con['cate_id']?>">----<?php echo $row_con['cate_name']?></option>
                            <?php }}else{ ?>
                                <option value="<?php echo $row_cha['cate_id']?>">----<?php echo $row_cha['cate_name']?></option>
                            <?php } ?>
                              </optgroup>
                            <?php } ?>
                          </select>
                                <input type="submit" name="btnSubmit" id="btnSubmit" value="  Xem " />
                                <br /><br />
                                <input type="hidden" name="com" value="product_list"  />
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6"><?php echo $modelProduct->phantrang($page, $page_show, $total_page, $link); ?></td>
                    </tr>
                    <tr>
                        <th width="1%"></th>
                        <th align="center" width="1%">STT</th>
                        <th align="left">Tên SP</th>
                        <th align="left">Hình ảnh </th>
                        <th width="1%">Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = ($page-1)*$limit;;
                    while ($row = mysql_fetch_assoc($list_trang)) {
                        $i++;
                        ?>
                        <tr <?php if ($i % 2 == 0) echo "bgcolor='#CCC'"; ?>>
                            <td><input type="checkbox" name="chon" idDM=<?php echo $row['product_id'] ?>></td>
                            <td align="center"><?php echo $i; ?></td>
                            <td align="left" style="font-weight:bold"><?php echo $row['product_name']; ?></td>
                            <td align="left"><img src="<?php echo $row['url_images']; ?>" width="60"/></td>
                            <td style="white-space:nowrap">
                                <a href="index.php?com=product_edit&amp;product_id=<?php echo $row['product_id'] ?>"><img src="img/icons/user_edit.png" alt="" title="" border="0"></a>
                            &nbsp;&nbsp;
                                <img class="linkxoa" product_id="<?php echo $row['product_id'] ?>" src="img/icons/trash.png" alt="Xóa" title="Xóa" border="0"></td>

<?php } ?>
                    <tr>
                        <td colspan="6"><?php echo $modelProduct->phantrang($page, $page_show, $total_page, $link); ?></td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>


    <div class="clr"></div>
</div>
