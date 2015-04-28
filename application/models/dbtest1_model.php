<?php

class Dbtest1_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();	
	}
	
	public function get_crazy()
	{
		
		$name = "weine";
		
		$this->db->where("NAME", $name);
		$result = $this->db->get("CRAZY");
		
		return $result;
			
	}	
}


//End