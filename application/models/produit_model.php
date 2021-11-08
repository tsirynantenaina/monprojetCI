<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produit_model extends CI_Model{

	 public function selectAllProduit(){
		$query = $this->db->query('SELECT fournisseur.* , produit.* from produit , fournisseur where produit.idFrns = fournisseur.idFrns ');
		return $query->result();
	}

	public function insererProduit(){
	 	$data = array(
	 		'idFrns' => $this->input->post('idFrns'),
	 		'natureProd' =>  $this->input->post('natureProd'),
	 		'typeProd' =>  $this->input->post('typeProd'),
	 		'nomProd' =>  $this->input->post('nomProd'),
	 		'qteProd' =>  $this->input->post('qteProd'),
	 		'prixProd' =>  $this->input->post('prixProd')
	 		);
	 	$this->db->insert('produit' , $data);
	 }

	public function getIdFrns($id){ 
		$query = $this->db->query('SELECT * FROM fournisseur');
        $res = $query->result();
		if(isset($id) AND $id!=""){
			echo'<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <select type="text" class="form-control" name="idFrnsEdit" id="idFrnsEdit">
                        <option disabled>----------------------Choisir la nature du produit----------------------</option>';
							foreach ($res as $row) {
								if($row->idFrns==$id){
									echo'<option value="'.$row->idFrns.'" selected >'.$row->nomFrns.'</option>';
								}else{
									echo'<option value="'.$row->idFrns.'">'.$row->nomFrns.'</option>';
								}
								
							}

			
			echo'</select>';
			
		}
	}

	public function editerProduit(){
		$idProd= $this->input->post('idProdEdit');
	 	$data = array(
	 		'idFrns' => $this->input->post('idFrnsEdit'),
	 		'natureProd' =>  $this->input->post('natureProdEdit'),
	 		'typeProd' =>  $this->input->post('typeProdEdit'),
	 		'nomProd' =>  $this->input->post('nomProdEdit'),
	 		'qteProd' =>  $this->input->post('qteProdEdit'),
	 		'prixProd' =>  $this->input->post('prixProdEdit')
	 		);

	 	$this->db->where('idProd' , $idProd);
	 	$this->db->update('produit' , $data);
	 }

	public function supprimerProduit(){
		$idProd = $this->input->post('idProdDelete');
	 	$this->db->where('idProd' , $idProd);
	 	$this->db->delete('produit');
	 }


}


?>