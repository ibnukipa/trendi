<?php
Class Fashion_m extends CI_Model{

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

    //insert new fashion
    public function insert($nama, $deskripsi, $foto, $id_admin, $kategori, $genre)
    {
        return $this->db->query("INSERT INTO fashion(nama, deskripsi, foto, rating, id_admin, kategori, genre, tanggal) VALUES('$nama', '$deskripsi', '$foto', 0, '$id_admin', '$kategori', '$genre', NOW())");;
    }

    //update fashion
    public function update($id, $nama, $deskripsi, $foto, $id_admin, $kategori, $genre)
    {
        $query_ = $this->db->query("update fashion set nama = '$nama', deskripsi = '$deskripsi', foto = '$foto', id_admin = '$id_admin', kategori = '$kategori', genre = '$genre' where id = '$id'");
    }

    //delete fashion
    public function delete($id)
    {
        $query_ = $this->db->query("update fashion set show = 0 where id = '$id'");
    }

    public function show_all()
    {
        $query_ = $this->db->query("select * from fashion where show_ = 1");
        $data = $query_->result();
        return $data;
    }

    //show list all fashion by gender
    public function show_all_by_gender($g, $awal, $akhir)
    {
        $query_ = $this->db->query("select * from fashion where show_ = 1 and genre = '$g' order by id asc limit $awal,$akhir");
        $data = $query_->result();
        return $data;
    }

    //show detail fashion per fashion
    public function show_by_id($id)
    {
        $query_ = $this->db->query("select * from fashion where id = '$id'");
        $data = $query_->result();
        return $data;
    }

    public function show_by_kategori($kategori, $gender)
    {
        $query_ = $this->db->query("select * from fashion, fashion_kategori, kategori where kategori = '$kategori' and genre='$gender'
                                  and id_k = id_kategori and id_fashion = id");
        $data = $query_->result();
        return $data;
    }
}

?>
