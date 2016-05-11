<div class="row" style="margin-bottom: 0px;">
	<div class="col s8" style="padding: 0; display: table">
		<!-- <i class="material-icons" style="vertical-align: middle; color: <?php echo $warna_utama; ?>; font-size: 25px">home</i> -->
		<span style="vertical-align: middle; font-size: 20px; font-family: 'antique'">
        	<a href="<?php echo base_url(); ?>" style="color: white; opacity: .9">monTA</a>
        </span>
		
		<?php 
			for($i=0; $i<count($path_); $i++) { ?>
					<i class="material-icons" style="font-size: 20px; vertical-align: middle; ccolor: white; opacity: .8">chevron_right</i>
					<i class="material-icons" style="vertical-align: middle; color: color: white; opacity: .7; font-size: 20px"><?php echo $path_icon[$i]; ?></i>
					<span style="vertical-align: middle; font-size: 15px;">
						<a href="<?php echo $path_link[$i]; ?>" style="color: white; opacity: .7"><?php echo $path_[$i]; ?></a>
		            </span>
		<?php	}
		?>
	</div>
	<?php if(isset($_SESSION['hak_akses'])) { ?>
	<div class="col s4" style="padding: 0 10px; display: table; text-align: right;">
		<!-- <i class="material-icons" style="vertical-align: middle; color: <?php echo $warna_utama; ?>; font-size: 25px">home</i> -->
		<?php if($_SESSION['hak_akses'] === "A") { ?>
			<i class="material-icons" style="vertical-align: middle; font-size: 25px">notifications</i>
			<span style="vertical-align: middle; font-size: 13px;">
            	<strong style="font-size: 1rem; font-weight: 700">5</strong> 
            	<span style="font-weight: 300"> proposal TA</span>
            </span>
		<?php } else { ?>
			<span style="color: white; vertical-align: middle; font-size: 15px; font-weight: 700">
				<?php if($_SESSION['hak_akses'] === "D") { ?>
	        		Jumlah Bimbingan :
	        	<?php } else { ?>
	        		Status TA :
	        	<?php } ?>
	        </span>
	        	
				<?php if($_SESSION['hak_akses'] === "D") { ?>
	        		<i class="material-icons" style="vertical-align: middle; font-size: 20px">people</i>
					<span style="vertical-align: middle; font-size: 13px;">
		            	<strong style="font-size: 1rem; ">5</strong> mahasiswa
		            </span>
	        	<?php } else { ?>
	        		<i class="material-icons" style="vertical-align: middle; font-size: 20px"><?php echo $_SESSION['status_ta_icon']; ?></i>
					<span style="vertical-align: middle; font-size: 13px;">
		            	<?php echo $_SESSION['status_ta']; ?>
		            </span>
	        	<?php } ?>
	        <?php } ?>
		</div>
	<?php } ?>
</div>