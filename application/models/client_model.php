<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client_model extends CI_Model{

	 public function selectAllClient(){
		$query = $this->db->query('SELECT * FROM client');
		return $query->result();
	}
	public function insererClient(){
	 	$data = array(
	 		'nomCli' => $this->input->post('nomCli'),
	 		'prenomCli' =>  $this->input->post('prenomCli'),
	 		'telCli' =>  $this->input->post('telCli'),
	 		'adrsCli' =>  $this->input->post('adrsCli'),
	 		);
	 	$this->db->insert('client' , $data);
	 }

	 public function editerClient(){
		$id = $this->input->post('idCliEdit');
	 	$data = array(
	 		'nomCli' => $this->input->post('nomCliEdit'),
	 		'prenomCli' => $this->input->post('prenomCliEdit'),
	 		'adrsCli' =>  $this->input->post('adrsCliEdit'),
	 		'telCli' =>  $this->input->post('telCliEdit'),
	 		);
	 	$this->db->where('idCli' , $id);
	 	$this->db->update('client' , $data);
	 }

	 
	 public function supprimerClient(){
		$id = $this->input->post('idCliDelete');
	 	$this->db->where('idCli' , $id);
	 	$this->db->delete('client');
	 }
	
	
	

}
?>