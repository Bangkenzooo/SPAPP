<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SppM extends CI_Model
{

    public function getAllUser()
    {
        return $this->db->get('spp')->result_array();
    }

	public function getById($id)
    {
        return $this->db->get_where('spp', ["id_spp" => $id])->row();

    }

	public function save()
	{
		$data = [
			"tahun" => $this->input->post('tahun'),
			"nominal" => $this->input->post('nominal'),
		];
		return $this->db->insert('spp',$data);
	}
	public function delete()
	{
		$this->db->where('id_spp', $_GET['id_spp']);
		$this->db->delete('spp');
		return TRUE;
	}
	public function update($id)
	{
		$data = [
			"tahun" => $this->input->post('tahun'),
			"nominal" => $this->input->post('nominal'),
		];
		return $this->db->update('spp', $data, array('id_spp' => $id));
	}
}
