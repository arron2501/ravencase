<?php
  class model_detailorder extends CI_Model {
    function get_detail() {
      $query = $this->db->get('tabel_detail_order');
      return $query->result();
    }
}
?>
