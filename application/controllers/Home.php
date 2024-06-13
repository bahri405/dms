<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ModelKedai');
        $this->load->model('ModelReview');
        $this->load->model('ModelUser');
        $this->load->model('ModelHome');
        
        
    }
    public function index($offset = 0){
        $limit = 6;

        $data['title'] = 'Home Page';
        $data['limit'] = $limit; 
        $data['offset'] = $offset; 
        $data['kedai'] = $this->ModelHome->get_kedai_with_limit($limit, $offset);
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        
        $this->load->view('layouts/head',$data);
        $this->load->view('home/index',$data);
        $this->load->view('layouts/foot',$data);
        
    }

    public function kedai(){
        
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Kedai Page';
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        
        $data['kedai']= $this->ModelHome->get_keyword($keyword);
        $this->load->view('layouts/head',$data);
        $this->load->view('home/daftar_kedai',$data);
        $this->load->view('layouts/foot',$data);
    }

    public function detail_kedai($id){
        
        $data['title'] = 'Detail Kedai';
        $data['kedai'] = $this->ModelKedai->get_detail($id);
        $data['review'] = $this->ModelReview->get_reviews_by_kedai_id($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
            $this->load->view('layouts/head',$data);
            $this->load->view('home/detail_kedai', $data);
            $this->load->view('layouts/foot',$data);
    }

    public function filter_by_category($category_id) {

        $data['kedai'] = $this->ModelHome->get_kedai_by_category($category_id);
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        $data['title'] = 'Kedai Page';
        
        $this->load->view('layouts/head',$data);
        $this->load->view('home/daftar_kedai',$data);
        $this->load->view('layouts/foot',$data);
    }
}


