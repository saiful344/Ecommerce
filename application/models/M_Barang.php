<?php

class M_Barang extends CI_Model{
	public function ambil($table){
		return $this->db->get($table)->result();
	}
	public function news_top($table){
		 $this->db->from($table);
		 $this->db->limit(4);
		 return $this->db->get()->result();
	}
	public function ambil_p(){
		$this->db->from('orders');
		$this->db->select('orders.product_id,orders.invoice_id,orders.qty,barang.nama,barang.harga,invoice.status');
		// $this->db->select('orders.qtybarang.harga');
		$this->db->join('barang','orders.product_id = barang.id');
		$this->db->join('invoice','orders.invoice_id = invoice.id');
		$this->db->group_by('orders.id');
		$this->db->order_by('orders.id');
		return $this->db->get()->result();
	}
	public function hitung($table){
		return $this->db->count_all($table);
	} 
	public function ambil_id($table,$where){
		$this->db->where('level',$where);
		return $this->db->get($table)->result();
	}
	public function create($table,$data){
		$this->db->insert($table,$data);
	}
	public function tambah($table,$data){
		$this->db->insert_batch($table,$data);
	}
	public function show_by_id($table,$id){
		$this->db->where('id',$id);
		return $this->db->get($table)->row_array();
	}
	public function update($table,$data,$id){
		$this->db->where('id',$id);
		$this->db->update($table,$data);
	}
	public function delete($table,$id){
		$this->db->delete($table, array('id' => $id));
        $this->db->delete($table,['id' => $id]);
	}
	public function get_by_id($table,$id){
		$this->db->where('id',$id);
		return $this->db->get($table)->row();
	}
	public function cek($password,$username){
        $hasil = $this->db->where('username',$username)
                            ->limit(1)
                            ->get('user');
        if($hasil->num_rows() > 0){
           $isi= $hasil->row('password');
           if(password_verify($password,$isi)) {
           	return $hasil->row();
           } else {
            echo "Wrong password.Try again.";
        }
    }
}
	public function cari(){
	return	$this->db->get('kategori')->result();
	}
	public function data(){
		return $this->db->from('user');
	}
	public function coment($table,$limit,$offset){
		 return $this->db->get($table,$limit,$offset)->result();
	}
	function auto($keyword){
		$this->db->from('kategori');
		$this->db->like('nama',$keyword);
		return $this->db->get();
	}
	public function invoice(){
		$data =array(
			'date'     => date('y-m-d H:i:s'),
			'due_date' => date('y-m-d H:i:s',mktime(date('H',date('i'),date('s'),date('m'),date('d')+1,date('y')))),
			'status'   => 'unpaid',
			'user_id'  => $this->user()
		);
		$this->db->insert('invoice',$data);
		$invoice_id =$this->db->insert_id();
		foreach ($this->cart->contents() as $item) {
			$data_2=[
				"invoice_id" => $invoice_id,
				"product_id" => $item['id'],
				"qty"		 => $item['qty'],
				'user_id'  => $this->user()
			];
			$this->db->insert('orders',$data_2);
		}
		return TRUE;
	}
	function user(){
		$user = $this->db->select('id')
							->where('username',$this->session->userdata('username'))
							->limit(1)
							->get('user');
		if ($user->num_rows() > 0) {
			return $user->row()->id;
		} else {
			return 1;
		}

	}
	// function ambil(){
	// 	$this->db->get('i.*SUM(o.qty * b.harga) as  hasil')
	// }
}
