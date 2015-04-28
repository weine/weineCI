<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=0.5, maximum-scale=1.0" />
	<title>UITOX 車隊系統</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $css ?>/class.css"/>
	<script src="<?php echo $js ?>/ux_car.js" type="application/javascript"></script>
	<script src="<?php echo $js ?>/jquery-1.10.2.js"></script>
	
</head>
<body>
	<div class="container">
		<div id="login">
			<div id="header">UITOX 車隊系統</div>
			
			<form id="login_form" name="login_form" action="http://10.1.184.175/weineCI/uitox_car_system/login" method="post" enctype="application/x-www-form-urlencoded">
			<div style="margin-left: -60px;">帳號</div>
			<input name="user_name" value="" required="required"/>
			<div style="margin-left: -60px;">密碼</div>
			<input name="password" type="password" />
			<div><button type="submit">登入</button></div>
			</form>
		</div>
		<div id="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</div>
	</div>
	
	
</body>
</html>