<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class achat_controller extends CI_Controller {
	public function achat(){	
		$data['title']='achat';
		$this->load->model('achat_model');
		$data['result'] = $this->achat_model->selectAchat();
		$this->load->view('achat_view' , $data);
	}

	public function detail($idCli , $fact){	
		$this->load->model('achat_model');
		$data['infoClient']=$this->achat_model->infoClient($idCli);
		$data['listeAchat']=$this->achat_model->listeAchat($idCli , $fact);
		$data['effectifAchat']=$this->achat_model->efectifProduit($fact);
		$data['horsTaxe']=$this->achat_model->THT($fact);
		$this->load->view('achatDetail' , $data);
		
	}

	public function imprimer($idCli , $fact){	
		$this->load->model('achat_model');
		$data['infoClient']=$this->achat_model->infoClient($idCli);
		$data['listeAchat']=$this->achat_model->listeAchat($idCli , $fact);
		$data['effectifAchat']=$this->achat_model->efectifProduit($fact);
		$data['horsTaxe']=$this->achat_model->THT($fact);
		$this->load->view('impression' , $data);
		
	}



}

?>

