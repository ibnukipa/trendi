<div class="row" style="margin-bottom: 0px;">
	<div class="col s8" style="padding: 0; display: table">
		<!-- <i class="material-icons" style="vertical-align: middle; color: <?php echo $warna_utama; ?>; font-size: 25px">home</i> -->
		<span style="vertical-align: middle; font-size: 20px; font-family: 'antique'">
        	<a href="<?php echo base_url(); ?>" style="color: white; opacity: .9; font-weight: 400">Trendi</a>
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
	<div class="col s4" style="padding: 0 10px; display: table; text-align: right;">
		<!-- <span style="color: white; vertical-align: middle; font-size: 15px; font-weight: 700">
        		Status TA :
        </span> -->
		<!-- <i class="material-icons" style="vertical-align: middle; font-size: 20px">notifications</i>
		<span style="vertical-align: middle; font-size: 13px;">
        	4
        </span> -->
	</div>
</div>