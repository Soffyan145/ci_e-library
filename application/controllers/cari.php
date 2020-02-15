<?php 

class Cari extends CI_Controller
{
	public function search()
	{
		$cari = $this->input->post('cari');
		$data['buku']=$this->model_buku->get_cari($cari);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pagecari', $data);
		$this->load->view('template/footer');
	}
}