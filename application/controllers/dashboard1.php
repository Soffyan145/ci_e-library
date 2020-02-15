<?php 

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['total_buku'] = $this->model_buku->hitung_buku();
		$data['total_anggota'] = $this->model_buku->hitung_anggota();
		$data['total_pengarang'] = $this->model_buku->hitung_pengarang();
		$data['total_request'] = $this->model_buku->hitung_request();
		$data['pengarang'] 	= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 		= $this->model_buku->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');

	}
	public function praindex()
	{
		$data['total_buku'] = $this->model_buku->hitung_buku();
		$data['total_anggota'] = $this->model_buku->hitung_anggota();
		$data['total_pengarang'] = $this->model_buku->hitung_pengarang();
		$data['total_request'] = $this->model_buku->hitung_request();
		$data['pengarang'] 	= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 		= $this->model_buku->tampil_data()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('dashboard1', $data);
		$this->load->view('templates/footer1');

	}
}
