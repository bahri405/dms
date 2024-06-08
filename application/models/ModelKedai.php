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
        $this->db->join('kategori', 'kedai.kategori_id = kategori.id', 'left');
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
        $config['max_width']            = 4024;
        $config['max_height']           = 4768;
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('poster'))
        {
            echo "Gagal Tambah";
        }
        else
        {
            $poster = $this->upload->data();
            $poster = $poster['file_name'];
            $nama = $this->input->post('nama', true);
            $alamat = $this->input->post('alamat', true);
            $bio = $this->input->post('bio', true);
            $kategori_id = $this->input->post('kategori_id', true);
            
            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'poster' => $poster,
                'bio' => $bio,
                'kategori_id' => $kategori_id,
            );
        }

        $this->db->insert('kedai', $data);
    }
    public function editKedai()
    {
        $this->load->helper(['form', 'url']);
        
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 4800;
        $config['max_width']            = 4024;
        $config['max_height']           = 4768;
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('poster'))
        {
            $nama = $this->input->post('nama', true);
            $alamat = $this->input->post('alamat', true);
            $bio = $this->input->post('bio', true);
            $kategori_id = $this->input->post('kategori_id', true);

            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'bio' => $bio,
                'kategori_id' => $kategori_id,
            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('kedai', $data);
        }
        else
        {
            $poster = $this->upload->data();
            $poster = $poster['file_name'];
            $nama = $this->input->post('nama', true);
            $alamat = $this->input->post('alamat', true);
            $bio = $this->input->post('bio', true);
            $kategori_id = $this->input->post('kategori_id', true);
            
            $data = array(
                'nama' => $nama,
                'alamat' => $alamat,
                'poster' => $poster,
                'bio' => $bio,
                'kategori_id' => $kategori_id,
            );
        }

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kedai', $data);
    }

    public function hapusKedai($id)
    {
        // $this->db->where('id',$id);
        $this->db->delete('kedai', ['id' => $id]);
    }

}