<?php
$product_id = (int) $_GET['product_id'];
$rs_chitiet = $modelProduct->getDetailProduct($product_id);
$row = mysql_fetch_assoc($rs_chitiet);
if (isset($_POST['btnSave'])) {
    $modelProduct->updateProduct($product_id);
    header("location:?com=product_list&category_id=".$row['category_id']);
}
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<script type="text/javascript">
function BrowseServer( startupPath, functionData ){
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
	finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
	finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
	finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
	//finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn
	finder.popup(); // Bật cửa sổ CKFinder
} //BrowseServer

function SetFileField( fileUrl, data ){
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}
</script>
<script type="text/javascript">
    function validate(){
        var flg = true;
        if($('#category_id').val()==0){
            alert('Chưa chọn category!');
            return false;
        }
		if($('#product_name').val()==''){
			alert('Chưa nhập tiêu đề!');
			return false;
		}
    }
</script>

<form action="" method="post" name="form_add_dm_ks">
  <div>
    <div>
      <h3>Quản lý sản phẩm : <?php echo (isset($_GET['product_id']) ? "Cập nhật" : "Thêm mới") ?></h3>
    </div>
    <div class="clr"></div>
  </div>
  <div id="main_admin">
  <div id="main_left">
    <table>
      <tr class="left">
        <td width="100px">Category</td>
        <td><select name='category_id' id="category_id">
            <option value='0'>Chọn danh mục</option>
            <?php
            $rs_cha = $modelCate->getListCate(0);
            while($row_cha = mysql_fetch_assoc($rs_cha)){
            ?>
            <optgroup label="<?php echo $row_cha['cate_name']?>">
                <?php
            $rs_con = $modelCate->getListCate($row_cha['cate_id']);           
                if(mysql_num_rows($rs_con) > 0) {while($row_con = mysql_fetch_assoc($rs_con)){
            ?>
                <option  <?php echo ($row['category_id']==$row_con['cate_id']) ? "selected" : ""; ?> value="<?php echo $row_con['cate_id']?>">----<?php echo $row_con['cate_name']?></option>
            <?php }}else{ ?>
                <option  <?php echo ($row['category_id']==$row_cha['cate_id']) ? "selected" : ""; ?> value="<?php echo $row_cha['cate_id']?>">----<?php echo $row_cha['cate_name']?></option>
            <?php } ?>
              </optgroup>
            <?php } ?>
          </select></td>
      </tr>
      <tr class="left">
        <td>Tên sản phẩm</td>
        <td><input type="text" name="product_name" id="product_name" style="width:500px;height:25px" value="<?php echo $row['product_name']; ?>"/></td>
      </tr>
      <tr class="left">
        <td>Giá</td>
        <td><input type="text" name="price" id="price" style="width:200px;height:25px" value="<?php echo $row['price']; ?>"/></td>
      </tr>
      <tr class="left">
        <td>Sản phẩm hot</td>
        <td><input type="checkbox" name="is_hot" id="is_hot" <?php echo ($row['is_hot']==1) ? "checked='checked'": "";?>/> HOT (hiện ở trang chủ)</td>
      </tr>
      <tr class="left">
        <td>Hình ảnh</td>
        <td><input type="text" name="url_images" id="url_images" class="tf" style="width:300px;height:25px" value="<?php echo $row['url_images']; ?>"/>

          <input type="button" name="btnChonFile" value="Chọn hình" onclick="BrowseServer('Images:/','url_images')"  /></td>
      </tr>
      <tr class="left">
        <td valign="top">Mô tả</td>
        <td><textarea style="height:100px;width:500px" class="meta" name="description" id="description" rows="10">
		<?php echo $row['description']; ?>
        </textarea></td>
      </tr>
      <tr class="left">
        <td>Chi tiết</td>
        <td><div style="width:800px;overflow: hidden">
            <textarea class="meta" name="content_bv" id="content_bv">
            <?php echo $row['content']; ?>
            </textarea>
            <script type="text/javascript">
    var editor = CKEDITOR.replace('content_bv', {
        uiColor: '#9AB8F3',
        language: 'vi',
        skin: 'office2003',
        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        toolbar: [
            ['Source', '-', 'Bold', 'Italic', 'Underline', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'Link', 'Unlink', 'Image', 'Styles', 'Format', 'TextColor', 'BGColor'],
        ]
    });
                                </script>
          </div></td>
      </tr>
      <tr class="left">
        <td>&nbsp;</td>
        <td>
        	<input type="submit" name="btnSave" value="  Save  " onclick="return validate();" />
        	<input type="reset" name="btnReset" value="  Reset  "/>
        </td>
      </tr>
    </table>
  </div>
</form>
</div>

