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

    public function home($data, $awal, $akhir)
	{
        $this->session->set_userdata('genre',$data);
        $var['page']="trend";
            $var['d']=$this->Fashion_m->show_all_by_gender($data, $awal, $akhir);
            $var['jumlah'] = $this->Fashion_m->jumlah_fashion($data);
            $var['e']=$data;

            $this->load->model('kain_m');
            $var['kain'] = $this->kain_m->show_all_kain();

            $this->load->model('toko_m');
            $var['toko'] = $this->toko_m->show_all_toko();

            $this->load->model('item_m');
            $var['item'] = $this->item_m->show_all_item();

            //echo $data;
            $this->load->view('layout/header_user', $var);
            $this->load->view('home',$var);
            $this->load->view('layout/footer_user');

	}

    public function category($jenis,$data)
	{
        $this->session->set_userdata('genre',$data);
        $var['page']="category";
            $var['d']=$this->Fashion_m->show_by_kategori($jenis, $data);
            $var['jumlah'] = $this->Fashion_m->jumlah_fashion($data);
            $var['e']=$data;
            $var['f']=$jenis;
            //echo $data;
            // $this->load->view('layout/header_user', $var);
            // $this->load->view('category',$var);
            // $this->load->view('layout/footer_user');
            $this->load->model('kain_m');
            $var['kain'] = $this->kain_m->show_all_kain();

            $this->load->model('toko_m');
            $var['toko'] = $this->toko_m->show_all_toko();

            $this->load->model('item_m');
            $var['item'] = $this->item_m->show_all_item();

            //echo $data;
            $this->load->view('layout/header_user', $var);
            if ($jenis == 'lebaran') {
                $this->load->view('lebaran',$var);
            }
            else if ($jenis == 'kemarau') {
                $this->load->view('kemarau',$var);
            }
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

        $this->load->model('item_m');
        $var['i']=$this->item_m->show_all_item_fashion($data);

        $this->load->model('kain_m');
        $var['k']=$this->kain_m->show_all_kain_fashion($data);

        $this->load->model('toko_m');
        $var['t']=$this->toko_m->show_all_toko_fashion($data);

        $this->load->view('layout/header_user', $var);
        $this->load->view('detail', $var);
        $this->load->view('layout/footer_user');
	}

    public function contact($data)
	{
        $this->session->set_userdata('genre',$data);
        $var['page']="contact";
        $this->load->view('layout/header_user', $var);
        $this->load->view('contact',$var);
        $this->load->view('layout/footer_user');
	}

    public function about($data)
	{
        $this->session->set_userdata('genre',$data);
        $var['page']="about";
        $this->load->view('layout/header_user', $var);
        $this->load->view('about',$var);
        $this->load->view('layout/footer_user');
	}
}
