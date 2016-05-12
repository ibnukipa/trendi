<h4 class="head-form">
	<?php echo $nama_formulir; ?>
</h4>
<h6 class="center" style="margin-bottom: 20px; color: <?php echo $warna_utama ?>; opacity: .5">Trendi</h6>
<div class="divider"></div>
<form id="<?php echo $id_form; ?>" class="form-blue" action="<?php echo base_url(); ?>dashboard/new_post">
	<div class="row" style="margin: 0">
		<div class="input-field col s12" style="margin-bottom: 10px">
			<i class="material-icons prefix">import_contacts</i>
			<input placeholder="Judul/Nama Fashion" id="nama_fashion" name="nama_fashion" class="materialize-textarea validate" required>
			<label for="nama_fashion" class="active">Judul/Nama Fashion</label>
		</div>
		<div class="file-field input-field col s12">
			<div class="btn">
				<span>File</span>
				<input type="file" name="foto_fashion" multiple>
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text" placeholder="Upload foto">
			</div>
		</div>
		<div class="input-field col s12" style="margin-bottom: 10px">
			<i class="material-icons prefix">description</i>
			<textarea placeholder="Deskripsi singkat tentang Fashion" id="deskripsi_fashion" name="deskripsi_fashion" class="materialize-textarea validate" required></textarea>
			<label for="deskripsi_fashion" class="active">Deskripsi Fashion</label>
		</div>
		<div class="col s12" style="margin-bottom: 10px">
        <label for="deskripsi_fashion" class="active">Gender</label>
			<p>
			<input name="gender" type="radio" id="test1" />
			<label for="test1">Male</label>
		</p>
		<p>
			<input name="gender" type="radio" id="test2" />
			<label for="test2">Female</label>
		</p>
		</div>
        <div class="col s12" style="margin-bottom: 10px">
        <label for="deskripsi_fashion" class="active">Kategori</label>
			<p>
			<input name="kategori" type="radio" id="kategori1" />
			<label for="kategori1">TREND</label>
		</p>
		<p>
			<input name="kategori" type="radio" id="kategori2" />
			<label for="kategori2">SESSION</label>
		</p>
        <p>
			<input name="kategori" type="radio" id="kategori3" />
			<label for="kategori3">EVENT</label>
		</p>
		</div>

		<!-- <div class="col s12" style="text-align: center;"> -->
			<!-- <ul class=""> -->
				<!-- <a class="waves-effect waves-light btn"><i class="material-icons left">add</i>Item</a>
				<a class="waves-effect waves-light btn"><i class="material-icons left">add</i>Kain</a>
				<a class="waves-effect waves-light btn"><i class="material-icons left">add</i>Toko</a> -->
	        <!-- </ul> -->
		<!-- </div> -->
	</div>
</form>
<div class="row" style="margin: 20px 0">
	<div class="col s12" style="text-align: center;">
		<ul class="">
            <li class="btn-hov">
                <a onclick="submit_form('<?php echo base_url(); ?>', '<?php echo $id_form; ?>')" style="padding: 0 15px;" data-warna="biru" class="waves-effect waves-light btn bayangan_2dp">
                    <i class="material-icons left" style="line-height: inherit; margin-right: 5px; font-size: 1.3em">open_in_browser</i>
                    <span class="font_button">SUBMIT</span>
                </a>
            </li>
        </ul>
	</div>
</div>