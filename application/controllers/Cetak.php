<?php

class Cetak extends CI_Controller{
 	function __construct(){
 		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Barang');
 	}
 	function index(){
 		$data['content']=$this->M_Barang->ambil('invoice');
 		$this->load->view('cetak',$data);
 	}
}