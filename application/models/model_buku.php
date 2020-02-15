<?php 

class Model_buku extends CI_Model{
	public function tampil_data(){
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
		return $this->db->get();
	}
    public function tampil_data_keluhan()
    {
        return $this->db->get('keluhan');
    }
    public function tampil_data_all_buku_agama()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Agama");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_novel()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Novel");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_sport()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Sport");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_ensiklopedia()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Ensiklopedia");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_dongeng()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Dongeng");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_biographi()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Biographi");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_fotographi()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Fotographi");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_komik()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Komik");
        return $this->db->get();       
    }
    public function tampil_data_all_buku_edukasi()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        $this->db->where("kategori", "Edukasi");
        return $this->db->get();       
    }
    public function tampil_data_all_buku()
    {
     $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('pengarang','pengarang.id_pengarang=buku.id_pengarang');
        return $this->db->get();       
    }
	public function tambah_buku($data,$table){
		$this->db->insert($table,$data);
	}
    public function tambah_pengarang($data,$table){
        $this->db->insert($table,$data);
    }
    public function tambah_keluhan($data,$table){
        $this->db->insert($table,$data);
    }
    public function tambah_request($data,$table){
        $this->db->insert($table,$data);
    }
	public function edit_buku($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function detail_data($id = null){
    	$query = $this->db->get_where('buku', array('id_buku'=>$id))->row();
    	return $query;
	}
	public function detail_data_anggota($id = null){
    	$query = $this->db->get_where('anggota', array('id_anggota'=>$id))->row();
    	return $query;
    }
    public function detail_data_pengarang($id = null){
    	$query = $this->db->get_where('pengarang', array('id_pengarang'=>$id))->row();
    	return $query;
    }
    public function tampil_data_pengarang(){
    	return $this->db->get('pengarang');
    }
    public function select_pengarang(){
		return $this->db->get('pengarang');
	}
	public function tampil_novel(){
		$this->db->where('kategori', 'novel');
        $this->db->get('buku');
        return $query->result();
	}
	public function tampil_data_anggota(){
    	return $this->db->get('anggota');
    }
    public function tampil_data_request(){
        return $this->db->get('request');
    }
    public function hitung_buku()
    {
    	$query = $this->db->get('buku');
    	if($query->num_rows()>0)
    	{
    		return $query->num_rows();
    	} else 
    	{
    		return 0;
    	}
    }
    public function hitung_keluhan()
    {
        $query = $this->db->get('keluhan');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_novel()
    {
        $h = $this->db->where('kategori', 'novel');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_agama()
    {
        $h = $this->db->where('kategori', 'agama');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_komik()
    {
        $h = $this->db->where('kategori', 'komik');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_edukasi()
    {
        $h = $this->db->where('kategori', 'edukasi');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_sport()
    {
        $h = $this->db->where('kategori', 'sport');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_ensiklopedia()
    {
        $h = $this->db->where('kategori', 'ensiklopedia');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_dongeng()
    {
        $h = $this->db->where('kategori', 'dongeng');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_biographi()
    {
        $h = $this->db->where('kategori', 'biographi');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_buku_fotographi()
    {
        $h = $this->db->where('kategori', 'fotographi');
        $query = $this->db->get('buku');
        if($query->num_rows()>0 and $h)
        {
            return $query->num_rows();
        } else 
        {
            return 0;
        }
    }
    public function hitung_pengarang()
    {
    	$query = $this->db->get('pengarang');
    	if($query->num_rows()>0)
    	{
    		return $query->num_rows();
    	} else 
    	{
    		return 0;
    	}
    }
    public function hitung_anggota()
    {
    	$query = $this->db->get('anggota');
    	if($query->num_rows()>0)
    	{
    		return $query->num_rows();
    	} else 
    	{
    		return 0;
    	}
    }
    public function hitung_request()
    {
    	$query = $this->db->get('request');
    	if($query->num_rows()>0)
    	{
    		return $query->num_rows();
    	} else 
    	{
    		return 0;
    	}
    }
    public function get_cari($cari){
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->like('judul_buku', $cari);
        $this->db->or_like('sinopsis', $cari);
        $this->db->or_like('kategori', $cari);
        return $this->db->get()->result();
    }
}