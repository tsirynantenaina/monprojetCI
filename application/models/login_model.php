<?php
	class login_model extends CI_Model{
		function can_login($username , $password){
			$this->db->where('username' , $username);
			$this->db->where('password' , $password);
			$query = $this->db->get('user');			//SELETC * FROM user WHERE username ='$username' AND password ='$password' ; 
			$res=$query->row();
			if(isset($res)){
					$nom=$res->username;
					$pass=$res->password;
					if($username==$nom && $password==$pass){
						$session_data = array(
						'username' => $nom
						);
					$this->session->set_userdata($session_data);
					redirect(base_url('login_controller/acceuil'));
					}
				}else{
					$this->session->set_flashdata('error' , 'Nom d\'utilisateur ou mot de passe incorrect');
					redirect(base_url('login_controller/login'));
				}
		} 




		public function effectifClient(){
			$query = $this->db->query("SELECT count(*) as effectifClient from client");
			return $query->result();
		}
		public function effectifProduit(){
			$query = $this->db->query("SELECT count(*) as effectifProduit from produit");
			return $query->result();
		}

		public function effectifFournisseur(){
			$query = $this->db->query("SELECT count(*) as effectifFournisseur from fournisseur");
			return $query->result();
		}

		public function effectifAchat(){
			$query = $this->db->query("SELECT count(*) as effectifAchat from Achat");
			return $query->result();
		}

		public function effectifUser(){
			$query = $this->db->query("SELECT count(*) as effectifUser from user");
			return $query->result();
		}

		public function effectifPanier(){
			$query = $this->db->query("SELECT sum(qtePan) as effectifPanier from panier");
			return $query->result();
		}

		public function effectifVendu(){
			$query = $this->db->query("SELECT sum(qteAchat) as effectifVendu from achat");
			return $query->result();
		}
		public function produitFaible(){
			$query = $this->db->query("SELECT count(*) as faible from produit where qteProd < 10");
			return $query->result();
		}//
		public function statistique(){
			$query = $this->db->query("SELECT produit.nomProd , sum(qteAchat) as somme from produit , achat where produit.idProd = achat.idProd group by achat.idProd order by somme DESC limit 6
					");
			return $query->result();
		}
	}
?>