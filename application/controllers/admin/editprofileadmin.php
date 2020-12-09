<?php

class EditProfileAdmin extends CI_Controller {
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
      $data['data'] = $this->model_login->get_user();
  		$this->load->view('admin/editprofileadmin', $data);
    }
  }

  function edit_admin($id) {
    $where = array('id' => $id);
    $data['data'] = $this->model_login->edit_data($where, 'tabel_user')->result();
    $this->load->view('admin/editprofileadmin', $data);
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

  function update_admin(){
    $id = $this->input->post('id');
  	$email = $this->input->post('email');
  	$fullname = $this->input->post('fullname');
  	$alamat = $this->input->post('alamat');
    $telp = $this->input->post('telp');
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $pic = $this->_uploadPhoto();
    $level = $this->input->post('level');

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



  	redirect('admin');

  }

}

?>
