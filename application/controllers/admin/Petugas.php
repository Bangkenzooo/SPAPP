<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/petugasM' , 'petugas');
    }

    public function index()
    {
        $data['petugas'] = $this->petugas->getAllUser();
        $this->load->view('admin/petugas', $data);
    }
	public function create()
	{
		
		$this->load->view('admin/petugascreate');
	}
	public function store()
	{
		$this->petugas->save();
		return redirect('/admin/petugas');
	}
	public function delete()
	{
		$this->petugas->delete();
		return redirect('/admin/petugas');
	}
}
