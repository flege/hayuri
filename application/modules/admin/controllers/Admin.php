<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {	
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['view'] = 'index';
		$data['admin'] = $this->db->query('SELECT * FROM admin')->result();
		$this->master($data);
	}
	function tambah(){
		$data['view'] = 'tambah';
		$this->master($data);
	}
	function ubah($id = 0){
		if($id > 0){
			$data['view'] = 'ubah';
			$data['admin'] = $this->db->query("SELECT * FROM admin WHERE id_admin = $id")->result()[0];
			$this->session->set_flashdata('id_admin', $id);
			$this->master($data);
		}else{
			redirect('admin');
		}
	}
	function add(){
		if($this->input->post('submit')){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$no_hp = $this->input->post('no_hp');
			$aktif = $this->input->post('status');
			
			$data_insert = array(
				'email' => $email,
				'password' => $password,
				'nama' => $nama,
				'no_hp' => $no_hp,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('admin',$data_insert);
			redirect('admin?sukses=1');
		}else{
			redirect('admin');
		}
	}
	function edit(){
		if($this->input->post('submit')){
			$id = $this->session->flashdata('id_admin');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$no_hp = $this->input->post('no_hp');
			$aktif = $this->input->post('status');
			
			$data_update = array(
				'email' => $email,
				'password' => $password,
				'nama' => $nama,
				'no_hp' => $no_hp,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->where('id_admin',$id);
			$this->db->update('admin',$data_update);
			redirect('admin?sukses=2');
		}else{
			redirect('admin');
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