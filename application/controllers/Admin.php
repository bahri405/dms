<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ModelAdmin');
        $this->load->model('ModelKedai');
        
    }
    public function index()
    {
        
        $data['title'] = 'Dashboard';
        $data['kedai_count'] = $this->ModelAdmin->get_count('kedai');
        $data['kategori_count'] = $this->ModelAdmin->get_count('kategori');
        $data['review_count'] = $this->ModelAdmin->get_count('review');
        $data['user_count'] = $this->ModelAdmin->get_count('user');
        $data['kedai_review_data'] = $this->ModelAdmin->get_kedai_review_data();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kedai'] = $this->ModelKedai->get_data('');

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

}