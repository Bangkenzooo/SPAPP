<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Model {
    
    public function getAllUser()
    {
        return $this->db->get('spp')->result_array();
    }

}
