<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		$data = array();

		$data['content'] = $this->load->view('dashboard',$data,true);
        $this->load->vars($data);
		$this->load->view('default_view');
		
	}
}
