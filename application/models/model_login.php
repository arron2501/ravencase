<?php
  class model_login extends CI_Model {
    //cek user dan password
    function auth_member($email, $password) {
        $query = $this->db->query("SELECT * FROM tabel_user WHERE email='$email' AND password='$password' LIMIT 1");
        return $query;
    }

    function get_user() {
        $query = $this->db->get('tabel_user');
        return $query->result();
    }

    function update_user($where,$data,$table){
  		$this->db->where($where);
  		$this->db->update($table,$data);
  	}

    public function save()
     {
      $pass = md5($this->input->post('new'));
      $data = array (
       'password' => $pass
       );
      $this->db->where('id', $this->session->userdata('ses_id'));
      $this->db->update('tabel_user', $data);
     }

     public function cek_old()
     {
      $old = md5($this->input->post('old'));
      $this->db->where('password',$old);
      $query = $this->db->get('tabel_user');
         return $query->result();;
             }

}
?>
