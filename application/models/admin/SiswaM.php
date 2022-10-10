<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SiswaM extends CI_Model
{

    public function getAllUser()
    {
        return $this->db->get('siswa')->result_array();
    }

	public function save()
	{
		$data = [
			"nisn" => $this->input->post('NISN'),
			"nis" => $this->input->post('NIS'),
			"nama" => $this->input->post('Nama'),
			"id_kelas" => $this->input->post('Kelas'),
			"alamat" => $this->input->post('Alamat'),
			"no_telp" => $this->input->post('NO_Telepon'),
			"id_spp" => $this->input->post('ID_SPP'),
			"id_login" => $this->input->post('ID_Login'),
			
		];
		return $this->db->insert('siswa',$data);
	}
	public function delete()
	{
		$this->db->where('nisn', $_GET['nisn']);
		$this->db->delete('siswa');
		return TRUE;
	}
	

}
