<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fournisseur_controller extends CI_Controller {
	public function fournisseur()
	{	
		$data['title']='fournisseur';
		$this->load->model('fournisseur_model');
		$data['result'] = $this->fournisseur_model->selectAllFournisseur();
		$this->load->view('fournisseur_view' , $data);
	}
 
	public function inserer(){
		$this->load->model('fournisseur_model');
		$this->fournisseur_model->insererFournisseur();
		$this->session->set_flashdata('succes' , 'Insertion fournisseur réussi avec succes');
		redirect(base_url('fournisseur_controller/fournisseur'));
	}

	public function editer(){
		$this->load->model('fournisseur_model');
		$this->fournisseur_model->editerFournisseur();
		$this->session->set_flashdata('succesEdit' , 'Mise à jour fournisseur réussi avec succes');
		redirect(base_url('fournisseur_controller/fournisseur'));
	}

	public function supprimer(){
		$this->load->model('fournisseur_model');
		$this->fournisseur_model->supprimerFournisseur();
		$this->session->set_flashdata('succesDelete' , 'Suppression fournisseur réussi avec succes');
		redirect(base_url('fournisseur_controller/fournisseur'));
	}
}

?>