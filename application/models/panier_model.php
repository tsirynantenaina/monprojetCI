<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class panier_model extends CI_Model {

	 public function selectAllPanier(){
		$query = $this->db->query('SELECT panier.* , produit.* from produit , panier where produit.idProd = panier.idProd');
		return $query->result();
	}

	public function factureMax(){
		$query = $this->db->query('SELECT max(numfact) as fact from achat');
		return $query->result();
	}
	public function total(){
		$query = $this->db->query('SELECT sum(totalPan) as total from panier ');
		return $query->result();
	}
	public function addpanier(){
		$idProd = $this->input->post('idProd') ;
		$query = $this->db->query('SELECT * from panier where idProd ='.$idProd ) ;
		$res = $query->row();
		if($res){
			//le produit est deja dans panier donc on additionne tout simplement la quantite
			$qteExiste = $res->qtePan;
			$qte = $this->input->post('quantite');
			$qteUpdate = $qteExiste + $qte ; 
			$data = array(
	 				'qtePan' => $qteUpdate 
	 		);
		 	$this->db->where('idProd' , $idProd);
		 	$this->db->update('panier' , $data);


		}else{ //le produit n'est pas dans le panier
			$prix = $this->input->post('prix');
			$qte = $this->input->post('quantite');
			$total = $prix * $qte ;
			$data = array(
				'idProd' =>$this->input->post('idProd'),
		 		'qtePan' => $qte ,
		 		'totalPan' =>  $total
		 		);
		 	$this->db->insert('panier' , $data);
		}
		
	}

	public function stockMoins(){
		$id = $this->input->post('idProd');
		$qte = $this->input->post('quantite');
		$this->db->query('UPDATE produit set qteProd = (qteProd -'.$qte.') where idProd = '.$id.'' ) ;

	 }

	 public function StockPlus(){
	 	$qteAnnuler = $this->input->post('quantiteAnnuler');
	 	$id = $this->input->post('idProdAnnuler');
		$this->db->query('UPDATE produit set qteProd = (qteProd + '.$qteAnnuler.') where idProd = '.$id.'' ) ;
	}

	public function deletePanier(){
	 	$id = $this->input->post('idProdAnnuler');
	 	$this->db->where('idProd' , $id);
	 	$this->db->delete('panier');
	}

	public function viderPanier(){
	 	$query = $this->db->query('SELECT * FROM panier');
		$res = $query->result();
		foreach ($res as $row) {
			$this->db->query('UPDATE produit set qteProd = (qteProd + '.$row->qtePan.') WHERE idProd = '.$row->idProd.'  ' ) ;
		}
		$this->db->query('delete from panier');
		
	}

	public function insererNomClient(){
		$idCli = $this->input->post('idCli');
		$fact = $this->input->post('numfact') + 1;
	 	$data = array(
	 		'idCli' => $idCli , 
	 		'numfact' => $fact 
	 		);
	 	$this->db->update('panier' , $data);
	}

	public function insererVersAchat(){
		$query = $this->db->query('SELECT * FROM panier');
		$res = $query->result();
		foreach ($res as $row) {
			$data = array(
				'idCli' =>$row->idCli ,
				'idProd' =>$row->idProd ,
		 		'qteAchat' =>$row->qtePan ,
		 		'totalAchat' => $row->totalPan ,
		 		'numfact' => $row->numfact
	 		);
	 		$this->db->insert('achat' , $data);
		}
		

	}






		
}
?>