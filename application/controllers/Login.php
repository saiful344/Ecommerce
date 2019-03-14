<?php

class Login extends CI_Controller{
	 function __construct(){
		parent::__construct();
		$this->load->model('M_Barang');
	}
	public function index(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('login');
        } else{
            $password=$this->input->post('password');
            $username=$this->input->post('username');
            $valid_user=$this->M_Barang->cek($password,$username);
            if($valid_user == FALSE){
                $this->session->set_flashdata('flash','Username and password not matched');
                redirect('admin');
            } else{
                $valid_user=$this->M_Barang->cek($password,$username); 
                if($valid_user == FALSE){
                    $this->session->set_flasdata('flash','Login False ');
                } else {
                    $this->session->set_userdata('username',$valid_user->username);
                    $this->session->set_userdata('level',$valid_user->level);
                    switch($valid_user->level){
                        case 'user';
                        $this->session->set_userdata('id',$valid_user->id);
                        $this->session->set_userdata('username',$valid_user->username);
                            redirect('User');
                        case 'admin';
                            $this->session->set_userdata('username',$valid_user->username);
                            $this->session->set_flashdata('flash','Login');
                            redirect('Admin');
                        default:
                        break;
                    }
                }
            }
        }
    }
	function sign_up(){
		$data['error']="";
		$this->form_validation->set_rules('nama','Username','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('sign_up',$data);
		} else {
			$config['upload_path']='./assets/images/user';
			$config['allowed_types']='jpg|png|jpeg|gif';
			$config['max_size']='20480';

			$this->load->library('upload',$config);
			if( !$this->upload->do_upload('foto'))	{
					$error=array('error' => $this->upload->display_errors());
					$this->load->view('sign_up',$error);
				} else {
					$gambar= $this->upload->data();
							
					$data=[
						"username"  =>$this->input->post('nama',TRUE),
                        "password"  =>$this->hash($this->input->post('password',TRUE)),
						"alamat"=> $this->input->post('city',true),
						"kecamatan"=> $this->input->post('kecamatan',true),
						"gender"=> $this->input->post('gender',true),
						"kode_pos"=> $this->input->post('kode',true),
						"level"=> $this->input->post('level',true),
						"gambar"=> $gambar['file_name'],
						
					];
					$this->M_Barang->create('user',$data);
					$this->session->set_flashdata('flash',' Di Tambah ');
					redirect('Login');
				}
			
			}
		}
		 public function hash($password){
        $hash= password_hash($password,PASSWORD_BCRYPT);
        return $hash;
		}	
    public function logout(){
        $this->session->sess_destroy();
        redirect("login");
    }
}