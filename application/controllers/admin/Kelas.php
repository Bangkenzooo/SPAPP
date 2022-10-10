<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/kelasM' , 'kelas');
    }

    public function index()
    {
        $data['kelas'] = $this->kelas->getAllUser();
        $this->load->view('admin/kelas', $data);
    }
	public function create()
	{
		$this->load->view('admin/kelascreate');

	}
	public function store()
	{
		$this->kelas->save();
		return redirect('/admin/kelas');
	}
	public function delete()
	{
		$this->kelas->delete();
		return redirect('/admin/kelas');
	}
	public function edit()
	{
		
		$data['kelas'] = $this->kelas->getById($_GET['id_kelas']);
		$this->load->view('admin/kelasupdate',$data);
	
	}
	
	public function update()
	{
    $this->kelas->update($_GET['id_kelas']);
    return redirect('/admin/kelas');
}
}
