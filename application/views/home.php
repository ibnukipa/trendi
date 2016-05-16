<div class="container" style="padding-top: 10px">
		<div class="row">
			<div class="col s12">
				<div class="card large" style="width: 100%; height: 455px">
					 <div class="slider">
					    <ul class="slides">
					      <li>
					        <img src="http://www.styleclickcity.com/wp-content/uploads/2014/09/DenimFashion.Styleclickcity.com_.jpg"> <!-- random image -->
					        <div class="caption center-align">
					          <h3>This is our big Tagline!</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					      <li>
					        <img src="<?php echo base_url()?>assets/img/ea.jpg"> <!-- random image -->
					        <div class="caption left-align">
					          <h3>Left Aligned Caption</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					      <li>
					        <img src="http://www.ibcworldnews.com/gallery/wp-content/uploads/2016/01/047ba164-8693-4028-8815-c419f090fa14.jpg"> <!-- random image -->
					        <div class="caption right-align">
					          <h3>Right Aligned Caption</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					      <li>
					        <img src="http://cdn1.theodysseyonline.com/files/2016/01/27/635894576889786368-2047180225_aptopix-fashion-theyskens-theory-fall-2012-backstage.jpg"> <!-- random image -->
					        <div class="caption center-align">
					          <h3>This is our big Tagline!</h3>
					          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
					        </div>
					      </li>
					    </ul>
  					</div>
				</div>
                
                <?php foreach ($d as $key) { ?>
                <div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url() . $key->foto ?>" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;"><?php echo $key->nama ?></span>
                            <br>
                            <span style="text-align: left; color:#9e9e9e"><?php echo $key->tanggal ?></span>
                          <p><?php echo $key->deskripsi ?></p>
                        </div>
                        <div class="card-action">
                          <a href="<?php echo base_url()?>welcome/detail/<?php echo $key->id ?>" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                    </div>
     <?php }  ?>

				<div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/aa.png" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                          <p>Elegant ft Casual</p>
                        </div>
                        <div class="card-action">
                          <a href="indexdetail.html" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                </div>
                <div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/produk2.jpg" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                          <p>Elegant ft Casual</p>
                        </div>
                        <div class="card-action">
                          <a href="indexdetail.html" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                </div>
                <div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/favorite.jpg" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                          <p>Elegant ft Casual</p>
                        </div>
                        <div class="card-action">
                          <a href="indexdetail.html" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                </div>
                
                <div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/favorite.jpg" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                          <p>Elegant ft Casual</p>
                        </div>
                        <div class="card-action">
                          <a href="indexdetail.html" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                </div>
                
                <div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/produk2.jpg" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                          <p>Elegant ft Casual</p>
                        </div>
                        <div class="card-action">
                          <a href="indexdetail.html" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                </div>
                <div class="col s12">

                <ul class="pagination" style="text-align:center;">
				    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
				    <li class="active"><a href="#!">1</a></li>
				    <li class="waves-effect"><a href="#!">2</a></li>
				    <li class="waves-effect"><a href="#!">3</a></li>
				    <li class="waves-effect"><a href="#!">4</a></li>
				    <li class="waves-effect"><a href="#!">5</a></li>
				    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
				 </ul>
                    </div>
			</div>
		</div>
	</div>

	<script>
			$('.dropdown-button').dropdown({
			      inDuration: 300,
			      outDuration: 225,
			      constrain_width: false, // Does not change width of dropdown to that of the activator
			      hover: true, // Activate on hover
			      gutter: 0, // Spacing from edge
			      belowOrigin: true, // Displays dropdown below the button
			      alignment: 'left' // Displays dropdown with edge aligned to the left of button
			    }
			  )</script>
	</body>
