<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	public function index()
	{	
		$data['title']='login';
		$this->load->view('login_view' , $data);
	}

	public function login(){
		$data['title']='login';
		$this->load->view('login_view' , $data);

	}

	public function login_validation(){
				$pseudo=$this->input->post('username');
				$cle=$this->input->post('password');
				if(isset($pseudo) AND $pseudo!="" AND isset($cle) AND $cle!=""){
					$this->load->model('login_model');
					$this->login_model->can_login($pseudo , $cle);
				}
				
	}

	public function acceuil(){
			$user =$this->session->userdata('username');
			if ($user!=""){
			 	$data['title']='acceuil';
			 	$this->load->model('login_model');
			 	$data['effectifClient']=$this->login_model->effectifClient();
			 	$data['effectifProduit']=$this->login_model->effectifProduit();
			 	$data['effectifFournisseur']=$this->login_model->effectifFournisseur();
			 	$data['effectifAchat']=$this->login_model->effectifAchat();
			 	$data['effectifUser']=$this->login_model->effectifUser();
			 	$data['effectifPanier']=$this->login_model->effectifPanier();
			 	$data['effectifVendu']=$this->login_model->effectifVendu();
			 	$data['prodFaible']=$this->login_model->produitFaible();
			 	$data['statistique']=$this->login_model->statistique();
				$this->load->view('acceuil_view' , $data);
		 	}else{
		 		redirect(base_url('login_controller/login'));
		 	}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url('login_controller/login'));
	}

}
