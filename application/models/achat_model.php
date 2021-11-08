<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class achat_model extends CI_Model {

	 public function selectAchat(){
		$query = $this->db->query('SELECT achat.* , client.* FROM achat , client  where 
			client.idCli = achat.idCli group by dateAchat DESC');
		return $query->result();
	}

	public function infoClient($idCli){
			$query = $this->db->query('SELECT * from client where idCli ='.$idCli);
			return $query->result();
	}
	public function listeAchat($idCli , $fact){
			$query = $this->db->query("SELECT achat.* , produit.* from achat , produit  where achat.idProd=produit.idProd AND achat.numfact ='".$fact."'");
			return $query->result();
	}

	public function efectifProduit($fact){
			$query = $this->db->query("SELECT sum(qteAchat) as effectif from achat where numfact ='".$fact."'");
			return $query->result();
	}
	public function THT($fact){
			$query = $this->db->query("SELECT sum(totalAchat) as somme from achat where numfact ='".$fact."'");
			return $query->result();
	}
}

?>
