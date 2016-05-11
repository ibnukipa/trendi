<?php
Class User_tl extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
	/*
	--untuk hasilkan query
	public function nama_fungsi($parameter1, $parameter2)
    {
        $query_ = $this->db->query("query statement");
        $data = $query->result();
        return $data;
    }
	*/
    
    public function verifi_login($username, $password)
    {
        $query_ = $this->db->query("call sp_login('$username', '$password')");
        $data = $query->result();
        return $data;
    }
}
    
?>