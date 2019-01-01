<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * 
     */

    public function get_all_user() {
    
        $this->db->select('*');
        $this->db->from('t_user');
        $query = $this->db->get(); 
        return $query->result_array();
    }

    
}
