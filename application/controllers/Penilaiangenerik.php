<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaiangenerik extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
            $this->load->model('generik_model');
    }

	public function index()
	{
		$data = array();
		$data['generik'] = $this->generik_model->get_all_penilaian_generik();
		

		$this->load->view('template/header',$data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('penilaiangenerik');
		$this->load->view('template/footer');
		$this->load->view('template/js');
	}
}
