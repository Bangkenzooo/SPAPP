<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/siswaM', 'siswa');
    }

    public function index()
    {
        // $data['siswa'] = $this->siswa->getAllUser();
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
        $query = $this->db->get();

        // var_dump($query->result_array());
        // die;
        $data['siswa'] = $query->result_array();

        $this->load->view('admin/siswa', $data);
    }
	public function create()
	{
		$this->load->view('admin/siswacreate');

	}
	public function store()
	{
		$this->siswa->save();
		return redirect('/admin/siswa');
	}
	public function delete()
	{
		$this->siswa->delete();
		return redirect('/admin/siswa');
	}
}
