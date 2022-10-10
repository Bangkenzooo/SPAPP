<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PetugasM extends CI_Model {
    
    public function getAllUser()
    {
        return $this->db->get('petugas')->result_array();
    }
	public function save()
	{
		$data = [
			"nama_petugas" => $this->input->post('nama'),
			"id_login" => $this->input->post('id_login'),
			
		];
		return $this->db->insert('petugas',$data);
	}
	
	public function delete()
	{
		$this->db->where('id_petugas', $_GET['id_petugas']);
		$this->db->delete('petugas');
		return TRUE;
	}

}
