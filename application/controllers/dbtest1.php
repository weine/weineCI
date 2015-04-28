<?php
/*
*
*/
class Dbtest1 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_data()
	{
		$this->load->model("Dbtest1_model");
		
		$result = $this->Dbtest1_model->get_crazy();
		
		echo "<pre>";
		print_r($result);
		echo "</pre>";
	}	
}


//End