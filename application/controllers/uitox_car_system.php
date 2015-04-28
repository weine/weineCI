<?php
/*
 * 
 */
class Uitox_car_system extends CI_Controller
{
	
	public $css_local;
	public $js_local;
	public $links;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->css_local = base_url("public/css");
		$this->js_local = base_url("public/js");
		$this->links = array("css" => $this->css_local, "js"=> $this->js_local);
	}
	
	public function _set_link($tag_name, $info)
	{
		$this->links[$tag_name] = $info;
	}
	
	public function index()
	{
		$this->_set_link("js", $this->js_local);
		$this->load->view("login", $this->links);
	}
	
	public function login()
	{
		$user_name = $this->input->post("user_name");
		$password = substr(md5($this->input->post("password")),2,10);
		
		
		if($user_name === "uitox" && $password === "419c58730d")
		{
			$this->main();
		}
		else
		{
			$this->index();
		}
		
	}
	
	public function main()
	{
		$this->load->view("main", $this->links);
	}
	
	public function delivery_return()
	{
		$this->_set_link("js", $this->js_local);
		$this->load->view("delivery_return", $this->links);
	}
	
	public function delivery_search()
	{
		$this->_set_link("js", $this->js_local);
		$this->load->view("delivery_search", $this->links);
	}
	
	public function delivery_info($bid)
	{
		
		$batch_seq = (string) trim($bid);
		
		if(empty($batch_seq))
		{
			$this->delivery_search();
			return;
		}
		
		
		/* CURL POST 
		$api_url = "";
		$json_ux_id = json_encode($ux_id);
		$post_param = array("data" => $json_ux_id);
		$result = $this->pub->curl_post($api_url, $post_param);
		
		$info = $this->api_input->json_input($result);
		*/
		 
		/* view */
		$this->_set_link("bid", $batch_seq);
		//$this->_set_link("info", $info);
		$this->load->view("delivery_info", $this->links);
	}
}

//End