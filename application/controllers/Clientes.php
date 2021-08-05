<?php
defined('BASEPATH') OR exit('Ação mão permitida');

class Clientes extends CI_Controller {

	public function index()
	{
		$this->load->view('clientes');
	}
}
