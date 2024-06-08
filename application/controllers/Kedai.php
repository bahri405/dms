<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kedai extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ModelKedai');
        $this->load->library('form_validation');
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'kedai';
        $data['kedai'] = $this->ModelKedai->get_data('');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar',$data);
		$this->load->view('kedai/index', $data);
		$this->load->view('templates/footer');
    }
    
    public function proses_tambah_data()
    {
        $data['title'] = 'Tambah Kedai';
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        $this->form_validation->set_rules('bio','Bio', 'required');
        $this->form_validation->set_rules('kategori_id','Kategori_id', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('kedai/create', $data);
            $this->load->view('templates/footer');
        }else{
            $this->ModelKedai->tambahKedai();
            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            berhasil di tambahkan.
          </div>');
            redirect('kedai');
        }
    }
    public function detail($id)
    {
        $data['title'] = 'Detail Kedai';
        $data['kedai'] = $this->ModelKedai->get_detail($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
            $this->load->view('templates/header' );
            $this->load->view('templates/topbar' );
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kedai/detail', $data);
            $this->load->view('templates/footer');
    }
    public function proses_edit_data($id)
    {
        $data['title'] = 'Edit Kedai';
        $data['kedai'] = $this->ModelKedai->get_detail($id);
        $data['kategori'] = $this->ModelKedai->get_all_kategori();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        $this->form_validation->set_rules('bio','Bio', 'required');
        $this->form_validation->set_rules('kategori_id','Kategori_id', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('kedai/edit', $data);
            $this->load->view('templates/footer');
        }else{
            $this->ModelKedai->editKedai();
            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            berhasil di ubah.
          </div>');
            redirect('kedai');
        }
    }
    public function hapus($id)
    {
        $this->ModelKedai->hapusKedai($id);
        $this->session->set_flashdata('pesan','<div class="alert alert-danger mx-2" role="alert">
            berhasil di hapus!.
          </div>');
            redirect('kedai');
    }
}