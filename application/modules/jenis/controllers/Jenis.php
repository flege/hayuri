<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends MY_Controller {	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status')!="admin") {
			redirect('login');
		}
	}

	function index(){
		$data['view'] = 'index';
		$data['jenis'] = $this->db->query('SELECT * FROM jenisproduk')->result();
		$this->master($data);
	}
	function tambah(){
		$data['view'] = 'tambah';
		$this->master($data);
	}
	function ubah($id = 0){
		if($id > 0){
			$data['view'] = 'ubah';
			$data['jenis'] = $this->db->query("SELECT * FROM jenisproduk WHERE id_jenisproduk = $id")->result()[0];
			$this->session->set_flashdata('id_jenisproduk', $id);
			$this->master($data);
		}else{
			redirect('jenis');
		}
	}
	function add(){
		if($this->input->post('submit')){
			$jenis = $this->input->post('jenis');
			$aktif = $this->input->post('status');
			
			$data_insert = array(
				'nama' => $jenis,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('jenisproduk',$data_insert);
			redirect('jenis?sukses=1');
		}else{
			redirect('jenis');
		}
	}
	function edit(){
		if($this->input->post('submit')){
			$id = $this->session->flashdata('id_jenisproduk');
			$jenis = $this->input->post('jenis');
			$aktif = $this->input->post('status');
			
			$data_update = array(
				'nama' => $jenis,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->where('id_jenisproduk',$id);
			$this->db->update('jenisproduk',$data_update);
			redirect('jenis?sukses=2');
		}else{
			redirect('jenis');
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