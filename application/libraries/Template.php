<?php
require_once dirname(__file__).'/pdf/tcpdf.php';
class Template {
	protected $_ci;

	function __construct()
	{
		$this->_ci =&get_instance();
		}

	function company($template,$data=null)
	{
		$data['content']	=	$this->_ci->load->view($template,$data, TRUE);
		$data['footer']		=	$this->_ci->load->view('header/footer',$data, TRUE);
		$data['nav']		=	$this->_ci->load->view('header/nav',$data, TRUE);

		$this->_ci->load->view('header/header',$data);

	}
	function user($template,$data=null)
	{
		$data['content']    =   $this->_ci->load->view($template,$data,TRUE);
		$data['footer']     =   $this->_ci->load->view('user/header/footer',$data,TRUE);
		$data['nav']        =   $this->_ci->load->view('user/header/nav',$data,TRUE);

		$this->_ci->load->view('user/header/header',$data);   
	}
		function user_2($template,$data=null)
	{
		$data['content']    =   $this->_ci->load->view($template,$data,TRUE);
		$data['footer']     =   $this->_ci->load->view('user_2/header/footer',$data,TRUE);
		$data['nav']        =   $this->_ci->load->view('user_2/header/nav',$data,TRUE);

		$this->_ci->load->view('user_2/header/index',$data);   
	}

}