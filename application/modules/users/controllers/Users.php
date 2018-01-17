<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status')!="admin") {
			redirect('login');
		}
	}

	function index(){
		$data['view'] = 'index';
		$data['level'] = null;
		$data['users'] = $this->db->query('SELECT users.*, level.nama level FROM users JOIN level USING(id_level)')->result();
		$this->master($data);
	}
	function level($id){
		if($id > 0 && $id <= 6){
			$data['view'] = 'level';
			$data['users'] = $this->db->query("SELECT * FROM users WHERE id_level = $id")->result();
			$data['level'] = $this->db->query("SELECT nama FROM level WHERE id_level = $id")->result()[0]->nama;
			$this->master($data);
		}else{
			redirect('users');
		}
	}
	function tambah(){
		$data['view'] = 'tambah';
		$data['level'] = null;
		$data['list_level'] = $this->db->query("SELECT id_level, nama FROM level WHERE aktif = '1'")->result();
		$this->master($data);
	}
	function ubah($id = 0){
		if($id > 0){
			$data['view'] = 'ubah';
			$data['level'] = null;
			$data['users'] = $this->db->query("SELECT * FROM users WHERE id_users = $id")->result()[0];
			$data['list_level'] = $this->db->query("SELECT id_level, nama FROM level WHERE aktif = '1'")->result();
			$this->session->set_flashdata('id_users', $id);
			$this->master($data);
		}else{
			redirect('jenis');
		}
	}
	function add(){
		if($this->input->post('submit')){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$level = $this->input->post('level');
			$aktif = $this->input->post('status');
			
			$data_insert = array(
				'email' => $email,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'no_hp' => $no_hp,
				'id_level' => $level,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('users',$data_insert);
			redirect('users?sukses=1');
		}else{
			redirect('users');
		}
	}
	function edit(){
		if($this->input->post('submit')){
			$id = $this->session->flashdata('id_users');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$level = $this->input->post('level');
			$aktif = $this->input->post('status');
			
			$data_update = array(
				'email' => $email,
				'password' => $password,
				'nama' => $nama,
				'alamat' => $alamat,
				'no_hp' => $no_hp,
				'id_level' => $level,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->where('id_users',$id);
			$this->db->update('users',$data_update);
			redirect('users?sukses=2');
		}else{
			redirect('users');
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