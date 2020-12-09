<?php
  class model_register extends CI_Model {
    //input data ke database
    function register_member($data) {
        $this->db->insert('tabel_user',$data);
    }
}
?>
