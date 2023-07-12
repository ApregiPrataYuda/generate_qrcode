<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Dash_m');
	}

	public function index()
	{
		$chart = $this->Dash_m->get()->result();
	     $data = [
            'charts' =>  $chart
		 ];
		$this->template->load('template','Dashboard', $data);
	}
}