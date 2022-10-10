<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/beranda' , 'beranda');
    }

    public function index()
    {
        $data['spp'] = $this->beranda->getAllUser();
        $this->load->view('admin/overview', $data);
    }
}
