<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=1.0" />
	<title>UITOX 車隊系統</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $css ?>/class.css"/>
	<script src="<?php echo $js ?>/jquery-1.10.2.js"></script>
	<script src="<?php echo $js ?>/copy.js"></script>
	<script language="javascript"> 
	       var clip1 = new ZeroClipboard.Client();
	        clip1.setText( "" );
	        clip1.setHandCursor( true );
	        clip1.setText("台北市信義區忠孝東路四段563號5樓");
	        clip1.addEventListener("complete", function(client) {
	        	alert("複製成功，你現在可以貼到你的部落格或網站了!");
	        } );
	                                 
	       if (clip1.div) {
			  clip1.receiveEvent("mouseout", null);
			  clip1.reposition("copy1");
		    }else clip1.glue("copy1");
	
		function select_all(obj){ 
			var text_val=document.getElementById(obj);
			text_val.focus();
			text_val.select();
		}
	</script>
</head>
<body>
	<div class="container">
		
		<div class="info_list">
			<div id="header"><a href="http://10.1.184.175/weineCI/uitox_car_system/main">UITOX 車隊系統 </a></div>
			
			<div id="sub_title">匯出地址</div>
			
			<div>列印清單時間：11/20 12:10:00</div>
			<div>批號：<?php echo $bid ?>
				<input  name=""/>
			</div>
			
			<div style="margin-top: 7px;">
				<table align="center" width="500" border="2" bordercolor="#FFF" cellpadding="8" cellspacing="0">
					<thead>
					<tr>
						<td width="60">編號</td>
						<td>地址</td>
					</tr>
					</thead>
					
					<tbody>
					<tr>
						<td>001</td>
						<td>
							<a href="http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台北市信義區忠孝東路四段563號5樓&z=13&output=embed&t=">
								台北市信義區忠孝東路四段563號5樓
							</a>
						</td>
					</tr>
					<tr>
						<td>002</td>
						<td>台北市信義區忠孝東路四段563號5樓</td>
					</tr>
					<tr>
						<td>003</td>
						<td>台北市信義區忠孝東路四段563號5樓</td>
					</tr>
					<tr>
						<td>004</td>
						<td>台北市信義區忠孝東路四段563號5樓</td>
					</tr>
					<tr>
						<td>005</td>
						<td>台北市信義區忠孝東路四段563號5樓</td>
					</tr>
					<tr>
						<td>006</td>
						<td>台北市信義區忠孝東路四段563號5樓</td>
					</tr>
					</tbody>
				</table>
			</div>
			
		</div>
		<div id="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</div>
	</div>
</body>
</html>