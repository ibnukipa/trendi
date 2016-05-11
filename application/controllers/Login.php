<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

    private function set_meta_data() {
        $data['judul_halaman'] = "Trendi - Login";

        $data['warna_utama'] = "#3e464c";
        $data['warna_kedua'] = "#8BC34A";
        $data['warna_ketiga'] = "#7EB83D";
        $data['warna_keempat'] = "#689F38";

        $data['header'] = false;

        return $data;
    }
 
    public function index()
    {
        if($this->is_login()) {
            redirect("dashboard");
        }
        $data = $this->set_meta_data();
        $this->layout->show('login', $data);
    }

    public function logout() {
        $data = new stdClass();
        if($this->is_login()) {
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
        }
        redirect('login');
    }


    //Ajax Only
    public function cek_username(){
        if(! $this->input->is_ajax_request()) {
            redirect('notfound');
        }

        $username = $this->input->post('username');

        if($this->valid_username($username)) {
            echo json_encode(true);
        } else {
            echo json_encode(false);
        }
    }

    public function login() {
    	//untuk menolak akses fungsi login() selain dari ajax
    	//kalo mau buat fungsi untuk ajax gunakan kondisi ini
    	if(! $this->input->is_ajax_request()) {
		    redirect('notfound');
		}

    	$username		= $this->input->post('username');
    	$password 	    = $this->input->post('password');

    	if($this->berhak($username, $password)) {
    		$this->set_session($username);
    		echo json_encode(true);
    	} else {
    		echo json_encode(false);
    	}
    }

    private function set_session($username) {
        $_SESSION['logged_in']      = (bool)true;
        $_SESSION['username']       = $username;
    }

    private function berhak($username, $password) {
        $this->load->model('user_tl');
        return $this->user_tl->verifi_login($username, $password);
    }

    private function valid_username($username) {
        $this->load->model('user_tl');
        return $this->user_tl->read($username);
    }
}
