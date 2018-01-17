<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Varian extends MY_Controller {	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('status')!="admin") {
			redirect('login');
		}
	}
	function index(){
		redirect('produk');
	}
	/* function tambah($id){
		if($id > 0){
			$data['id'] = $id;
			$data['view'] = 'varian/tambah';
			$this->session->set_flashdata('id_produk', $id);
			$this->master($data);
		}else{
			redirect('produk');
		}
	}
	function ubah($id = 0){
		if($id > 0){
			$data['view'] = 'varian/ubah';
			$data['varian'] = $this->db->query("SELECT varian.*, sum(stok.jumlah) stok FROM varian JOIN stok USING(id_varian) WHERE id_varian = '$id'")->result()[0];
			$data['id'] = $data['varian']->id_produk;
			$this->session->set_flashdata('id_produk', $id);
			$this->master($data);
		}else{
			redirect('produk');
		}
	}
	function add(){
		if($this->input->post('submit')){
			$sku = $this->input->post('sku');
			$harga_beli = $this->input->post('harga_beli');
			$berat = $this->input->post('berat');
			$size = $this->input->post('size');
			$color = $this->input->post('color');
			$jumlah = $this->input->post('stok');
			$id_produk = $this->input->post('id_produk');
			
			//add to varian
			$data_insert = array(
				'sku' => $sku,
				'harga_beli' => $harga_beli,
				'berat' => $berat,
				'id_produk' => $id_produk,
				'color' => $color,
				'size' => $size,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('varian',$data_insert);
			$id = $this->db->insert_id();
			
			//add to stok
			$data_insert = array(
				'id_varian' => $id,
				'jumlah' => $jumlah,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('stok',$data_insert);
			
			//add to harga
			$level = $this->db->query("SELECT * FROM level WHERE aktif = '1'")->result();
			foreach($level as $l){
				$harga = $this->input->post($l->nama);
				$data_insert = array(
					'id_varian' => $id,
					'id_level' => $l->id_level,
					'harga' => $harga,
					'ipakses' => $_SERVER['REMOTE_ADDR']
				);
				$this->db->insert('harga',$data_insert);
			};
			
			$path = realpath('./varian');
			$config['upload_path']    = $path;            
			$config['allowed_types']  = 'jpg|jpeg|png';
			$config['max_size']       = '50000';
			$config['file_name']      = $id;
			$config['overwrite'] 	  = TRUE;
			$this->load->library('upload', $config);
			if($this->upload->do_upload('foto')){
				$img_data=$this->upload->data();
				$file = array('extensi' => $img_data['file_ext'] , );
				$this->db->where('id_varian',$id);
				$this->db->update('varian',$file);
			}
			redirect("produk/ubah/$id_produk");
		}else{
			redirect('produk');
		}
	} */
	function hapus($id = 0){
		if($id > 0){
			$data_update = array(
				'aktif' => '0',
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->where('id_varian',$id);
			$this->db->update('varian',$data_update);
			$id_produk = $this->db->query("SELECT id_produk FROM varian WHERE id_varian = '$id'")->result()[0]->id_produk;
			redirect("produk/ubah/$id_produk?sukses=3");
		}else{
			echo 'a';
		}
	}
	function add_stok(){
		if($this->input->post('submit')){
			$jumlah = $this->input->post('jumlah');
			$keterangan = $this->input->post('keterangan');
			$id_varian = $this->input->post('id_varian');
			
			//add to varian
			$data_insert = array(
				'id_varian' => $id_varian,
				'jumlah' => $jumlah,
				'keterangan' => $keterangan,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('stok',$data_insert);
			$id_produk = $this->db->query("SELECT id_produk FROM varian WHERE id_varian = $id_varian")->result()[0]->id_produk;
			
			redirect("produk/ubah/$id_produk?sukses=4");
		}else{
			redirect('produk');
		}
	}
	function sync_stok(){
		if($this->input->post('submit')){
			$jumlah = $this->input->post('jumlah');
			$id_varian = $this->input->post('id_varian');
			$stok = $this->db->query("SELECT SUM(jumlah) stok FROM stok WHERE id_varian = $id_varian")->result()[0]->stok;
			$jumlah = $jumlah - $stok;
			
			//add to varian
			$data_insert = array(
				'id_varian' => $id_varian,
				'jumlah' => $jumlah,
				'keterangan' => 'sync stok',
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->insert('stok',$data_insert);
			$id_produk = $this->db->query("SELECT id_produk FROM varian WHERE id_varian = $id_varian")->result()[0]->id_produk;
			redirect("produk/ubah/$id_produk?sukses=4");
		}else{
			redirect('produk');
		}
	}
	/* function edit(){
		if($this->input->post('submit')){
			$sku = $this->input->post('sku');
			$berat = $this->input->post('berat');
			$aktif = $this->input->post('status');
			$harga = $this->input->post('harga');
			$id = $this->session->flashdata('id_varian');
			
			//add to varian
			$data_update = array(
				'sku' => $sku,
				'berat' => $berat,
				'aktif' => $aktif,
				'ipakses' => $_SERVER['REMOTE_ADDR']
			);
			$this->db->where('id_varian',$id);
			$this->db->update('varian',$data_update);
			
			//add to harga
			$level = $this->db->query("SELECT * FROM harga WHERE id_varian = '$id'")->result();
			if(empty($level)){
				$level = $level = $this->db->query("SELECT id_level FROM level WHERE aktif = '1'")->result();
				$i = 0;
				foreach($level as $l){
					$data_insert = array(
						'id_varian' => $id,
						'id_level' => $l->id_level,
						'harga' => $harga[$i],
						'ipakses' => $_SERVER['REMOTE_ADDR']
					);
					$this->db->insert('harga',$data_insert);
					$i++;
				}
			}else{
				$i = 0;
				foreach($level as $l){
					$data_update = array(
						'harga' => $harga[$i],
						'ipakses' => $_SERVER['REMOTE_ADDR']
					);
					$this->db->where('id_varian',$id);
					$this->db->where('id_level',$l->id_level);
					$this->db->update('harga',$data_update);
					$i++;
				}
			}
			
			if(isset($_FILES['foto']) && !empty($_FILES['foto']['name'])){
				$foto = $this->db->query("SELECT foto FROM varian WHERE id_varian = '$id'")->result()[0]->foto;
				@unlink("./varian/".$id.$foto);
				$path = realpath('./varian');
				$config['upload_path']    = $path;            
				$config['allowed_types']  = 'jpg|jpeg|png';
				$config['max_size']       = '50000';
				$config['file_name']      = $id;
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				if($this->upload->do_upload('foto')){
					$img_data=$this->upload->data();
					$file = array('foto' => $img_data['file_ext'] , );
				}else{
					echo 'upload gagal '.$this->upload->display_errors();;
				}
				$this->db->where('id_varian',$id);
				$this->db->update('varian',$file);
			}
			redirect("produk/ubah/1?sukses=3");
		}else{
			redirect('produk');
		}
	} */
	private function master($data){
		$this->load->view('master/header');
		$this->load->view('master/topbar');
		$this->load->view('master/sidebar', $data);
		$this->load->view($data['view'], $data);
		$this->load->view('master/footer');
	}
}