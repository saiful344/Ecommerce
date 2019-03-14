<?php

class Admin extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Barang');
	}
	public function index(){
		$data['judul']='Jg||Home';
		$this->template->company('isi/index',$data);
	}
	function barang(){
		$data['content']=$this->M_Barang->ambil('barang');
		$this->template->company('isi/barang/index',$data);
	}
	function tambah(){
			{
		$data['error']="";
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jenis','Jenis','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('harga','Harga','required|numeric');
		$this->form_validation->set_rules('berat','Berat','required|numeric');
		if($this->form_validation->run() == FALSE ){
		$this->template->company('isi/barang/add',$data);
		} else{
			$config['upload_path']='./assets/images';
			$config['allowed_types']='jpg|png|jpeg|gif';
			$config['max_size']='20480';

			$this->load->library('upload',$config);
			if( !$this->upload->do_upload('foto'))	{
				$error=array('error' => $this->upload->display_errors());
					$this->template->company('isi/barang/add',$error);
				} else {
					$gambar= $this->upload->data();
							
					$data=[
						"nama" => $this->input->post('nama',true),
						"jenis"=> $this->input->post('jenis',true),
						"deskripsi"=> $this->input->post('deskripsi',true),
						"harga"=> $this->input->post('harga',true),
						"stok"=> $this->input->post('jumlah',true),
						"berat"=> $this->input->post('berat',true),
						"foto"=> $gambar['file_name'],
						"kondisi"=>$this->input->post('kondisi',true),
						"tgl"=>$this->input->post('date',true)
					];
					$this->M_Barang->create('barang',$data);
					$this->session->set_flashdata('flash',' Di Tambah ');
					redirect('Admin/barang');
				}
			
			}
		}
	}
	function hapus($id){
		$this->M_Barang->delete('barang',$id);
		redirect("Admin/barang");
	}
}