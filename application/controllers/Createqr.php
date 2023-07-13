<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createqr extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model(['qr_model','Dash_m']);
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

		//for del
		$data['allsdata'] = $this->Dash_m->get()->result();
		
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
          $data = [
			'title' => 'tes',
			'allData' => $post
		  ];
		 $this->load->view('Pdf',$data);
	
	    
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


	public function Exportallexcel()
	{

		$data['alls'] = $this->qr_model->dataall();
		$html = $this->load->view('Exportallexcel', $data, true);
		$this->fungsi->Pdf_generator($html,'data','F4','potrait');
		
	}


	public function delbatch() {
		$kode_qr = $_POST['kode_qr']; 
		$item = $this->qr_model->checkimg($kode_qr)->row();
		$target_file = './assets/image/Qrcode/'.$item->kode_qr.'.png';
		unlink($target_file);
        $this->qr_model->delete($kode_qr); 
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('pesan', "Data Successfully Deleted");
		}
		redirect('Createqr');
	}


	function searchings() {
		$result = trim($_POST['searching']);
		$sql = $this->db->query("SELECT * FROM dataqr WHERE kode_qr = '$result' ")->row();
        $data = [
			'data' => $sql
		];

		if ($sql == null ) {
			echo '<div class="alert alert-danger alert-dismissible fade show ml-3" role="alert">
					<strong>Data not found !</strong>.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
		 		  </div>';
		}else {
		    $this->load->view('search',$data);
		}

	}
}
