<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiM extends CI_Model {
    
    public function getAllUser()
    {
        return $this->db->get('pembayaran')->result_array();
    }

	public function save()
	{
		$data = [
			
			"id_petugas" => $this->input->post('id_petugas'),
			"tgl_bayar" => $this->input->post('tgl_bayar'),
			"bulan_dibayar" => $this->input->post('bulan_dibayar'),
			"tahun_dibayar" => $this->input->post('tahun_dibayar'),
			"id_spp" => $this->input->post('id_spp'),
			"jumlah_bayar" => $this->input->post('jumlah_bayar'),
		];
		return $this->db->insert('pembayaran',$data);
	}
	public function delete()
	{
		$this->db->where('id_pembayaran', $_GET['id_pembayaran']);
		$this->db->delete('pembayaran');
		return TRUE;
	}

}
