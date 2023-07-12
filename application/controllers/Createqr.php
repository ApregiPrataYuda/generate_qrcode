<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createqr extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('qr_model');
	}

	public function index()
	{

        $config['base_url'] = site_url('Createqr/index');
		$config['total_rows'] = $this->qr_model->get_count_all();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

		$config['full_tag_open'] = '<ul class="pagination">';        
		$config['full_tag_close'] = '</ul>';        
		$config['first_link'] = 'First';        
		$config['last_link'] = 'Last';        
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['first_tag_close'] = '</span></li>';        
		$config['prev_link'] = '&laquo';        
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['prev_tag_close'] = '</span></li>';        
		$config['next_link'] = '&raquo';        
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['next_tag_close'] = '</span></li>';        
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['last_tag_close'] = '</span></li>';        
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
		$config['cur_tag_close'] = '</a></li>';        
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
		$config['num_tag_close'] = '</span></li>';

        $choice = $config['total_rows'] /  $config['per_page'];
		$config['num_rows'] = floor($choice);
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['alldata'] = $this->qr_model->getdata($config['per_page'], $data['page'])->result();
		$data['pagination'] =  $this->pagination->create_links();


		$data['x'] = $this->qr_model->checkdata()->result();
		
		$this->template->load('template','Createqr',$data);
	}

	public function Createnew() {
		$post = $this->input->post(null, true);
			$this->qr_model->Add($post);

			if ($this->db->affected_rows() > 0) {
				$params = array('success' => true);
			}else {
				$params = array('success' => false);
			}
			echo json_encode();
	}

 //belum selesai
	public function getarr(){
		$post = $this->input->post(null, true);
	
		$html = $this->load->view('Pdf', $post, true);
		$this->fungsi->Pdf_generator($html,'data','A4','potrait');
	}


	public function singelpdf($codex){
		$data['row'] = $this->qr_model->singelpdf($codex)->row();
		$html = $this->load->view('singelpdf', $data, true);
		$this->fungsi->Pdf_generator($html,'data','A7','potrait');
	}

	public function singelexcel($codex)  {
		$data['row'] = $this->qr_model->singelexcel($codex)->row();
		$data['title'] = 'Qr-Code.'.$codex;
		$this->load->view('singelexcel', $data);
	}
}