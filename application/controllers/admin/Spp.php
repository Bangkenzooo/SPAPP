<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/sppM' , 'spp');
    }

    public function index()
    {
        $data['spp'] = $this->spp->getAllUser();
        $this->load->view('admin/spp', $data);
    }
	public function create()
	{
		
		$this->load->view('admin/sppcreate');
	}
	public function store()
	{
		$this->spp->save();
		return redirect('/admin/spp');
	}
	public function delete()
	{
		$this->spp->delete();
		return redirect('/admin/spp');
	}
	public function edit()
	{
		
		$data['spp'] = $this->spp->getById($_GET['id_spp']);
		$this->load->view('admin/sppupdate',$data);
	
	}
	public function update()
	{
    $this->spp->update($_GET['id_spp']);
    return redirect('/admin/spp');
}
	
}
