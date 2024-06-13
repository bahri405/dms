<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKedai extends CI_Model {

    public function get_data()
    {
        
        $this->db->select('kedai.*, kategori.nama as kategori_nama');
        $this->db->from('kedai');
        $this->db->join('kategori', 'kedai.kategori_id = kategori.id', 'left');
        $query = $this->db->get();
        
        return $query->result_array();
    }

    public function get_all_kategori() {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }

    public function get_detail($id)
    {
        $this->db->select('kedai.*, kategori.nama as kategori_nama');
        $this->db->from('kedai');
        $this->db->join('kategori', 'kedai.kategori_id = kategori.id',);
        $this->db->where('kedai.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function tambahKedai()
    {
        $this->load->helper(['form', 'url']);
        
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 4800;

        $this->load->library('upload', $config);
        
        $fields = ['poster', 'poster2', 'poster3'];
        $upload_data = [];

        foreach ($fields as $field) {
            if (!$this->upload->do_upload($field)) {
                echo $this->upload->display_errors();
            } else {
                $data = $this->upload->data();
                $upload_data[$field] = $data['file_name'];
            }
        }

        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'bio' => $this->input->post('bio'),
            'poster' => $upload_data['poster'],
            'poster2' => $upload_data['poster2'],
            'poster3' => $upload_data['poster3'],
            'kategori_id' => $this->input->post('kategori_id', true),
        );
        $this->db->insert('kedai', $data);
    }
    public function editKedai()
    {
        $this->load->helper(['form', 'url']);
        
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 4800;

        $this->load->library('upload', $config);

        $fields = ['poster', 'poster2', 'poster3'];
        $upload_data = [];
        $kedai = $this->db->where('id', $this->input->post('id'));

        foreach ($fields as $field) {
            if ($_FILES[$field]['name']) {
                if (!$this->upload->do_upload($field)) {
                    echo $this->upload->display_errors();
                } else {
                    $data = $this->upload->data();
                    $upload_data[$field] = $data['file_name'];
                }
            } else {
                $upload_data[$field] = $kedai->$field;
            }
        }

        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'bio' => $this->input->post('bio'),
            'poster' => $upload_data['poster'],
            'poster2' => $upload_data['poster2'],
            'poster3' => $upload_data['poster3'],
            'kategori_id' => $this->input->post('kategori_id', true),
        );
        
        $this->db->update('kedai', $data);
    }

    public function hapusKedai($id)
    {
        // $this->db->where('id',$id);
        $this->db->delete('kedai', ['id' => $id]);
    }

    
    
}