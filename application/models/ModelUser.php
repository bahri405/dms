<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
    public function get_user($id) {
        return $this->db->get_where('user', ['id' => $id])->row();
    }
}