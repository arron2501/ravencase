<?php
  class model_produk extends CI_Model {
    private $_table = "produk";
    //input data ke database
    function get_produk() {
        $query = $this->db->get('produk');
        return $query->result();
    }

    public function getSearch() {
      $keyword = $this->input->get('keyword');

      $this->db->like('id_produk', $keyword);
      $this->db->or_like('nama_produk', $keyword);

      return $this->db->get($this->_table)->result();
    }

    function input_data($data,$table) {
      $this->db->query("ALTER TABLE produk DROP id_produk");
      $this->db->query("ALTER TABLE produk ADD  id_produk INT( 50 ) NOT NULL AUTO_INCREMENT FIRST ,ADD KEY (id_produk)");
  		$this->db->insert($table,$data);
  	}

    function edit_data($where,$table) {
    	return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
  		$this->db->where($where);
  		$this->db->update($table,$data);
  	}

    function hapus_data($where,$table) {
  		$this->db->where($where);
  		$this->db->delete($table);
      $this->db->query("ALTER TABLE produk DROP id_produk");
      $this->db->query("ALTER TABLE produk ADD  id_produk INT( 50 ) NOT NULL AUTO_INCREMENT FIRST ,ADD KEY (id_produk)");
  	}
}
?>
