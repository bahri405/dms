<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelHome extends CI_Model {

    public function get_keyword($keyword){

        $this->db->select('kedai.*, kategori.nama as kategori_nama');
        $this->db->from('kedai');
        $this->db->join('kategori', 'kedai.kategori_id = kategori.id',);

        $this->db->like('kedai.nama', $keyword, 'both', FALSE);
        $this->db->or_like('alamat', $keyword, 'both', FALSE);
        $this->db->or_like('kategori.nama', $keyword, 'both', FALSE);
        $this->db->or_like('bio', $keyword, 'both', FALSE);
        return $this->db->get()->result();
    }

    public function get_kedai_by_category($category_id) {
        $this->db->select('kedai.*, kategori.nama as kategori_nama');
        $this->db->from('kedai');
        $this->db->join('kategori', 'kedai.kategori_id = kategori.id');
        $this->db->where('kategori.id', $category_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_kedai_with_limit($limit, $offset) {
        $this->db->select('kedai.*, kategori.nama as kategori_nama');
        $this->db->from('kedai');
        $this->db->join('kategori', 'kedai.kategori_id = kategori.id');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }
}