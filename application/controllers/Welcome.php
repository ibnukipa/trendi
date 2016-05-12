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
        $var['page']="trend";
            $var['d']=$this->Fashion_m->show_all($data);
            $var['e']=$data;
            //echo $data;
            $this->load->view('layout/header_user', $var);
            $this->load->view('home',$var);
            $this->load->view('layout/footer_user');
       
	}
    
    public function season($data)
	{
        $this->session->set_userdata('genre',$data);
        $var['page']="session";
        $var['d']=$this->Fashion_m->show_all($data);
        $this->load->view('layout/header_user', $var);
        $this->load->view('layout/sidebar');
        $this->load->view('season',$var);
        $this->load->view('layout/footer_user');
	}
    
    public function event($data)
	{
        $this->session->set_userdata('genre',$data);
        $var['page']="event";
        $var['d']=$this->Fashion_m->show_all($data);
        $this->load->view('layout/header_user', $var);
        $this->load->view('layout/sidebar');
        $this->load->view('event',$var);
        $this->load->view('layout/footer_user');
	}
    
    public function detail($data)
	{
        $var['page']="";
        $var['d']=$this->Fashion_m->show_by_id($data);
        $this->load->view('layout/header_user', $var);
        $this->load->view('detail', $var);
        $this->load->view('layout/footer_user');
	}
}
    
    

