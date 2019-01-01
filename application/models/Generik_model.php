<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Generik_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
     * 
     */

    public function get_all_penilaian_generik() {
    
        $this->db->select('*');
        $this->db->from('t_faktor_kinerja_generik');
        $query = $this->db->get(); 
        return $query->result_array();
    }

    
}
