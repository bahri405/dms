<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
		$this->load->view('home/dashboard');
		$this->load->view('templates/footer');
	}

	public function master() 
	{
		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
		$this->load->view('home/master');
		$this->load->view('templates/footer');

	}

	public function companyFiles() {
		$this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
		$this->load->view('home/companyFiles');
		$this->load->view('templates/footer');
	}
}