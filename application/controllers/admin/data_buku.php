<?php 

class Data_buku extends CI_Controller{
	public function index()
	{
		
		$data['buku'] = $this->model_buku->tampil_data()->result();
		$data['pengarang'] = $this->model_buku->tampil_data_pengarang()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_buku', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_aksi()
	{
		$judul_buku			= $this->input->post('judul_buku');
		$id_pengarang		= $this->input->post('id_pengarang');
		$rilis				= $this->input->post('rilis');
		$sinopsis			= $this->input->post('sinopsis');
		$kategori			= $this->input->post('kategori');
		$link				= $this->input->post('link');
		$foto 				=$_files['foto'];
		if ($foto='') {}else{
			$config['upload_path']		='./assets/images/books';
			$config['allowed_types']	='jpg|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload file gagal"; die();
			}else{
				$foto=$this->upload->data('file_name');
			}
		}
		$data= array(
			'judul_buku'			=> $judul_buku,
			'id_pengarang'			=> $id_pengarang,
			'rilis'					=> $rilis,
			'sinopsis'				=> $sinopsis,
			'kategori'				=> $kategori,
			'link'					=> $link,
			'foto'					=> $foto
		);
		$this->model_buku->tambah_buku($data, 'buku');
		redirect('admin/data_buku/index');

	}
	public function edit($id)
	{
		$where = array('id_buku' =>$id);
		$data['buku'] = $this->model_buku->edit_buku($where, 'buku')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_buku', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id 					=$this->input->post('id_buku');
		$judul_buku 			=$this->input->post('judul_buku');
		$id_pengarang 			=$this->input->post('id_pengarang');
		$rilis 					=$this->input->post('rilis');
		$sinopsis 				=$this->input->post('sinopsis');
		$kategori 				=$this->input->post('kategori');
		$link	 				=$this->input->post('link');


		$data = array(
			'judul_buku'			=> $judul_buku,
			'id_pengarang'			=> $id_pengarang,
			'rilis'					=> $rilis,
			'sinopsis'				=> $sinopsis,
			'kategori'				=> $kategori,
			'link'					=> $link
		);

		$where = array(
			'id_buku'	=>$id
		);

		$this->model_buku->update_data($where,$data,'buku');
		redirect('admin/data_buku/index');
	}

	public function hapus($id)
	{
		$where = array('id_buku' =>$id);
		$this->model_buku->hapus_data($where,'buku');
		redirect('admin/data_buku/index');
	}
	public function detail($id){
		$this->load->model('model_buku');
		$detail = $this->model_buku->detail_data($id);
		$data['detail'] =$detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates_admin/footer');
	}
	public function search()
	{
		$cari = $this->input->post('cari');
		$data['buku']=$this->model_buku->get_cari($cari);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('pagecari', $data);
		$this->load->view('template/footer');
	}
	public function print(){
		$data['buku'] = $this->model_buku->tampil_data("buku")->result();
		$this->load->view('print_buku', $data);
	}

}