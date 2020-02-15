<?php 
class Data_keluhan extends CI_Controller
{
	public function index()
	{
		
		$data['keluhan'] = $this->model_buku->tampil_data_keluhan()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_keluhan', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_aksi()
	{
		$nama			= $this->input->post('nama');
		$email			= $this->input->post('email');
		$keluhan		= $this->input->post('keluhan');

		$data= array(
			'nama'			=> $nama,
			'email'			=> $email,
			'keluhan'		=> $keluhan
		);
		$this->model_buku->tambah_keluhan($data, 'keluhan');
		redirect('keluhan/index');

	}
	public function hapus($id)
	{
		$where = array('id_keluhan' =>$id);
		$this->model_buku->hapus_data($where,'keluhan');
		redirect('admin/data_keluhan/index');
	}
}
