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
        if($data == 'female')
        {
            $var['d']=$this->Fashion_m->show_all();
            $this->load->view('layout/header_user');
            $this->load->view('home',$var);
            $this->load->view('layout/footer_user');
        }
        else
            echo "haha";
	}
    
    public function season()
	{
        $this->load->view('layout/header_user');
        $this->load->view('layout/sidebar');
        $this->load->view('season');
        $this->load->view('layout/footer_user');
	}
    
    public function detail()
	{
        $this->load->view('layout/header_user');
        $this->load->view('detail');
        $this->load->view('layout/footer_user');
	}
}
    
    

