<div class="wadah">
	<div class="row">
		<div class="col s2" style="padding: 0; width: 19%">
			<div class="card" style="box-shadow: none">
				<section id="menu-user">
				<?php 
                if($_SESSION['hak_akses'] === "A") {
                    $this->view("menu-l/dash_admin");
                } else if($_SESSION['hak_akses'] === "D") {
                    $this->view("menu-l/dash_dosen");
                } else {
                    $this->view("menu-l/dash_mahasiswa");
                }
                ?>
				</section>
			</div>
			<?php $this->view("menu_l"); ?>
		</div>
		<section id="content-container">
			<div class="col s9" style="width: 81%; padding-right: 0;">
				<div class="card bayangan_2dp">
			        <div class="status-content" style="background:<?php echo $path_warna; ?> ; color: white; font-weight: 500">
						<?php $this->view("status_bar_top"); ?>
			        </div>
			        <div class="progress" style="margin: 0; background-color: #B3E5FC">
			            <div class="indeterminate" style="background-color: #0288D1"></div>
			        </div>
					<section id="content" style="border-bottom: 20px solid <?php echo $path_warna ?> ; padding-top: 20px; color: <?php echo $warna_utama ?>">
						<img style="width: 100%" src="<?php echo base_url(); ?>/assets/img/back.png">
					</section>
				</div>
			</div>
		</section>
	</div>
</div>

<?php
	if($_SESSION['hak_akses'] === "A") {

	} else if($_SESSION['hak_akses'] === "D") {

	} else { ?>
		<script src='<?php echo base_url(); ?>assets/js/dash_mahasiswa.js'></script>
		<script>

		function pendaftaran_proposal(caller) {
			select_this(caller);
			<?php 
				$data = $controller->set_meta_data();
				$data['path_']          = array( 0 => "Dashboard", 1 => "Pendaftaran" );
        		$data['path_icon']      = array( 0 => "dashboard", 1 => "");
			?>
			var urlTarget 	= '<?php echo base_url(); ?>dashboard/mahasiswa_pedaftaran_proposal_top';
			get_view_top(urlTarget, ".status-content");

			urlTarget = '<?php echo base_url(); ?>dashboard/mahasiswa_pedaftaran_proposal_content';
			get_view(urlTarget, "#content");
		}

		function detail_proposal(caller) {
			select_this(caller);
			
			var urlTarget 	= '<?php echo base_url(); ?>dashboard/mahasiswa_detail_proposal_top';
			get_view_top(urlTarget, ".status-content");

			urlTarget = '<?php echo base_url(); ?>dashboard/mahasiswa_detail_proposal_content';
			get_view(urlTarget, "#content");
		}

		</script>
<?php } ?>