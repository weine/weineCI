<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0" />
	<title>UITOX 車隊系統</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $css ?>/class.css"/>
	<script src="<?php echo $js ?>/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#search_btn").click(function(){
				window.alert("test");
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="search_list">
			<div id="header"><a href="http://10.1.184.175/weineCI/uitox_car_system/main">UITOX 車隊系統 </a></div>
			
			<div id="sub_title">匯出地址</div>
			<div style="margin-top: 25px;">宅配單號：<input name="hdno"/><button id="search_btn">確定</button></div>
			<div style="margin-top: 10px;">配送區域： A01</div>
			
			<div style="margin-top: 7px;">
				<table align="center" width="500"  border="2" bordercolor="#FFF" cellpadding="8" cellspacing="0">
					<thead>
					<tr>
						<td>列印時間</td>
						<td width="60">筆數</td>
						<td>批號</td>
					</tr>
					</thead>
					
					<tbody>
					<tr>
						<td>11/21 9:30:00</td>
						<td>10</td>
						<td><a href="http://10.1.184.175/weineCI/uitox_car_system/delivery_info/201311A1000000001">201311A1000000001</a></td>
					</tr>
					<tr>
						<td>11/20 12:10:00</td>
						<td>5</td>
						<td><a href="http://10.1.184.175/weineCI/uitox_car_system/delivery_info/201311A1000000003">201311A1000000003</a></td>
					</tr>
					</tbody>
				</table>
			</div>
			
		</div>
		<div id="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</div>
	</div>
</body>
</html>