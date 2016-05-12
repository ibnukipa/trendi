<form action="<?php echo base_url(); ?>dashboard/insert_fashion" method="post">
    Nama <input type="text" name="nama"><br>
    Deskripsi <input type="text" name="deskripsi"><br>
    Kategori <select name="kategori">
        <option value="TREND">TREND</option>
        <option value="SESSION">SESSION</option>
        <option value="EVENT">EVENT</option>
    </select><br>
    Genre<select name="genre">
        <option value="MALE">Male</option>
        <option value="FEMALE">Female</option>
    </select><br>
    <input type="submit" name="submit"><br>
</form>