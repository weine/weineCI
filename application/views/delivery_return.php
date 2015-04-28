<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=0.5, maximum-scale=1.0" />
	<title>UITOX 車隊系統</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $css ?>/class.css"/>
	<script src="<?php echo $js ?>/jquery-1.10.2.js"></script>
</head>
<body>
	<div class="container">
		
		<div class="return_form">
			<div id="header"><a href="http://10.1.184.175/weineCI/uitox_car_system/main">UITOX 車隊系統 </a></div>
			<div id="sub_title">貨態回填</div>
			
			<div>宅配單號：<input name="HDNO" /><button id="search_btn">確定</button></div>
			<div style="margin-left: -195px;">收件人資訊： <span>王小明</span></div>
			<div>
				<span>貨態時間：
					<input name="HD_TIME" type="time"/>
				</span>
				<span>日期：
					<input name="HD_DATE" type="date"/>
				</span>
			</div>
			
			<div><button style="width: 337px;background-color: #00A600;">配達完成</button></div>
			<div>
			<span><button>配達未遇</button></span>
			<span><button>延後送貨</button></span>
			<span><button>聯絡不到</button></span>
			</div>
			
			<div>
			<span><button>地址不明</button></span>
			<span><button>拒收</button></span>
			<span><button>其他</button></span>
			</div>
		</div>
		<div id="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</div>
	</div>
</body>
</html>