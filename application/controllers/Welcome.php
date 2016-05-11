<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("index");
    }
    
    public function home()
	{
        $this->load->view('layout/header_user');
        $this->load->view('home');
        $this->load->view('layout/footer_user');
	}
}
