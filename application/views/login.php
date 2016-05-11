<section id="login" style="background: <?php echo $warna_utama; ?>">
	<div class="container">
		<div class="valign-wrapper row">
			<div class="col s12 m8 l5">
				<div class="card-panel bayangan_2dp">
					<div class="row" style="padding: 0; margin-bottom: 7%">
						<div class="col s12" style="margin: 0; display: table; text-align: center; padding-top: 20px">
							<!-- <i class="material-icons icon-list-oprec" style="background-color: <?php echo $warna_kedua; ?>">account_circle</i> -->
							<div onclick="load_page('<?php echo base_url(); ?>')" style="line-height: 0; display: inline-block; vertical-align: middle;">
				                <span class="judul_utama disable_select" style="font-size: 30px; font-family: 'antique'; color: <?php echo $warna_keempat; ?>">
				                	trendi <span style="color: <?php echo $warna_utama; ?>; opacity: .5">login</span>
				                </span>
				                <span class="judul_kedua disable_select" style="font-weight: 500">It's not about brand. it's about style</span>
				            </div>
							<!-- <div class="divider"></div> -->
						</div>
					</div>
				    <form method="post" id="login_form">
						<div class="row" style="padding: 0 30px; margin-bottom: 30px">
							<div class="input-field col s12" style="margin-bottom: 10px">
								<i class="material-icons prefix">chrome_reader_mode</i>
								<input id="username" name="username" type="text" class="validate" required >
								<label for="username" data-error="Username tidak valid" data-success="Username valid">NRP/NIP</label>
							</div>
							<div class="input-field col s12">
								<i class="material-icons prefix">https</i>
								<input id="password" name="password" type="password" class="validate" required >
								<label for="password" data-error="Password salah!">Password</label>
							</div>
							<div class="col s12" style="text-align: center; margin-top: 10px">
								<ul>
					                <li class="btn-hov">
					                    <a href="#" onclick="login()" style="background-image: -webkit-linear-gradient(top,<?php echo $warna_kedua; ?>,<?php echo $warna_ketiga; ?>); width: 100%; padding: 0 15px;" class="waves-effect waves-light btn bayangan_2dp">
					                        <span class="font_button">Login</span>
					                    </a>
					                </li>
					            </ul>
							</div>
						</div>
				    </form>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	function load_page(url) {
		window.location.href = url;
	}
</script>

<script>
	function login() {
		$.ajax({
			type: "POST",
			url: '<?php echo base_url();?>login/login',
			data: $("#login_form").serialize(),
			dataType: 'json',
			success: function(data){
				console.log(data);
				//Login berhasil atau tidak
				if(data){
					window.location.href = "<?php echo base_url();?>login";
				} else {
					$("#password").focus();
					$("#password").addClass("invalid");
				}
			},
			beforeSend: function(xhr, opts) {
				var username 	= $('#username').val();
				var pass 	= $('#password').val();
				if (!username || !pass) {
					if(!username) {
						$("#username").focus();
						$("#username").addClass("invalid");
					    return false;
					} else {
						$("#password").focus();
						$("#password").addClass("invalid");
						return false;
					}
					xhr.abort();
				}
			}
		})
	}
</script>