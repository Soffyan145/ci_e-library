<?php 

class Dashboard_admin extends CI_Controller{
	public function index(){
		$data['total_buku'] 		= $this->model_buku->hitung_buku();
		$data['total_anggota'] 		= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 	= $this->model_buku->hitung_pengarang();
		$data['total_request'] 		= $this->model_buku->hitung_request();
		$data['total_keluhan'] 		= $this->model_buku->hitung_keluhan();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
	}
}
