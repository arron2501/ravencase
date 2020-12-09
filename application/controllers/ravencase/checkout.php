<?php

class Checkout extends CI_Controller {
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
    $data['data']=$this->show_cart();
    $this->load->view("ravencase/checkout", $data);
  }

  public function success() {
    $this->load->view("ravencase/checkoutsuccess");
  }

  function show_cart() { //Fungsi untuk menampilkan cart
    $output = '';
    $no = 0;
    foreach ($this->cart->contents() as $items) {
      $no++;
      $output .= '
        <tr>
          <td>'.$items['name'].'</td>
          <td>'.number_format($items['price']).'</td>
          <td>'.$items['qty'].'</td>
          <td>'.number_format($items['subtotal']).'</td>
        </tr>
      ';
    }
      $output .= '
        <tr>
          <td colspan="3">Total</td>
          <td colspan="2">'.'Rp '.number_format($this->cart->total()).'</td>
        </tr>
      ';
      return $output;
    }

    public function proses_order() {
      $grand_total = 0;
      $qty = 0;

      if ($cart = $this->cart->contents()) {
        foreach ($cart as $item) {
          $grand_total = $grand_total + $item['subtotal'];
          $qty = $qty + $item['qty'];
        }
      }

      $fullname = $this->session->userdata('ses_fullname');
      $email = $this->session->userdata('ses_email');
      $alamat = $this->session->userdata('ses_alamat');
      $telp = $this->session->userdata('ses_telp');

      $data_pelanggan = array(
        'nama' => $fullname,
        'email' => $email,
        'alamat' => $alamat,
        'telp' => $telp,
        'tgl_order' => date('y-m-d'),
        'qty' => $qty,
        'subtotal' => $grand_total
      );
      $id_pelanggan = $this->model_order->tambah_order($data_pelanggan);

      if ($cart = $this->cart->contents()) {
        foreach ($cart as $item) {
          $detail_order = array(
            'id_order' => $id_pelanggan,
            'tgl_order' => date('y-m-d'),
            'id_produk' => $item['id'],
            'nama_produk' => $item['name'],
            'harga_satuan' => $item['price'],
            'qty' => $item['qty']
          );
          $id_order = $this->model_order->tambah_detail_order($detail_order);
        }
      }

      //-------------------------Hapus shopping cart--------------------------

      $this->load->view('ravencase/checkoutsuccess');

    }

    public function destroycart() {
      $this->cart->destroy();
      $this->load->view('ravencase/home');
    }
}

?>
