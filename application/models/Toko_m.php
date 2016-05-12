<?php
Class Toko_m extends CI_Model{
    
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
    
    //insert new toko
    public function insert($id_fashion, $nama, $foto)
    {
        $query_ = $this->db->query("call sp_add_item('$id_fashion', '$nama','$foto')");
    }
    
    //update toko
    public function update($id_toko, $nama, $foto)
    {
        $query_ = $this->db->query("update toko set nama = '$nama', foto = '$foto',  where id = '$id_toko'");
    }
    
    //delete toko from fashion
    public function delete($id_fashion, $id_toko)
    {
        $query_ = $this->db->query("delete from fashion_toko where id_fashion = '$id_fashion' and id_toko = '$id_toko'");
        $query_ = $this->db->query("delete from toko where id = '$id_toko'");
    }
    
    //show list item per fashion
    public function show_all_toko_fashion($id_fashion)
    {
        $query_ = $this->db->query("SELECT * FROM toko, fashion_toko WHERE id_toko = id AND id_fashion = '$id_fashion';");
        $data = $query_->result();
        return $data;
    }
    
    //show detail toko
    public function show_toko_by_id($id_toko)
    {
        $query_ = $this->db->query("select * from toko where id = '$id_toko'");
        $data = $query_->result();
        return $data;
    }
}
    
?>