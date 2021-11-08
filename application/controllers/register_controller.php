<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class register_controller extends CI_Controller{
	public function register(){
		$data['title']='register';
		$this->load->view('register_view' , $data);

	}

	public function register_validation(){
		$pseudo =$this->input->post("pseudo");
		$mdp1 =$this->input->post("mdp1");
		$mdp2 =$this->input->post("mdp2");
		$email =$this->input->post("mail");
		$tel =$this->input->post("tel");
		if($pseudo=="" AND $mdp1=="" AND $mdp2=="" AND $email=="" AND $tel==""){
			redirect(base_url('login_controller/login'));
		}
		else if($mdp1 == $mdp2){
			$this->load->model("register_model");
			$data = array(
				 "username" => $this->input->post("pseudo"),
				 "password" => $this->input->post("mdp1"),
				 "email" => $this->input->post("mail"),
				 "telephone" => $this->input->post("tel")
			 );
			$this->register_model->register_user($data);
			$this->session->set_flashdata('succes' , 'Creation avec succes, vous pouvez maintenant reveniz au login et entrer ');
			redirect(base_url('register_controller/register'));
		}

	}
}

?>