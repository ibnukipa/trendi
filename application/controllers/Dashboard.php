<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dashboard extends CI_Controller {

    public $prefix_user;

	public function __construct() {
        parent::__construct();
        if(!$this->is_login()){
            redirect("login");
        }
        // if($_SESSION['hak_akses'] === "A") {
        //     $this->prefix_user = "_admin";
        // } else if ($_SESSION['hak_akses'] === "D") {
        //     $this->prefix_user = "_dosen";
        // } else {
        //     $this->prefix_user = "_mahasiswa";
        // }
    }

    public function set_meta_data() {
    	$data['judul_halaman'] = "Trendi";
        $data['controller'] = $this;
    	$data['warna_utama'] = "#3e464c";
        $data['warna_kedua'] = "#8BC34A";
        $data['warna_ketiga'] = "#7EB83D";
        $data['warna_keempat'] = "#689F38";
        $data['path_warna']     = "#3e464c";

    	$data['header'] = true;

    	return $data;
    }
 
    public function index()
    {
    	$data = $this->set_meta_data();

    	$data['path_'] 			= array( 0 => "Dashboard" );
        $data['path_icon']      = array( 0 => "dashboard" );
        $data['path_link']      = array( 0 => base_url() . "dashboard" );
        $this->layout->show('dashboard', $data);
    }


    public function new_post_top() {
        if(! $this->input->is_ajax_request()) {
            redirect('notfound');
        }
        $data = $this->set_meta_data();

        $data['path_']          = array( 0 => "Dashboard", 1 => "New Post" );
        $data['path_icon']      = array( 0 => "dashboard", 1 => "");
        $data['path_link']      = array( 0 => base_url() . "dashboard", 1 => "#" );
        $this->load->view("status_bar_top", $data);
    }

    public function new_post() {
        if(! $this->input->is_ajax_request()) {
            redirect('notfound');
        }

        // $this->load->model('user_tl');

        $data = $this->set_meta_data();
        // $data['mahasiswa_nama'] = $this->user_tl->get_nama_lengkap($_SESSION['username']);
        $data['mahasiswa_nrp']  = $_SESSION['username'];
        $data['nama_formulir']  = "Post Baru";
        $data['id_form']        = "new_post";
        $this->load->view("form_new_post", $data);
    }

    public function submit_proposal() {
        if(! $this->input->is_ajax_request()) {
            redirect('notfound');
        }
        
        $nilai_toefl       = $this->input->post('tofl');
        $judul_proposal    = $this->input->post('judul_ta');


    }

    public function mahasiswa_detail_proposal_top() {
        if(! $this->input->is_ajax_request()) {
            redirect('notfound');
        }
        $data = $this->set_meta_data();

        $data['path_']          = array( 0 => "Dashboard", 1 => "Detail" );
        $data['path_icon']      = array( 0 => "dashboard", 1 => "");
        $data['path_link']      = array( 0 => base_url() . "dashboard", 1 => "#" );
        $this->load->view("status_bar_top", $data);
    }

    public function mahasiswa_detail_proposal_content() {
        if(! $this->input->is_ajax_request()) {
            redirect('notfound');
        }
        $data = $this->set_meta_data();

        $this->load->view("detail_proposal", $data);
    }
    
    public function new_fashion()
    {
        $this->load->view('form_post');
    }
    
    public function insert_fashion()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');
        $foto = "upload/1.jpg";
        $id_admin = 1;
        $katgori = $this->input->post('kategori');
        $genre = $this->input->post('genre');
        
        $this->load->model('fashion_m');
        $this->fashion_m->insert($nama, $deskripsi, $foto, $id_admin, $kategori, $genre);
        echo "berhasil";
    }
}
