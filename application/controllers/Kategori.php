<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ModelKategori');
        $this->load->library('form_validation');
        
    }
    public function index()
    {
        $data['title'] = 'Kategori';
        $data['kategori'] = $this->ModelKategori->get_data('');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        
        $this->load->view('templates/sidebar',$data);
		$this->load->view('kategori/index', $data);
		$this->load->view('templates/footer');
    }
    public function tambah()
    {

        $data['title'] = 'Tambah Kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama','Nama', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header',$data );
            
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kategori/create', $data);
            $this->load->view('templates/footer');
        }else {
            $this->ModelKategori->tambahKatagori();
            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            berhasil di tambahkan.
          </div>');
            redirect('kategori');
        }
    }

    public function hapus($id)
    {
        $this->ModelKategori->hapusKategori($id);
        $this->session->set_flashdata('pesan','<div class="alert alert-danger mx-2" role="alert">
            berhasil di hapus!.
          </div>');
            redirect('kategori');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Kategori';
        $data['kategori'] = $this->ModelKategori->get_detail($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kategori/detail', $data);
            $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Kategori';
        $data['kategori'] = $this->ModelKategori->get_detail($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama','Nama', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data );
            
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kategori/edit', $data);
            $this->load->view('templates/footer');
        }else {
            $this->ModelKategori->editKategori();
            $this->session->set_flashdata('pesan','<div class="alert alert-warning  mx-2" role="alert">
            berhasil di ubah.
          </div>');
            redirect('kategori');
        }
    }

}