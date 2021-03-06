<?php 
session_start(); 
require "Model/Db.php";
$d =  new db;
if (isset($_POST['btnLog'])==true){	
	$d->Login();
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>BANVAI.VN ADMIN</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<!-- stylesheets -->
		<link rel="stylesheet" type="text/css" href="resources/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="resources/css/style.css" media="screen" />
		<link id="color" rel="stylesheet" type="text/css" href="resources/css/colors/blue.css" />
		<!-- scripts (jquery) -->
		<script src="resources/scripts/jquery-1.4.2.min.js" type="text/javascript"></script>
		<script src="resources/scripts/jquery-ui-1.8.custom.min.js" type="text/javascript"></script>
		<script src="resources/scripts/smooth.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				style_path = "resources/css/colors";

				$("input.focus").focus(function () {
					if (this.value == this.defaultValue) {
						this.value = "";
					}
					else {
						this.select();
					}
				});

				$("input.focus").blur(function () {
					if ($.trim(this.value) == "") {
						this.value = (this.defaultValue ? this.defaultValue : "");
					}
				});

				$("input:submit, input:reset").button();
			});
		</script>
	</head>
	<body>
		<div id="login">
			<!-- login -->
			<div class="title">
				<h5>Sign In to BANVAI.VN Admin</h5>
				<div class="corner tl"></div>
				<div class="corner tr"></div>
			</div>
                        <?php 
                        if($_GET['er']=='fail'){
                        ?>
			<div class="messages">
				<div id="message-error" class="message message-error">
					<div class="image">
						<img src="resources/images/icons/error.png" alt="Error" height="32" />
					</div>
					<div class="text">
						<h6>Error Message</h6>
						<span>Incorrect email or password!</span>
					</div>
					<div class="dismiss">
						<a href="#message-error"></a>
					</div>
				</div>
			</div>
                        <?php } ?>
			<div class="inner">
				<form method="POST">
				<div class="form">
					<!-- fields -->
					<div class="fields">
						<div class="field">
							<div class="label">
								<label for="username">Email:</label>
							</div>
							<div class="input">
								<input type="text" id="email" name="email" size="40" />
							</div>
						</div>
						<div class="field">
							<div class="label">
								<label for="password">Password:</label>
							</div>
							<div class="input">
								<input type="password" id="password" name="password" size="40" />
							</div>
						</div>
						
						<div class="buttons">
							<input type="submit" name="btnLog" value="Sign In" />
						</div>
					</div>
					<!-- end fields -->					
				</div>
				</form>
			</div>
			<!-- end login -->
			<div id="colors-switcher" class="color">
				<a href="" class="blue" title="Blue"></a>
				<a href="" class="green" title="Green"></a>
				<a href="" class="brown" title="Brown"></a>
				<a href="" class="purple" title="Purple"></a>
				<a href="" class="red" title="Red"></a>
				<a href="" class="greyblue" title="GreyBlue"></a>
			</div>
		</div>
	</body>
</html>