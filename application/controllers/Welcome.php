<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('public/home');
	}

    public function admin()
    {
 	   $this->load->view('admin/home');
    }


}
