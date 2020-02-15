<?php 

class Data_pengarang extends CI_Controller{
	public function index()
	{
		$data['pengarang'] = $this->model_buku->tampil_data_pengarang()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_pengarang', $data);
		$this->load->view('templates_admin/footer');
	}
	public function tambah_aksi()
	{
		$nama_pengarang						= $this->input->post('nama_pengarang');
		$email								= $this->input->post('email');
		$foto_pengarang 				=$_files['foto_pengarang'];
		if ($foto_pengarang='') {}else{
			$config['upload_path']		='./assets/images/books';
			$config['allowed_types']	='jpg|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto_pengarang')){
				echo "Upload file gagal"; die();
			}else{
				$foto_pengarang=$this->upload->data('file_name');
			}
		}
		$data= array(
			'nama_pengarang'		=> $nama_pengarang,
			'email'					=> $email,
			'foto_pengarang'		=> $foto_pengarang,
		);
		$this->model_buku->tambah_pengarang($data, 'pengarang');
		redirect('admin/data_pengarang/index');

	}
	public function edit($id)
	{
		$where = array('id_pengarang' =>$id);
		$data['pengarang'] = $this->model_buku->edit_buku($where, 'pengarang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_pengarang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id 					=$this->input->post('id_pengarang');
		$nama_pengarang 		=$this->input->post('nama_pengarang');
		$email		 			=$this->input->post('email');

		$data = array(
			'nama_pengarang'	=> $nama_pengarang,
			'email'				=> $email,
		);

		$where = array(
			'id_pengarang'	=>$id
		);

		$this->model_buku->update_data($where,$data,'pengarang');
		redirect('admin/data_pengarang/index');
	}
	public function hapus($id)
	{
		$where = array('id_pengarang' =>$id);
		$this->model_buku->hapus_data($where,'pengarang');
		redirect('admin/data_pengarang/index');
	}
	public function detail($id){
		$this->load->model('model_buku');
		$detail = $this->model_buku->detail_data_pengarang($id);
		$data['detail_pengarang'] =$detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_pengarang', $data);
		$this->load->view('templates_admin/footer');
	}
	}