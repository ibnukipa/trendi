<?php
Class Item_m extends CI_Model{
    
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
    
    //insert new item
    public function insert($id_fashion, $nama, $jenis, $deskripsi, $foto)
    {
        $query_ = $this->db->query("call sp_add_item('$id_fashion', '$nama', '$jenis', '$deskripsi', '$foto')");
    }
    
    //update item
    public function update($id_item, $nama, $jenis, $deskripsi, $foto)
    {
        $query_ = $this->db->query("update item set nama = '$nama', deskripsi = '$deskripsi', foto = '$foto', jenis= '$jenis' where id = '$id_item'");
    }
    
    //delete item from fashion
    public function delete($id_fashion, $id_item)
    {
        $query_ = $this->db->query("delete from fashion_item where id_fashion = '$id_fashion' and id_item = '$id_item'");
        $query_ = $this->db->query("delete from item where id = '$id_item'");
    }
    
    //show list item per fashion
    public function show_all_item_fashion($id_fashion)
    {
        $query_ = $this->db->query("SELECT * FROM item, fashion_item WHERE id_item = id AND id_fashion = '$id_fashion';");
        $data = $query_->result();
        return $data;
    }
    
    //show detail item
    public function show_item_by_id($id_item)
    {
        $query_ = $this->db->query("select * from item where id = '$id_item'");
        $data = $query_->result();
        return $data;
    }
}
    
?>