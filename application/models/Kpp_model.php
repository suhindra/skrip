<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kpp_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_all_pengajuan() {
    	$user = $this->session->userdata('logged_in');
        $this->db->select('*');
        $this->db->from('t_pengajuan');
        $this->db->join('t_user', 't_user.id = t_pengajuan.id_user_pejabat');
        $this->db->where('t_pengajuan.id_user_pejabat', $user['users_id']);
        $query = $this->db->get(); 
        return $query->result_array();
    }

   	public function set_kpp()
	{
		
		$user = $this->session->userdata('logged_in');
		
	    $data = array(
	        'id_user' => $user['users_id'],
	        'id_user_rekan' => $this->input->post('rk'),
	        'id_user_pejabat' => $this->input->post('pp'),
	        'tanggal_pengajuan' => date("Y-m-d"),
	        'id_semester' => 1,
	        'status' => 'pending',
	    );

	    return $this->db->insert('t_pengajuan', $data);
	}

	public function check_pengajuan()
	{
		$user = $this->session->userdata('logged_in');
		$this->db->select('*');
        $this->db->from('t_pengajuan');
        $this->db->where('id_user', $user['users_id']);
        $this->db->where('id_semester', 1);
        $this->db->where('status', 'approved');

        $query = $this->db->get(); 
        return $query->num_rows();
	}


    
}


