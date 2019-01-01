<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesepakatankinerja extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
            $this->load->model('kpp_model');
    }

	public function index()
	{
		$data = array();

		$data['pengajuan'] = $this->kpp_model->check_pengajuan();		

		$this->load->view('template/header',$data);
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('kesepakatankinerja');
		$this->load->view('template/footer');
		$this->load->view('template/js');
	}
}
