<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {   
        $this->load->model('ModelKedai');
        $data['title'] = 'User Page';
        $data['kedai'] = $this->ModelKedai->get_data('');
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('layouts/head', $data);
        $this->load->view('user/index', $data);
        $this->load->view('layouts/foot', $data);
        
    }

    public function profile()
    {
        
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

}