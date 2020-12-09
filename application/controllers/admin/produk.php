<?php

class Produk extends CI_Controller {
  public function __construct() {
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE) {
      $url=login;
      redirect($url);
    }
    $this->load->model('model_produk');
    $this->load->model('model_login');
    $this->load->helper('url');
  }

  public function index() {
    if($this->session->userdata('akses') != '1') {
      echo "Anda tidak berhak mengakses halaman ini";
      //$this->load->view('ravencase/home');
    }
    else {
      $data['data'] = $this->model_produk->get_produk();
  		$this->load->view('admin/produk', $data);
    }
  }

  function viewform_tambah() {
		$this->load->view('admin/input');
	}

  public function search() {
    $data["data"] = $this->model_produk->getSearch();
    $this->load->view("admin/produk", $data);
  }

  function tambah() {
    $id_produk = $this->input->post('id_produk');
  	$nama_produk = $this->input->post('nama_produk');
  	$harga_produk = $this->input->post('harga_produk');
  	$gambar_produk = $this->_uploadPhotoProduct();

  	$data = array(
      'nama_produk' => $nama_produk,
      'harga_produk' => $harga_produk,
      'gambar_produk' => $gambar_produk
  	);
		$this->model_produk->input_data($data, 'produk');
		redirect('produk');
	}

  function edit($id_produk) {
    $where = array('id_produk' => $id_produk);
    $data['data'] = $this->model_produk->edit_data($where, 'produk')->result();
    $this->load->view('admin/edit', $data);
  }

  function _uploadPhotoProduct()
  {
      $config['upload_path']          = './img/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $config['file_name']            = $this->input->post('nama_produk');
      $config['overwrite']            = true;
      $config['max_size']             = 5120; // 5MB

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar_produk')) {
        return $this->upload->data("file_name");
      }

      return "default.jpg";
  }

  function update(){
    $id_produk = $this->input->post('id_produk');
  	$nama_produk = $this->input->post('nama_produk');
  	$harga_produk = $this->input->post('harga_produk');
  	$gambar_produk = $this->_uploadPhotoProduct();

  	$data = array(
  		'nama_produk' => $nama_produk,
  		'harga_produk' => $harga_produk,
  		'gambar_produk' => $gambar_produk
  	);

  	$where = array(
  		'id_produk' => $id_produk
  	);

  	$this->model_produk->update_data($where,$data,'produk');
  	redirect('produk');
  }

  function _uploadPhoto()
  {
      $config['upload_path']          = './img/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $config['file_name']            = $this->input->post('fullname');
      $config['overwrite']            = true;
      $config['max_size']             = 5120; // 5MB

      $this->load->library('upload', $config);

      if ($this->upload->do_upload('pic')) {
        return $this->upload->data("file_name");
      }

      return "user.png";
  }

  function update_user(){
    $id = $this->input->post('id');
  	$email = $this->input->post('email');
  	$fullname = $this->input->post('fullname');
  	$alamat = $this->input->post('alamat');
    $telp = $this->input->post('telp');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $level = $this->input->post('level');
    $pic = $this->_uploadPhoto();

    $this->session->set_userdata('ses_id',$id);
   $this->session->set_userdata('ses_email',$email);
   $this->session->set_userdata('ses_fullname',$fullname);
   $this->session->set_userdata('ses_alamat',$alamat);
   $this->session->set_userdata('ses_telp',$telp);
   $this->session->set_userdata('ses_pic',$pic);

  	$data = array(
  		'email' => $email,
  		'fullname' => $fullname,
  		'alamat' => $alamat,
      'telp' => $telp,
      'pic' => $pic
  	);

  	$where = array(
  		'id' => $id
  	);

  	$this->model_login->update_user($where,$data,'tabel_user');
  	redirect('home');
  }

  function hapus($id_produk) {
		$where = array('id_produk' => $id_produk);
		$this->model_produk->hapus_data($where,'produk');
		redirect('produk');
	}

}

?>
