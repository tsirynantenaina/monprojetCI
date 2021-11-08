<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class panier_controller extends CI_Controller {
	public function panier()
	{	
		$data['title']='panier';
		$this->load->model('produit_model');
		$this->load->model('panier_model');
		$this->load->model('client_model');
		$data['produit']= $this->produit_model->selectAllProduit();
		$data['panier']= $this->panier_model->selectAllPanier();
		$data['total']= $this->panier_model->total();
		$data['fact']= $this->panier_model->factureMax();
		$data['client']= $this->client_model->selectAllClient();
		$this->load->view('panier_view' , $data);
	}

	public function inserer(){
		$this->load->model('panier_model');
		$this->panier_model->addpanier();
		$this->panier_model->stockMoins();
		$this->session->set_flashdata('succes' , 'Insertion produit  dans le panieer réussi avec succes');
		redirect(base_url('panier_controller/panier'));
	}

	public function annuler(){
		$this->load->model('panier_model');
		$this->panier_model->deletePanier();
		$this->panier_model->StockPlus();
		$this->session->set_flashdata('succesDelete' , 'Suppression de produit dans le panier réussi avec succes');
		redirect(base_url('panier_controller/panier'));
	}

	public function vider(){
		$this->load->model('panier_model');
		$this->panier_model->viderPanier();
		$this->session->set_flashdata('succesDelete' , 'Suppression de tout les produits dans le panier réussi avec succes');
		redirect(base_url('panier_controller/panier'));
	}

	public function valider(){
		$this->load->model('panier_model');
		$this->panier_model->insererNomClient();
		$this->panier_model->insererVersAchat();
		$this->panier_model->viderPanier();
		redirect(base_url('achat_controller/achat'));
	}
	


	

	
}
?>