<?php
class register_model extends CI_Model{

	 function register_user($data){
	 	$this->db->insert("user", $data); 
 
	 }
}
?>