<?php 

class Biographi extends CI_Controller
{
	public function index()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_biographi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('biographi', $data);
		$this->load->view('templates/footer');

	}
}
