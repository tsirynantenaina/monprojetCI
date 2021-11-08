<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class produit_controller extends CI_Controller {
	public function produit(){
		$data['title']='produit';
		$this->load->model('fournisseur_model');
		$data['resultFournisseur'] = $this->fournisseur_model->selectAllFournisseur();
		$this->load->model('produit_model');
		$data['resultProduit'] = $this->produit_model->selectAllProduit();
		$this->load->view('produit_view' , $data);
	}

	public function inserer(){
		$this->load->model('produit_model');
		$this->produit_model->insererProduit();
		$this->session->set_flashdata('succes' , 'Insertion produit réussi avec succes');
		redirect(base_url('produit_controller/produit'));
	}

	public function editer(){
		$this->load->model('produit_model');
		$this->produit_model->editerProduit();
		$this->session->set_flashdata('succesEdit' , 'Mise à jour produit réussi avec succes');
		redirect(base_url('produit_controller/produit'));
	}

	public function getEdit(){
		$id=$this->input->post("id");
		$this->load->model('produit_model');
		$this->produit_model->getIdFrns($id);
	}

	public function supprimer(){
		$this->load->model('produit_model');
		$this->produit_model->supprimerProduit();
		$this->session->set_flashdata('succesDelete' , 'Suppression produit réussi avec succes');
		redirect(base_url('produit_controller/produit'));
	}


}

?>