<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client_controller extends CI_Controller {
	public function client()
	{	
		$data['title']='client';
		$this->load->model('client_model');
		$data['result'] = $this->client_model->selectAllClient();
		$this->load->view('client_view' , $data);
	}
	public function inserer(){
		$this->load->model('client_model');
		$this->client_model->insererClient();
		$this->session->set_flashdata('succes' , 'Insertion Client réussi avec succes');
		redirect(base_url('client_controller/client'));
	}
	public function editer(){
		$this->load->model('client_model');
		$this->client_model->editerClient();
		$this->session->set_flashdata('succesEdit' , 'Mise à jour client réussi avec succes');
		redirect(base_url('client_controller/client'));
	}

	public function supprimer(){
		$this->load->model('client_model');
		$this->client_model->supprimerClient();
		$this->session->set_flashdata('succesDelete' , 'Suppression client réussi avec succes');
		redirect(base_url('client_controller/client'));
	}
}
?>