<?php

class Orders extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE) {
      $url=login;
      redirect($url);
    }
    $this->load->model('model_order');
    $this->load->model('model_login');
    $this->load->helper('url');
  }

  public function index() {
    if($this->session->userdata('akses') != '1') {
      echo "Anda tidak berhak mengakses halaman ini";
      //$this->load->view('ravencase/home');
    }
    else {
      $data['data'] = $this->model_order->get_produk();
      $this->load->view('admin/orders', $data);
    }
  }

  function update_status(){
    $id_order = $this->input->post('id_order');
  	$nama = $this->input->post('nama');
  	$email = $this->input->post('email');
  	$alamat = $this->input->post('alamat');
    $telp = $this->input->post('telp');
    $tgl_order = $this->input->post('tgl_order');
    $qty = $this->input->post('qty');
    $subtotal = $this->input->post('subtotal');
    $status = $this->input->post('status');

  	$data = array(
  		'nama' => $nama,
  		'email' => $email,
  		'alamat' => $alamat,
      'telp' => $telp,
      'tgl_order' => $tgl_order,
      'qty' => $qty,
      'subtotal' => $subtotal,
      'status' => $status
  	);

  	$where = array(
  		'id_order' => $id_order
  	);
  	$this->model_order->update_status($where,$data,'tabel_order');

  	redirect('orders');
  }

}

?>
