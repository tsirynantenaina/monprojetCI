<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reaprov_controller extends CI_Controller {

	public function reaprov(){
		$data['title']='Reaprovision';
		$this->load->model('produit_model');
		$data['resultProduit'] = $this->produit_model->selectAllProduit();
		$this->load->view('reaprov_view' , $data);
	}

	public function provision(){
		$this->load->model('reaprov_model');
		$this->reaprov_model->stockPlus();
		$this->session->set_flashdata('succesEdit' , 'Reaprovisionnement produit réussi avec succes');
		redirect(base_url('reaprov_controller/reaprov'));
	}
}

?>