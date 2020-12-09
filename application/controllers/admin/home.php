<?php

class Home extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE) {
      $url=login;
      redirect($url);
    }
    $this->load->model('model_login');
    $this->load->helper('url');
  }

  public function index() {
    if($this->session->userdata('akses') != '1') {
      echo "Anda tidak berhak mengakses halaman ini";
      //$this->load->view('ravencase/home');
    }
    else {
      $this->load->view('admin/home');
    }
  }
}
?>
