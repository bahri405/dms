<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAdmin extends CI_Model {

    public function get_count($table) {
        return $this->db->count_all($table);
    }
    public function get_kedai_review_data() {
        $this->db->select('kedai.nama AS kedai_nama, kategori.nama AS kategori_nama, review.point');
        $this->db->from('review');
        $this->db->join('kedai', 'review.kedai_id = kedai.id');
        $this->db->join('kategori', 'kedai.kategori_id = kategori.id');
        return $this->db->get()->result();
    }
}
