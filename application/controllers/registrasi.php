<?php 

class Registrasi extends CI_Controller{
	

	public function index()
	{
		$this->form_validation->set_rules('nama_anggota', 'Nama_anggota', 'required', ['required' =>'Wajib Diisi!']);
		$this->form_validation->set_rules('username', 'Username', 'required', ['required' =>'Wajib Diisi!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' =>'Wajib Diisi!']);
		$this->form_validation->set_rules('email', 'Email', 'required', ['required' =>'Wajib Diisi!']);
		$this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password wajib diisi!', 'matches' =>'Password tidak cocok']);
		$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('registrasi');
			$this->load->view('templates_admin/footer');
		}else{
			$data = array(
			'id_anggota'		=> '',
			'nama_anggota'		=> $this->input->post('nama_anggota'),
			'username'			=> $this->input->post('username'),
			'alamat'			=> $this->input->post('alamat'),
			'email'				=> $this->input->post('email'),
			'password'			=> $this->input->post('password_1'),
			'role_id'			=> 2,
		);
			$this->db->insert('anggota', $data);
			redirect('auth/login');
		}
		
	}
}