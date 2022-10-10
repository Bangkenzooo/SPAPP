<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/transaksiM' , 'transaksi');
    }

    public function index()
    {
        $data['pembayaran'] = $this->transaksi->getAllUser();
        $this->load->view('admin/transaksi', $data);
    }
	public function create()
	{
		
		$this->load->view('admin/transaksicreate');
	}
	public function store()
	{
		$this->transaksi->save();
		return redirect('admin/transaksi');
	}
	public function delete()
	{
		$this->transaksi->delete();
		return redirect('/admin/pembayaran');
	}
}
