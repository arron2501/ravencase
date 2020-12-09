<?php

class Home extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('model_login');
  }

  public function index() {
    $this->load->view("ravencase/home");
  }

  public function editprofile() {
    $data['data'] = $this->model_login->get_user();
    $this->load->view("ravencase/editprofile", $data);
  }
}

?>
