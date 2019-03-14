<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkout extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('Template');
		$this->load->model('M_Barang');
	}
	function index(){
		$data['content']=$this->M_Barang->ambil('invoice');
		$this->template->company('isi/checkout',$data);
	}
	function sell(){
		$data['content']=$this->M_Barang->ambil_p();
		$this->template->company('isi/sell',$data);
	}
	function payment(){
		  $from_email = "saifulmuhammad414@gmail.com"; 
       	  $to_email = $this->input->post('email'); 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'xxx',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

         $this->load->library('email', $config);
         $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Thing_Baby~'); 
         $this->email->to($to_email);
         $this->email->subject('Pemberitahuan pembayaran'); 
         $this->email->message('Pembayaran yang lakukan sukses,Terima kasih suah berblanja di Thing~ semoga anda menikmati pelayanan kami '); 

         //Send mail 
         if($this->email->send()){
                $this->session->set_flashdata("notif","Email berhasil terkirim."); 
         }else {
                $this->session->set_flashdata("notif","Email gagal dikirim."); 
                print_r("jadi");
         } 
	}
    function kirim() {
        $this->load->library('email');
         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' =>'thingshop121@gmail.com',
                'smtp_pass' => 'thignshop12345',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
        );

        $this->email->initialize($config);
        $this->email->from('thingshop121@gmail.com');
        $this->email->to('saifulmuhammad414@gmail.com');
        // $this->email->cc('another@another-example.com');
        // $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

       if ($this->email->send()) {
           print_r("jadi");
        } else {
            print_r("gagal");
        }
    }
}