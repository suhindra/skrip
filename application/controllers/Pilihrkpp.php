<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihrkpp extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->model('kpp_model');
    }

	public function index()
	{
		$data = array();

		$data['pengajuan'] = $this->kpp_model->check_pengajuan();
		$data['users'] = $this->user_model->get_all_user();
		

		$this->load->view('template/header',$data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('pilihrkpp');
		$this->load->view('template/footer');
		$this->load->view('template/js');
	}

	public function create()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');


	    $this->form_validation->set_rules('pp', 'Title', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        redirect('pilihrkpp','refresh');

	    }
	    else
	    {
	        $this->kpp_model->set_kpp();
			redirect('pilihrkpp','refresh');
		}
	}

}
