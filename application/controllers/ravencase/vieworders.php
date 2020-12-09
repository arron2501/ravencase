<?php

class ViewOrders extends CI_Controller {
  public function __construct() {
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE) {
      $url=login;
      redirect($url);
    }
    $this->load->helper(array('url','form'));
    $this->load->library('cart');
    $this->load->model('model_order');
  }

  public function index() {
    $this->cart->destroy();
    $data['data'] = $this->model_order->vieworders();
    $this->load->view("ravencase/vieworders", $data);
  }
}

?>
