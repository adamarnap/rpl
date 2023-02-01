<?php
class Adminpanel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Mcrud');
		$this->load->model('Mfrontend');
		$this->load->model('Mmember');
	  }
	
	public function index(){
		$this->load->view('admin/form_login');
	}

	public function dashboard(){
		if (empty($this->session->userdata('userName'))){
			redirect('adminpanel');
		}
		$this->template->load('layout_admin','admin/dashboard');
	}

	public function produk_terjual(){
		
        $data['penjualan']=$this->Mmember->get_detail_penjualan('detail_order')->result_array();
        
		$this->template->load('layout_admin','Admin/detail_penjualan',$data);
		//$this->load->view('Admin/detail_penjualan',$data);

	}
} 