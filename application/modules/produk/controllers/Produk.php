<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends MY_Controller {	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status')!="admin") {
			redirect('login');
		}
	}

	function index(){
		$data['view'] = 'index';
		$data['produk'] = $this->db->query("SELECT a.*, b.nama jenis, c.nama kategori, a.aktif as aktif FROM produk a JOIN jenisproduk b USING(id_jenisproduk) JOIN kategoriproduk c USING(id_kategoriproduk) ORDER BY a.created_at DESC")->result();
		$this->master($data);
	}
	function tambah(){
		$data['view'] = 'tambah';
		$data['jenis'] = $this->db->query("SELECT * FROM jenisproduk WHERE aktif = '1'")->result();
		$data['kategori'] = $this->db->query("SELECT * FROM kategoriproduk WHERE aktif = '1'")->result();
		$this->master($data);
	}
	function ubah($id = 0){
		if($id > 0){
			$data['view'] = 'ubah';
			$data['jenis'] = $this->db->query("SELECT * FROM jenisproduk WHERE aktif = '1'")->result();
			$data['kategori'] = $this->db->query("SELECT * FROM kategoriproduk WHERE aktif = '1'")->result();
			$data['produk'] = $this->db->query("SELECT * FROM produk WHERE id_produk = '$id'")->result()[0];
			if($data['produk']->diskon > 0){
				$data['cekdiskon'] = true;
			}else{
				$data['cekdiskon'] = false;
			}
			//$this->session->set_flashdata('id_produk', $id);
			$this->master($data);
		}else{
			redirect('produk');
		}
	}
	function add(){
		if($this->input->post('submit')){
			$jenis = $this->input->post('jenis');
			$kategori = $this->input->post('kategori');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$diskon = $this->input->post('diskon');
			$aktif = $this->input->post('status');
			if($aktif == 'on'){
				$aktif = '1';
			}else{
				$aktif = '0';
			}
			if(empty($diskon)){
				$diskon = 0;
			}
			//produk
			$data_insert = array(
				'id_jenisproduk' => $jenis,
				'id_kategoriproduk' => $kategori,
				'nama' => $nama,
				'keterangan' => $keterangan,
				'diskon' => $diskon,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('produk',$data_insert);
			$id_produk = $this->db->insert_id();
			//varian
			$sku = $this->input->post('sku');
			$berat = $this->input->post('berat');
			$stok = $this->input->post('stok');
			$harga_beli = $this->input->post('harga_beli');
			$size = $this->input->post('size');
			$color = $this->input->post('color');			
			//upload an image options
			$config = array();
			$config['upload_path'] = './varian/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = '5000';
			$config['overwrite']     = FALSE;
			$this->load->library('upload', $config);
			
			for($i=0; $i<count($sku); $i++){
				$data_insert = array(
					'id_produk' => $id_produk,
					'extensi' => '',
					'berat' => $berat[$i],
					'sku' => $sku[$i],
					'harga_beli' => $harga_beli[$i],
					'size' => $size[$i],
					'color' => $color[$i],
					'ipakses' => $_SERVER['REMOTE_ADDR']
				);
				$this->db->insert('varian',$data_insert);
				$id_varian = $this->db->insert_id();
			//--foto
				$files = $_FILES;
				$_FILES['images']['name']= $files['foto']['name'][$i];
				$_FILES['images']['type']= $files['foto']['type'][$i];
				$_FILES['images']['tmp_name']= $files['foto']['tmp_name'][$i];
				$_FILES['images']['error']= $files['foto']['error'][$i];
				$_FILES['images']['size']= $files['foto']['size'][$i];
				
				$config['file_name'] = $id_varian;
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('images')){
					//if success
					$img_data=$this->upload->data();
					$file = array('extensi' => $img_data['file_ext'] , );
					$this->db->where('id_varian',$id_varian);
					$this->db->update('varian',$file);
				}
			//--stok
				$data_insert = array(
					'id_varian' => $id_varian,
					'jumlah' => $stok[$i],
					'ipakses' => $_SERVER['REMOTE_ADDR']
				);
				$this->db->insert('stok',$data_insert);
			//--harga
				$level = $this->db->query("SELECT * FROM level WHERE aktif = '1'")->result();
				foreach($level as $l){
					$harga = $this->input->post($l->nama);
					$data_insert = array(
						'id_varian' => $id_varian,
						'id_level' => $l->id_level,
						'harga' => $harga[$i],
						'ipakses' => $_SERVER['REMOTE_ADDR']
					);
					$this->db->insert('harga',$data_insert);
				}
			}
			
			redirect("produk?sukses=1");
		}else{
			redirect('produk');
		}
	}
	function edit(){
		if($this->input->post('submit')){
			$jenis = $this->input->post('jenis');
			$kategori = $this->input->post('kategori');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$diskon = $this->input->post('diskon');
			$aktif = $this->input->post('status');
			$id_produk = $this->input->post('id_produk');
			if($aktif == 'on'){
				$aktif = '1';
			}else{
				$aktif = '0';
			}
			if(empty($diskon)){
				$diskon = 0;
			}
			//produk
			$data_update = array(
				'id_jenisproduk' => $jenis,
				'id_kategoriproduk' => $kategori,
				'nama' => $nama,
				'keterangan' => $keterangan,
				'diskon' => $diskon,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->where('id_produk',$id_produk);
			$this->db->update('produk',$data_update);
			
			//varian
			$sku = $this->input->post('sku');
			$berat = $this->input->post('berat');
			$harga_beli = $this->input->post('harga_beli');
			$size = $this->input->post('size');
			$color = $this->input->post('color');			
			$id_varian = $this->input->post('id_varian');
			//upload an image options
			$config = array();
			$config['upload_path'] = './varian/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = '5000';
			$config['overwrite']     = TRUE;
			$this->load->library('upload', $config);
			
			for($i=0; $i<count($sku); $i++){
				$data_update = array(
					'berat' => $berat[$i],
					'sku' => $sku[$i],
					'harga_beli' => $harga_beli[$i],
					'size' => $size[$i],
					'color' => $color[$i],
					'ipakses' => $_SERVER['REMOTE_ADDR']
				);
				$this->db->where('id_varian',$id_varian[$i]);
				$this->db->update('varian',$data_update);
			//--foto
				$files = $_FILES;
				$_FILES['images']['name']= $files['foto']['name'][$i];
				$_FILES['images']['type']= $files['foto']['type'][$i];
				$_FILES['images']['tmp_name']= $files['foto']['tmp_name'][$i];
				$_FILES['images']['error']= $files['foto']['error'][$i];
				$_FILES['images']['size']= $files['foto']['size'][$i];
				
				$config['file_name'] = $id_varian[$i];
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('images')){
					//if success
					$img_data=$this->upload->data();
					$file = array('extensi' => $img_data['file_ext'] , );
					$this->db->where('id_varian',$id_varian[$i]);
					$this->db->update('varian',$file);
					print_r($img_data);
				}
			//--harga
				$level = $this->db->query("SELECT * FROM harga WHERE id_varian = '".$id_varian[$i]."'")->result();
				if(empty($level)){
					$level = $this->db->query("SELECT * FROM level WHERE aktif = '1'")->result();
					foreach($level as $l){
						$harga = $this->input->post($l->nama);
						$data_insert = array(
							'id_varian' => $id_varian[$i],
							'id_level' => $l->id_level,
							'harga' => $harga[$i],
							'ipakses' => $_SERVER['REMOTE_ADDR']
						);
						$this->db->insert('harga',$data_insert);
					}
				}else{
					$level = $this->db->query("SELECT * FROM harga JOIN level USING(id_level) WHERE id_varian = '".$id_varian[$i]."'")->result();
					foreach($level as $l){
						$harga = $this->input->post($l->nama);
						$data_update = array(
							'harga' => $harga[$i],
							'ipakses' => $_SERVER['REMOTE_ADDR']
						);
						$this->db->where('id_varian',$id_varian[$i]);
						$this->db->where('id_level',$l->id_level);
						$this->db->update('harga',$data_update);
					}
				}
			}
			
			redirect("produk?sukses=2");
		}else{
			redirect('produk');
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