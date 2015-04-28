<?php
/*
* @author Weine
*/

class Order_service_api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	/* 取得訂單訊息 */
	public function get_order_data($order_id)
	{

	}

	public function check_data($data,$xml_obj)
	{
		if(empty($data))
		{
			unset($xml_obj);	
		}
		else
		{
			$xml_obj = $data;
		}
	}

	/* 處理為XML格式*/
	public function get_xml()
	{
		/* 格式檔案路徑 */
		include 'order_request.php';

		/* Order 節點資訊 */
		$order_xml = new SimpleXMLElement($xmlstr);
		$order = $order_xml->Body->Order->attributes();
		
		
		$order->orderid = "123";
		$order_xml->Body->Order->attributes()->express_type = "快件類型";
		$order_xml->Body->Order->attributes()->j_company = "寄件方公司名稱";
		$order_xml->Body->Order->attributes()->j_contact = "寄件方聯絡人";
		$order_xml->Body->Order->attributes()->j_tel = "聯絡電話";
		$order_xml->Body->Order->attributes()->j_address = "寄件地址";
		$order_xml->Body->Order->attributes()->d_company = "到件方公司名稱";
		$order_xml->Body->Order->attributes()->d_contact = "到件方聯絡人";
		$order_xml->Body->Order->attributes()->d_tel = "聯絡電話";
		$order_xml->Body->Order->attributes()->d_address = "到件方地址";
		$order_xml->Body->Order->attributes()->parcel_quantity = "包裏數";
		$order_xml->Body->Order->attributes()->pay_method = "付款方式";

		/* OrderOption 資訊*/
		$order_xml->Body->Order->OrderOption->attributes()->custid = "月結卡號";
		$order_xml->Body->Order->OrderOption->attributes()->j_shippercode = "寄件方代碼";
		$order_xml->Body->Order->OrderOption->attributes()->d_deliverycode = "到件方代碼";
		$order_xml->Body->Order->OrderOption->attributes()->cargo = "貨物名稱";
		$order_xml->Body->Order->OrderOption->attributes()->cargo_total_weight = "總重量";
		$order_xml->Body->Order->OrderOption->attributes()->insurance_amount = "申明價值";
		$order_xml->Body->Order->OrderOption->attributes()->sendstarttime = "要求上門收件時間";
		$order_xml->Body->Order->OrderOption->attributes()->mailno = "運單號";
		$order_xml->Body->Order->OrderOption->attributes()->remark = "備註";

		
		//unset($order_xml->Body->Order->OrderOption->attributes()->mailno);
		
		echo $order_xml->asXML();
		
		
	}

	/* 輸出請求 */
	public function output_request()
	{
		

	}
}

//End of order_service_api.php