<?php

class Cart extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->library('cart');
    $this->load->model('model_produk');
  }

  public function index() {
    $data['data']=$this->model_produk->get_produk();
    $this->load->view("ravencase/customcase", $data);
  }

  function add_to_cart() { //fungsi Add To cart
    $data = array(
            'id' => $this->input->post('id_produk'),
            'name' => $this->input->post('nama_produk'),
            'price' => $this->input->post('harga_produk'),
            'qty' => $this->input->post('quantity'),
        );
    $this->cart->insert($data);
    echo $this->show_cart(); //tampilkan cart setelah added
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
          <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
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

    function show_order() { //Fungsi untuk menampilkan cart
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

  function load_cart() { //load data cart
    echo $this->show_cart();
  }

  function load_order() { //load data cart
    echo $this->show_order();
  }

  function hapus_cart() { //fungsi untuk menghapus item cart
    $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => 0,
        );
    $this->cart->update($data);
    echo $this->show_cart();
  }

}

?>
