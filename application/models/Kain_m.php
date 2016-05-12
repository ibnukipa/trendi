<?php
Class Kain_m extends CI_Model{
    
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
    
    //insert new kain
    public function insert($id_fashion, $nama, $deskripsi, $foto)
    {
        $query_ = $this->db->query("call sp_add_kain('$id_fashion', '$nama', '$deskripsi', '$foto')");
    }
    
    //update kain
    public function update($id_kain, $nama, $deskripsi, $foto)
    {
        $query_ = $this->db->query("update kain set nama = '$nama', deskripsi = '$deskripsi', foto = '$foto',  where id = '$id_kain'");
    }
    
    //delete kain from fashion
    public function delete($id_fashion, $id_kain)
    {
        $query_ = $this->db->query("delete from fashion_kain where id_fashion = '$id_fashion' and id_kain = '$id_kain'");
        $query_ = $this->db->query("delete from kain where id = '$id_kain'");
    }
    
    //show list kain per fashion
    public function show_all_kain_fashion($id_fashion)
    {
        $query_ = $this->db->query("SELECT * FROM kain, fashion_kain WHERE id_kain = id AND id_fashion = '$id_fashion';");
        $data = $query_->result();
        return $data;
    }
    
    //show detail kain
    public function show_kain_by_id($id_kain)
    {
        $query_ = $this->db->query("select * from kain where id = '$id_kain'");
        $data = $query_->result();
        return $data;
    }
}
    
?>