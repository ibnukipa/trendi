<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->model('Fashion_m');
    }

    public function index()
    {
        $this->load->view("index");
    }
    
    public function home($data)
	{
        $this->session->set_userdata('genre',$data);
       
            $var['d']=$this->Fashion_m->show_all($data);
            //echo $data;
            $this->load->view('layout/header_user');
            $this->load->view('home',$var);
            $this->load->view('layout/footer_user');
       
	}
    
    public function season($data)
	{
        $this->session->set_userdata('genre',$data);
        $var['d']=$this->Fashion_m->show_all($data);
        $this->load->view('layout/header_user');
        $this->load->view('layout/sidebar');
        $this->load->view('season',$var);
        $this->load->view('layout/footer_user');
	}
    
    public function detail($data,$gender)
	{
        $this->session->set_userdata('genre',$gender);
        $var['d']=$this->Fashion_m->show_by_id($data);
        $this->load->view('layout/header_user');
        $this->load->view('detail', $var);
        $this->load->view('layout/footer_user');
	}
}
    
    

