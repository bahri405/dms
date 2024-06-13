<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelReview extends CI_Model{
    public function get_reviews_by_kedai_id($kedai_id) {
        $this->db->select('review.*, user.name, user.image as user_image');
        $this->db->from('review');
        $this->db->join('user', 'review.user_id = user.id');
        $this->db->where('review.kedai_id', $kedai_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_review($data) {
        return $this->db->insert('review', $data);
    }

    public function hapus_reviews($review_id)
    {
        // $this->db->where('id',$id);
        $this->db->delete('review', ['id' => $review_id]);
    }
}