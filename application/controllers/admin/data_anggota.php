<?php 

class Data_anggota extends CI_Controller{
	public function index()
	{
		$data['anggota'] = $this->model_buku->tampil_data_anggota()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_anggota', $data);
		$this->load->view('templates_admin/footer');
	}
	public function edit($id)
	{
		$where = array('id_anggota' =>$id);
		$data['anggota'] = $this->model_buku->edit_buku($where, 'anggota')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_anggota', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id 					=$this->input->post('id_anggota');
		$nama_anggota 		    =$this->input->post('nama_anggota');
        $alamat 		        =$this->input->post('alamat');
        $email 		        =$this->input->post('email');
        $no_telp 		        =$this->input->post('no_telp');

		$data = array(
			'nama_anggota'	=> $nama_anggota,
            'alamat'	    => $alamat,
            'no_telp'   	=> $no_telp,
		);

		$where = array(
			'id_anggota'	=>$id
		);

		$this->model_buku->update_data($where,$data,'anggota');
		redirect('admin/data_anggota/index');
	}
	public function hapus($id)
	{
		$where = array('id_anggota' =>$id);
		$this->model_buku->hapus_data($where,'anggota');
		redirect('admin/data_anggota/index');
	}
	public function detail($id){
		$this->load->model('model_buku');
		$detail = $this->model_buku->detail_data_anggota($id);
		$data['detail_anggota'] =$detail;
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_anggota', $data);
		$this->load->view('templates_admin/footer');
	}
	}