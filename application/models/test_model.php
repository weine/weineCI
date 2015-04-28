<?php

class Test_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function get_data() {
		$sql = "
				SELECT t.* 
				FROM CRAZY t
				";
		
		/* transaction start */
		$this->db->trans_start();
		$res = $this->db->query($sql);

		/* transaction end */
		$this->db->trans_complete();
		if(FALSE === $this->db->trans_status()){
			return FALSE;
		}else{
			if($res->num_rows() > 0)
			{
				return $res->result_array();
			}
			else
			{
				return FALSE;
			}
		}
	}
}

//End of test_model.php