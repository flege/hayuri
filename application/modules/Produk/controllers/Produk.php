<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {	
	function __construct(){
		parent::__construct();
	}

	function kategori(){
		$this->load->view('home');
	}
	function detail($id = 0){
		$this->load->view('detail');
	}
}