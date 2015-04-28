<?php
$xmlstr = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<Request service="OrderService" lang="zh-CN">
	<Head>j_custid (客戶卡號),checkwork (校驗碼)</Head>
	<Body>
		<Order orderid="配送單號" express_type="快件類型" j_company="寄件方公司名稱" j_contact="寄件方聯絡人" j_tel="聯絡電話" j_address="寄件地址" d_company="到件方公司名稱" d_contact="到件方聯絡人" d_tel="聯絡電話" d_address="到件方地址" parcel_quantity="包裏數" pay_method="付款方式" >
			<OrderOption custid="月結卡號" j_shippercode="寄件方代碼" d_deliverycode="到件方代碼" cargo="貨物名稱" cargo_total_weight="總重量" insurance_amount="申明價值" sendstarttime="要求上門收件時間" mailno="運單號" remark="備註">
				
			</OrderOption>
		</Order>
	</Body>
</Request>
XML;

//End order_request.php