<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelasM extends CI_Model {
    
    public function getAllUser()
    {
        return $this->db->get('kelas')->result_array();
    }
	public function getById($id)
    {
        return $this->db->get_where('kelas', ["id_kelas" => $id])->row();

    }


	public function save()
	{
		$data = [
			"nama_kelas" => $this->input->post('nama_kelas'),
			"id_kk" => $this->input->post('id_kk'),
		];
		return $this->db->insert('kelas',$data);
	}
	public function delete()
	{
		$this->db->where('id_kelas', $_GET['id_kelas']);
		$this->db->delete('kelas');
		return TRUE;
	}
	public function update($id)
	{
		$data = [
			"nama_kelas" => $this->input->post('nama_kelas'),
			"id_kk" => $this->input->post('id_kk'),
		];
		return $this->db->update('kelas', $data, array('id_kelas' => $id));
	}

}
