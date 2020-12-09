<?php

class RegisterAdmin extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->library(array('form_validation'));
    $this->load->helper(array('url','form'));
    $this->load->model('model_register');
  }

  public function index() {
    $this->load->view('admin/registeradmin');
  }

  public function validationadmin() {
    $this->form_validation->set_rules('fullname', 'FULLNAME','required');
    $this->form_validation->set_rules('email','EMAIL','required|valid_email');
    $this->form_validation->set_rules('password','PASSWORD','required');
    $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
    if($this->form_validation->run() == FALSE) {
      echo $this->session->set_flashdata('msg','Pendaftaran Gagal !!!');
      $this->load->view('admin/register');
    }
    else {
      $data['fullname']   =    $this->input->post('fullname');
      $data['email']  =    $this->input->post('email');
      $data['password'] =    md5($this->input->post('password'));
      $data['level'] =    $this->input->post('level');
      $data['pic'] =    $this->input->post('pic');

      $this->model_register->register_member($data);

      $url = users;
      redirect($url);
    }
  }

}

?>