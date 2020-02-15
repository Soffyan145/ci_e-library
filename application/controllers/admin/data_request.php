<?php 
class Data_request extends CI_Controller
{
	public function index()
	{
		
		$data['request'] = $this->model_buku->tampil_data_request()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_request', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_aksi()
	{
		$judul_buku			= $this->input->post('judul_buku');
		$pengarang			= $this->input->post('pengarang');

		$data= array(
			'judul_buku'	=> $judul_buku,
			'pengarang'		=> $pengarang
		);
		$this->model_buku->tambah_request($data, 'request');
		redirect('dashboard/praindex');

	}
	public function hapus($id)
	{
		$where = array('id_request' =>$id);
		$this->model_buku->hapus_data($where,'request');
		redirect('admin/data_request/index');
	}
}
