<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('siswa')->result_array();
    }
}