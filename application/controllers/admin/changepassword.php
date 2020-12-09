<?php

class ChangePassword extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('model_login');
  }

  public function index() {
    $data['data'] = $this->model_login->get_user();
    $this->load->view("admin/changepassword", $data);
  }

  public function save_password() {
    $this->form_validation->set_rules('new','New','required|alpha_numeric');
  $this->form_validation->set_rules('re_new', 'Retype New', 'required|matches[new]');
    if($this->form_validation->run() == FALSE)
  {
   redirect("changepassword");
  }else{
   $cek_old = $this->model_login->cek_old();
   if ($cek_old == False){
    $this->session->set_flashdata('error','Old password not match!' );
    redirect("changepassword");
   }else{
    $this->model_login->save();
    $this->session->sess_destroy();
    $this->session->set_flashdata('error','Your password success to change, please relogin !' );
    redirect("login");
   }//end if valid_user
  }
}

}
?>
