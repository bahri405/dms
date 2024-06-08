<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelReview extends CI_Model {

    public function add_review()
    {
        // Ambil data user dan kedai
        $user = $this->get_all_users();
        $kedai = $this->get_all_kedai();

        $data = array(
                'user_id' => $user[0]->id,
                'kedai_id' => $kedai[0]->id,
                'content' => $this->input->post('content'),  
                'point' => $this->input->post('point'),  
        );
        $this->db->insert('review', $data);
    }

    // Method untuk mengambil semua data review dengan join ke tabel users dan kedai
    public function get_all_reviews($id)
    {
        $this->db->select('review.*, user.name as user_name, kedai.nama as kedai_nama');
        $this->db->from('review');
        $this->db->join('users', 'review.user_id = user.id');
        $this->db->join('kedai', 'review.kedai_id = kedai.id');
        $this->db->where('kedai.id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Method untuk mengambil semua users
    public function get_all_users()
    {
        $query = $this->db->get('user');
        return $query->result();
    }

    // Method untuk mengambil semua kedai
    public function get_all_kedai()
    {
        $query = $this->db->get('kedai');
        return $query->result();
    }
}