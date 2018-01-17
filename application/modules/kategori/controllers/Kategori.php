<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status')!="admin") {
			redirect('login');
		}
	}

	function index(){
		$data['view'] = 'index';
		$data['kategori'] = $this->db->query('SELECT * FROM kategoriproduk')->result();
		$this->master($data);
	}
	function tambah(){
		$data['view'] = 'tambah';
		$this->master($data);
	}
	function ubah($id = 0){
		if($id > 0){
			$data['view'] = 'ubah';
			$data['kategori'] = $this->db->query("SELECT * FROM kategoriproduk WHERE id_kategoriproduk = $id")->result()[0];
			$this->session->set_flashdata('id_kategoriproduk', $id);
			$this->master($data);
		}else{
			redirect('kategori');
		}
	}
	function add(){
		if($this->input->post('submit')){
			$kategori = $this->input->post('kategori');
			$aktif = $this->input->post('status');
			
			$data_insert = array(
				'nama' => $kategori,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('kategoriproduk',$data_insert);
			redirect('kategori?sukses=1');
		}else{
			redirect('kategori');
		}
	}
	function edit(){
		if($this->input->post('submit')){
			$id = $this->session->flashdata('id_kategoriproduk');
			$kategori = $this->input->post('kategori');
			$aktif = $this->input->post('status');
			
			$data_update = array(
				'nama' => $kategori,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->where('id_kategoriproduk',$id);
			$this->db->update('kategoriproduk',$data_update);
			redirect('kategori?sukses=2');
		}else{
			redirect('kategori');
		}
	}
	private function master($data){
		$this->load->view('master/header');
		$this->load->view('master/topbar');
		$this->load->view('master/sidebar', $data);
		$this->load->view($data['view'], $data);
		$this->load->view('master/footer');
	}
}