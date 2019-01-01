<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
            $this->load->model('kpp_model');
    }

	public function index()
	{
		$data = array();

		$data['all_pengajuan'] = $this->kpp_model->get_all_pengajuan();
		

		$this->load->view('template/header',$data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('approval');
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
