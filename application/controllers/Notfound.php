<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Notfound extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }
 
    public function index()
    {
    	$data['judul_halaman'] = "404 - Not Found";
        $this->layout->show('error', $data);
    }
}
