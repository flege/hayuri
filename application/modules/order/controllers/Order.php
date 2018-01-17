<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status')!="admin") {
			redirect('login');
		}
	}

	function index(){
		$data['view'] = 'index';
		$data['order'] = $this->db->query('SELECT * FROM orders')->result();
		$this->master($data);
	}
	function diproses(){
		$data['view'] = 'diproses';
		$data['order'] = $this->db->query('SELECT * FROM orders')->result();
		$this->master($data);
	}
	function selesai(){
		$data['view'] = 'selesai';
		$data['order'] = $this->db->query('SELECT * FROM orders')->result();
		$this->master($data);
	}
	function batal(){
		$data['view'] = 'batal';
		$data['order'] = $this->db->query('SELECT * FROM orders')->result();
		$this->master($data);
	}
	private function master($data){
		$this->load->view('master/header');
		$this->load->view('master/topbar');
		$this->load->view('master/sidebar', $data);
		$this->load->view($data['view'], $data);
		$this->load->view('master/footer');
	}
}