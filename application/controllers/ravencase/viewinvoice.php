<?php

class ViewInvoice extends CI_Controller {
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

  public function index($id_order) {
    $where = array('id_order' => $id_order);

    $subtotal = $this->db->query("SELECT subtotal FROM tabel_order as O INNER JOIN tabel_detail_order as DO ON DO.id_order = O.id_order WHERE O.id_order = '$id_order' LIMIT 1")->result();
    $data = array(
      'subtotal'	=> $subtotal
    );
    $data ['data'] = $this->model_order->viewinvoice($where, 'tabel_detail_order')->result();
    $this->load->view('ravencase/viewinvoice', $data);
  }
}

?>
