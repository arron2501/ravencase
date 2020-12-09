<?php
  class model_order extends CI_Model {
    function get_produk() {
      $query = $this->db->get('tabel_order');
      return $query->result();
    }

    function get_detail() {
      $query = $this->db->get('tabel_detail_order');
      return $query->result();
    }

    function vieworders() {
      $nama = $this->session->userdata('ses_fullname');
      $email = $this->session->userdata('ses_email');
      $query = $this->db->query("SELECT id_order, nama, email, alamat, telp, tgl_order, qty, subtotal, status FROM tabel_order WHERE nama='$nama' OR email='$email'");
      return $query->result();
    }

    function viewinvoice($where,$table) {
    	return $this->db->get_where($table,$where);
    }

    public function tambah_order($data) {
      $this->db->insert('tabel_order', $data);
      $id = $this->db->insert_id();
      return (isset($id)) ? $id : FALSE;
    }

    public function tambah_detail_order($data) {
      $this->db->insert('tabel_detail_order', $data);
      $id = $this->db->insert_id();
      return (isset($id)) ? $id : FALSE;
    }

    function update_status($where,$data,$table){
  		$this->db->where($where);
  		$this->db->update($table,$data);
  	}
}
?>
