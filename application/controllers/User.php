<?php

class User extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Barang');
	}
	function index(){
		$data['content']=$this->M_Barang->ambil('barang');
		$this->template->user_2('user_2/index',$data);
	}
	public function add_cart()
    {
    	$id=$this->input->post('id');
    	$qty=$this->input->post('qty');
        $product=$this->M_Barang->show_by_id('barang',$id);
        $data=[
                'id'      => $product['id'],
                'image'	  => $product['foto'],
                'qty'     => $qty,
                'price'   => $product['harga'],
                'berat'    => $product['berat'],
                'total'   =>$product['berat'] * $qty,
                'name'    => $product['nama']
        ];
        $this->cart->insert($data);
        redirect('User');
    }
    public function cart()
    {
        //print_r($this->cart->contents());
        $this->template->user_2('user_2/cart');
    }
    public function cart_trash()
    {
        $this->cart->destroy();
        redirect('User/cart');
    }
    public function detail(){
    	$id=$this->uri->segment(3);
    	$data['content']=$this->M_Barang->show_by_id('barang',$id);
        $this->template->user_2('user_2/detail',$data);
    }
    public function edit_cart($rowid,$qty,$id){
        $product=$this->M_Barang->show_by_id('barang',$id);
        // print_r($product);
        $data=[
            'id' =>$id,
            'qty'=>$qty+1,
            'total'=>($qty+1) * $product['berat'], 
            'rowid'=>$rowid
        ];
        $this->cart->update($data);
        redirect('User/cart');
    }
  public function kurang_cart($rowid,$qty,$id){
        $product=$this->M_Barang->show_by_id('barang',$id);
        // print_r($product);
        $data=[
            'id' =>$id,
            'qty'=>$qty-1,
            'total'=>($qty-1) * $product['berat'], 
            'rowid'=>$rowid
        ];
        $this->cart->update($data);
        redirect('User/cart');
    }
    function delete_cart($rowid){
        $this->cart->remove($rowid);
        redirect('User/cart');
    }
    function payment(){
         $this->template->user_2('user_2/payment');
    }
    function _api_ongkir_post($origin,$qty,$des,$cour)
    {
        $curl =curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING =>"",
            CURLOPT_MAXREDIRS =>10,
            CURLOPT_TIMEOUT =>30,
            CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$des."&weight=".$qty."&courier=".$cour,
              CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                
                "key: 9c2e7c74681ed327ec403a42ec811a8d"
                  ),
                ));
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                if ($err) {
                  return $err;
                } else {
                  return $response;
        }

    }
    function _api_ongkir($data)
   {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          //CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
          //CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
          CURLOPT_URL => "http://api.rajaongkir.com/starter/".$data,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",         
          CURLOPT_HTTPHEADER => array(
           
            "key:9c2e7c74681ed327ec403a42ec811a8d"
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          return  $err;
        } else {
          return $response;
        }
}
    public function provinsi()
    {
        $provinsi = $this->_api_ongkir('province');
        $data = json_decode($provinsi, true);
        echo json_encode($data['rajaongkir']['results']);
    }
    public function lokasi()
    {
     $this->template->user('user/payment');  
    }
    public function kota($provinsi="")
    {
        if(!empty($provinsi))
        {
            if(is_numeric($provinsi))
            {
                $kota = $this->_api_ongkir('city?province='.$provinsi); 
                $data = json_decode($kota, true);
                echo json_encode($data['rajaongkir']['results']);                            
            }
            else
            {
                show_404();
            }
        }
       else
       {
        show_404();
       }
    }
    public function tarif($origin,$des,$qty,$cour)
    {
        $berat = $qty*1000;
        $tarif = $this->_api_ongkir_post($origin,$des,$berat,$cour);        
        $data = json_decode($tarif, true);
        echo json_encode($data['rajaongkir']['results']);       
    }
    public function bayar(){
        $data=[
            "city" =>$this->input->post("city",TRUE),
            "state" =>$this->input->post("state",TRUE),
            "poszip" =>$this->input->post("poszip",TRUE),
            "id_user" =>$this->input->post("id_user",TRUE),
            "ongkir" =>$this->input->post("ongkir",TRUE),
            "paket" =>$this->input->post("paket",TRUE),
            "kurir" =>$this->input->post("kurir",TRUE),

        ];
        $this->M_Barang->create('payment',$data);
        $bayar = $this->M_Barang->invoice();
        if ($bayar) {
             $this->cart->destroy();
            redirect('User/cart');
        } else {
            echo "Bang nggak punya uang ya nabung dong";
        }
    }
}
