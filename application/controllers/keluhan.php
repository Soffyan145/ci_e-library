<?php 
class Keluhan extends CI_Controller
{
	public function index()
	{
		
		$data['anggota'] = $this->model_buku->tampil_data_anggota()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('keluhan', $data);
		$this->load->view('templates/footer1');

	}
	public function tambah_aksi()
	{
		$nama			= $this->input->post('nama');
		$email		= $this->input->post('email');
		$keluhan				= $this->input->post('keluhan');

		$data= array(
			'nama'			=> $nama,
			'email'			=> $email,
			'keluhan'		=> $keluhan
		);
		$this->model_buku->tambah_keluhan($data, 'keluhan');
		redirect('keluhan/index');

	}
}
