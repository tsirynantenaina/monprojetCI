<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reaprov_model extends CI_Model{


	public function stockPlus(){
		$idProd = $this->input->post('idProd');
		$qte= $this->input->post('qte');
	 	$this->db->query('UPDATE produit set qteProd = (qteProd + '.$qte.') WHERE idProd = '.$idProd.'') ; 

	}
}
?>