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
	public function keluhan()
	{
		
		$data['anggota'] = $this->model_buku->tampil_data_anggota()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('keluhan', $data);
		$this->load->view('templates/footer1');

	}
	public function tambah_aksi()
	{
		$nama				= $this->input->post('nama');
		$email				= $this->input->post('email');
		$keluhan			= $this->input->post('keluhan');

		$data= array(
			'nama'			=> $nama,
			'email'			=> $email,
			'keluhan'		=> $keluhan
		);
		$this->model_buku->tambah_keluhan($data, 'keluhan');
		redirect('dashboard/keluhan');

	}public function tampil_auth()
	{
		$data['pengarang'] 	= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 		= $this->model_buku->tampil_data()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('auth', $data);
		$this->load->view('templates/footer1');
	}
	public function agama()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_agama()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('agama', $data);
		$this->load->view('templates/footer1');

	}
	public function novel()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_novel()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('novel', $data);
		$this->load->view('templates/footer1');

	}
	public function search(){
		$keyword = $this->input->post('keyword');
		$data['buku']=$this->model_buku->get_keyword($keyword);
		$this->load->view('templates/header1');
      	$this->load->view('templates/sidebar1');
      	$this->load->view('pagecari', $data);
      	$this->load->view('templates/footer1');	
	}
	public function komik()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_komik()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('komik', $data);
		$this->load->view('templates/footer1');

	}
	public function edukasi()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_edukasi()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('edukasi', $data);
		$this->load->view('templates/footer1');

	}
	public function sport()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_sport()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('sport', $data);
		$this->load->view('templates/footer1');
	}
	public function ensiklopedia()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_ensiklopedia()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('ensiklopedia', $data);
		$this->load->view('templates/footer1');
	}
	public function dongeng()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_dongeng()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('dongeng', $data);
		$this->load->view('templates/footer1');
	}
	public function biographi()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_biographi()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('biographi', $data);
		$this->load->view('templates/footer1');
	}
	public function fotographi()
	{
		$data['total_buku_novel'] 			= $this->model_buku->hitung_buku_novel();
		$data['total_buku_agama'] 			= $this->model_buku->hitung_buku_agama();
		$data['total_buku_komik'] 			= $this->model_buku->hitung_buku_komik();
		$data['total_buku_edukasi'] 		= $this->model_buku->hitung_buku_edukasi();
		$data['total_buku_sport'] 			= $this->model_buku->hitung_buku_sport();
		$data['total_buku_ensiklopedia'] 	= $this->model_buku->hitung_buku_ensiklopedia();
		$data['total_buku_dongeng'] 		= $this->model_buku->hitung_buku_dongeng();
		$data['total_buku_biographi'] 		= $this->model_buku->hitung_buku_biographi();
		$data['total_buku_fotographi'] 		= $this->model_buku->hitung_buku_fotographi();
		$data['total_buku'] 				= $this->model_buku->hitung_buku();
		$data['total_anggota'] 				= $this->model_buku->hitung_anggota();
		$data['total_pengarang'] 			= $this->model_buku->hitung_pengarang();
		$data['total_request'] 				= $this->model_buku->hitung_request();
		$data['pengarang'] 					= $this->model_buku->tampil_data_pengarang()->result();
		$data['buku'] 						= $this->model_buku->tampil_data_all_buku_fotographi()->result();
		$this->load->view('templates/header1');
		$this->load->view('templates/sidebar1');
		$this->load->view('fotographi', $data);
		$this->load->view('templates/footer1');
	}
}