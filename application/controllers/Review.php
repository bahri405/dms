<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelReview');
    }
    public function add_reviews()
    {
        $data['title'] = 'Detail Kedai';
        $data['kedai'] = $this->ModelReview->get_all_kedai();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('kedai/detail', $data);
            $this->load->view('templates/footer');
            
            $this->ModelReview->add_review();
    }
}
