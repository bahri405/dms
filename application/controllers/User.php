<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ModelKedai');
        $this->load->model('ModelReview');
        $this->load->library('form_validation');
        $this->load->model('ModelHome');
        
    }
    public function index($offset = 0)
    {   
        $limit = 6;
        
        $data['title'] = 'User Page';
        $data['limit'] = $limit; 
        $data['offset'] = $offset;
        $data['kedai'] = $this->ModelHome->get_kedai_with_limit($limit, $offset);
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

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar',$data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        
        $data['title'] = 'Profile edit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required');
        if($this->form_validation->run() == false){

            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        }else{
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yg mau di upload
            $upload_image = $_FILES['image']['name'];

            if($upload_image){

                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = 4800;
                $config['upload_path']   = './assets/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image'))
                {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo "Gagal Tambah";
                }
            }

            $this->db->set('name',$name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            berhasil di ubah ...
            </div>');
            redirect('user/profile');
        }
    }

    public function kedai(){

        $keyword = $this->input->post('keyword');
        $data['title'] = 'Kedai Page';
        $data['kedai']= $this->ModelHome->get_keyword($keyword);
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('layouts/head',$data);
        $this->load->view('user/daftar_kedai',$data);
        $this->load->view('layouts/foot',$data);
    }

    public function detail_kedai($id){
        
        $data['title'] = 'Detail Kedai';
        $data['kedai'] = $this->ModelKedai->get_detail($id);
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        $data['review'] = $this->ModelReview->get_reviews_by_kedai_id($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
            
            $this->load->view('layouts/head',$data);
            $this->load->view('user/detail_kedai', $data);
            $this->load->view('layouts/foot',$data);
    }

    public function filter_by_category($category_id) {

        $data['kedai'] = $this->ModelHome->get_kedai_by_category($category_id);
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Kedai Page';
        
        $this->load->view('layouts/head',$data);
        $this->load->view('user/daftar_kedai',$data);
        $this->load->view('layouts/foot',$data);
    }
    public function add_review() {
        $this->load->model('ModelReview');

        $user_id = $this->session->userdata('user_id');
        $kedai_id = $this->input->post('kedai_id');
        $content = $this->input->post('content');
        $point = $this->input->post('point');

        $data = array(
            
            'user_id' => $user_id,
            'kedai_id' => $kedai_id,
            'content' => $content,
            'point' => $point,
        );

        $this->ModelReview->add_review($data);

        redirect('user/detail_kedai/' . $this->input->post('kedai_id'));
    }

}