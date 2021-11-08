<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fournisseur_model extends CI_Model{

	 public function selectAllFournisseur(){
		$query = $this->db->query('SELECT * FROM Fournisseur');
		return $query->result();
	}

	public function insererFournisseur(){
	 	$data = array(
	 		'nomFrns' => $this->input->post('nomFrns'),
	 		'adrsFrns' =>  $this->input->post('adrsFrns'),
	 		'telFrns' =>  $this->input->post('telFrns'),

	 		);
	 	$this->db->insert('fournisseur' , $data);
	 }

	public function editerFournisseur(){
		$id = $this->input->post('idFrnsEdit');
	 	$data = array(
	 		'nomFrns' => $this->input->post('nomFrnsEdit'),
	 		'adrsFrns' =>  $this->input->post('adrsFrnsEdit'),
	 		'telFrns' =>  $this->input->post('telFrnsEdit'),
	 		);
	 	$this->db->where('idFrns' , $id);
	 	$this->db->update('fournisseur' , $data);
	 }

	public function supprimerFournisseur(){
		$id = $this->input->post('idFrnsDelete');
	 	$this->db->where('idFrns' , $id);
	 	$this->db->delete('fournisseur');
	 }

	
} 
?> 