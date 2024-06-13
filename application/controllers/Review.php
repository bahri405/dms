<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kedai extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        
        $this->load->model('ModelReview');
        $this->load->model('ModelKedai');
        
        
    }


    public function add_review($id)
    {
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kedai'] = $this->ModelKedai->get_detail($id);

        $this->form_validation->set_rules('content','Content', 'required');
        $this->form_validation->set_rules('point','Point', 'required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header',$data );
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/detail', $data);
            $this->load->view('templates/footer');
        }else {
            $user_id = session_id('user');
            $data = array (
                            'user_id' => $user_id,
                            'kedai_id' => $this->input->post('id_kedai'),
                            'content' => $this->input->post('content'),
                            'point' => $this->input->post('point'),
                        );
            $this->db->insert('review',$data);            
            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            berhasil di tambahkan.
            </div>');
            redirect('kedai/detail'.$id);
        }
    }

    
}