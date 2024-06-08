<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKategori extends CI_Model {

    public function get_data()
    {
        return $this->db->get('kategori')->result_array();
    }

    public function tambahKatagori()
    {
        $data = 
        [
            'nama' => $this->input->post('nama', true),
        ];

        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($id)
    {
        // $this->db->where('id',$id);
        $this->db->delete('kategori', ['id' => $id]);
    }

    public function get_detail($id)
    {
        return $this->db->get_where('kategori',['id' => $id])->row_array();
    }

    public function editKategori()
    {
        $data = 
        [
            'nama' => $this->input->post('nama', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kategori', $data);
    }

}