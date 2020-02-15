<?php 

class Auth extends CI_Controller
{
	public function index()
	{
		$data['pengarang'] 	= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 		= $this->model_buku->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('auth', $data);
		$this->load->view('templates/footer');

	}
	public function login()
	{
		$this->form_validation->set_rules('username','username','required',['required' => 'Username wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' => 'Password hajib diisi']);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates_admin/header');
			$this->load->view('form_login');
			$this->load->view('templates_admin/footer');
		}else{
			$auth = $this->model_auth->cek_login();

			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Password atau Username</strong>Anda Salah!.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
			}else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch($auth->role_id){
					case 1 : redirect('admin/data_buku');
							break;
					case 2 : redirect('dashboard/praindex');
							break;
					default : break;
				}
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
