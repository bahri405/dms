<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('ModelAuth');
        $this->load->library('form_validation');
        
    }
    public function index()
	{
        
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
            
        if($this->form_validation->run() == false){
            $data['title'] = 'Login';
            $this->load->view('templates/header',$data);
            $this->load->view('auth/login',$data);
            $this->load->view('templates/footer');
        }else{
            $this->_login();
        }
	}

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){
            if(password_verify($password,$user['password'])){
                $data = [
                    'user_id' => $user['id'],
                    'email' => $user['email'],
                    'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata($data);
                if($user['role_id'] == 1){
                    redirect('admin');
                }
                redirect('user');
            }else{
                $this->session->set_flashdata('pesan','<div class="alert alert-danger  mx-2" role="alert">
                password salah!!.
                </div>');
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger  mx-2" role="alert">
            email tidak terdaftar.
            </div>');
            redirect('auth');
        
        }
    }

    public function register()
    {
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false ){
            $data['title'] = 'Register';
            $this->load->view('templates/header',$data);
            $this->load->view('auth/register',$data);
            $this->load->view('templates/footer');
        }else {
            // echo "data masuk";
            $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            'role_id' => 2,
            'date_created' => time()
        ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success  mx-2" role="alert">
            berhasil register silahkan login.
            </div>');
            redirect('auth');
        }
    }

    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger  mx-2" role="alert">
            anda logout .
            </div>');
            redirect('auth');
    }

    
}