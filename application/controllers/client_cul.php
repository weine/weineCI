<?php
class Client_cul extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> library("nusoap_lib");
	}

	public function index() {

		/* param */
		$param = array("x" => 10, "y" => 45);

		/* web service */
		$service_url = "http://127.0.0.1/test/soap/server.php";

		/* create soap client */
		$client = new nusoap_client($service_url);

		/**/
		if ($client -> fault) {
			echo "Error: " . $client -> fault;
		} else {
			if ($client -> getError()) {
				echo "Error: " . $client -> getError();
			} else {
				$result = $client -> call("cul", $param);

				print_r($result);
			}
		}
	}

}

//End
