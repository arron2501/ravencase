<?php

class Login extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('model_login');
  }

  public function index() {
    $this->load->view("admin/login");
  }

  public function auth() {
    $email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
    $password = htmlspecialchars(md5($this->input->post('password', TRUE)), ENT_QUOTES);

    $cek_admin = $this->model_login->auth_member($email, $password);

    if($cek_admin->num_rows() > 0) {
      $data = $cek_admin->row_array();
      $this->session->set_userdata('masuk', TRUE);
      if($data['level'] == '1') { //Akses admin
        $this->session->set_userdata('akses', '1');
        $this->session->set_userdata('ses_id',$data['id']);
        $this->session->set_userdata('ses_fullname',$data['fullname']);
        $this->session->set_userdata('ses_email',$data['email']);
        $this->session->set_userdata('ses_alamat',$data['alamat']);
        $this->session->set_userdata('ses_telp',$data['telp']);
        $this->session->set_userdata('ses_pic',$data['pic']);
        redirect('admin');
      }
      else { // Akses user
        $cek_user = $this->model_login->auth_member($email, $password);
        $data = $cek_user->row_array();
        $this->session->set_userdata('masuk', TRUE);
        $this->session->set_userdata('akses', '0');
        $this->session->set_userdata('ses_id',$data['id']);
        $this->session->set_userdata('ses_fullname',$data['fullname']);
        $this->session->set_userdata('ses_email',$data['email']);
        $this->session->set_userdata('ses_alamat',$data['alamat']);
        $this->session->set_userdata('ses_telp',$data['telp']);
        $this->session->set_userdata('ses_pic',$data['pic']);
        redirect('home');
      }
    }
    else {
      // jika email dan password tidak ditemukan atau salah
        $url = login;
        echo $this->session->set_flashdata('msg','Email Atau Password Salah');
        redirect($url);
    }
  }

  function logout() {
    $this->session->sess_destroy();
    $url = login;
    redirect($url);
  }
}

?>
