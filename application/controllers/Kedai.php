<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kedai extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('ModelKedai');
        $this->load->model('ModelReview');
        $this->load->library('form_validation');
        
    }
    public function index()
    {
        $data['title'] = 'List Kedai';
        $data['kedai'] = $this->ModelKedai->get_data('');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header',$data);
        
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
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('kedai/create', $data);
            $this->load->view('templates/footer');
        }else{
            $this->ModelKedai->tambahKedai();
            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            kedai baru berhasil di tambahkan.
            </div>');
            redirect('kedai');
        }
    }
    public function detail($id)
    {
        
        $data['title'] = 'Detail Kedai';
        $data['kedai'] = $this->ModelKedai->get_detail($id);
        $data['review'] = $this->ModelReview->get_reviews_by_kedai_id($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
            $this->load->view('templates/header',$data );
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
            $this->load->view('templates/header',$data);
            $this->load->view('templates/sidebar',$data);
            $this->load->view('kedai/edit', $data);
            $this->load->view('templates/footer');
        }else{
            $this->ModelKedai->editKedai();
            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            poster berhasil di ubah.
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

        redirect('kedai/detail/' . $this->input->post('kedai_id'));
    }

   public function hapus_review($review_id, $id)
    {
        
        $this->ModelReview->hapus_reviews($review_id);
        $this->ModelReview->get_reviews_by_kedai_id($id);
        $this->session->set_flashdata('pesan','<div class="alert alert-danger mx-2" role="alert">
            berhasil di hapus!.
          </div>');
            redirect('kedai/detail/'. $id);
    }

}