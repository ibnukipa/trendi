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
               <!--            <img class="materialboxed" width="650" src="<?php echo base_url() . $key->foto ?>"> -->
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
                        <div class="card-action">
                            <a style="color:#1b5e20;" class="modal-trigger waves-effect waves-light btn" href="#modal1">READ MORE</a>
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
                            <a style="color:#1b5e20;" class="modal-trigger waves-effect waves-light btn" href="#modal1">READ MORE</a>
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


 <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
       <?php foreach ($d as $key) { ?>
    

<!--     <div class="row"> -->
      <div class="col s12" id="male_1">
        <div class="card large" style="width: 100%; height: 710px">
          <div class="row" style="margin-bottom: 0">
            <div class="col s4">
              <img src="<?php echo base_url().$key->foto; ?>" style="width: 100%; padding-top:12%">
            </div>
            <div class="col s8" style="">
              <div class="card-content">
                <div class="row">
                  <div class="col s12" style="padding-bottom: 20px">
                      <h5 style="color:#f57c00;"><?php echo $key->nama ?></h5>
                                        <br>
                            <span style="text-align: left; color:#9e9e9e"><?php echo $key->tanggal ?></span>
                                        <br>
                    </div>
<!--
                    <div class="col s12">
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/baju.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/sepatu.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/topi.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/kaca.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/topi.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/kaca.png" style="width: 100%">
                      </div>
                    </div>
-->
<!--
                    <div class="col s12" style="padding-top: 1%">
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/baju.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/sepatu.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/topi.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/kaca.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/topi.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img class="icon_item" src="assets/img/kaca.png" style="width: 100%">
                      </div>
                    </div>
-->
                    <div class="col s12" style="padding-top: 20px">
                      <p style="text-align: justify"><?php echo $key->deskripsi ?></h5></p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col s12" style="text-align: left; margin-bottom: 10px">
            <a style="color: #727272; margin-right: 0">INFO ITEM</a>
          </div>
          <div class="col s12">
                        <?php $c = 0; foreach($k as $kain){
                            $c++;
                        ?>
            <div class="col s1">
              <img class="icon_item" src="<?php echo base_url().$kain->foto; ?>" style="width: 100%">
            </div>
                        
                        <?php 
                            }
                            if($c == 0) echo "kosong";
                        ?>
          </div>
          <div class="col s12" style="margin-top: 20px; text-align: left; margin-bottom: 10px">
            <a style="color: #727272; margin-right: 0">INFO TOKO</a>
          </div>
          <div class="col s12">
            <?php $c = 0; foreach($t as $toko){
                            $c++;
                        ?>
            <div class="col s1">
              <img class="icon_item" src="<?php echo base_url().$toko->foto; ?>" style="width: 100%">
            </div>
                        
                        <?php 
                            }
                            if($c == 0) echo "No Available";
                        ?>
          </div>
<!--
              <img src="assets/img/male_tag.png" alt="Contact Person">
             
            </div>
-->
<!--            <span><a class="waves-effect btn-flat" style="color: #727272; margin-right: 0"><i class="material-icons left">date_range</i>28-03-2016</a></span>-->
            <span class="star-rating right" style="margin-right: 20px;">
              <input type="radio" name="rating" value="1"><i></i>
              <input type="radio" name="rating" value="2"><i></i>
              <input type="radio" name="rating" value="3"><i></i>
              <input type="radio" name="rating" value="4"><i></i>
              <input type="radio" name="rating" value="5"><i></i>
            </span>
          </div>
        </div>
      </div>
      <div class="card-action">
    
      </div>
      <div class="col s12">
        <h4 style="margin-top: 30px; font-size: 20px"></h4>
      </div>
            <!--
      <div class="col s6" id="female_1">
        <div class="card medium" style="width: 100%">
          <div class="row" style="margin-bottom: 0">
            <div class="col s4">
              <img src="assets/img/produk2.jpg" style="width: 100%; padding-top: 25%; margin-left: 12%">
            </div>
            <div class="col s8" style="">
              <div class="card-content">
                <div class="row">
                  <div class="col s12">
                      <h5>NAMA FASHION</h5>
                    </div>
                    <div class="col s12">
                      <p style="text-align: justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col s12" style="padding-top: 20px">
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/baju.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/sepatu.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/topi.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/kaca.png" style="width: 100%">
                      </div>
                    </div>
                    <div class="col s12">
                      <span class="star-rating" style="margin-top: 10px">
                      <input type="radio" name="rating" value="1"><i></i>
                      <input type="radio" name="rating" value="2"><i></i>
                      <input type="radio" name="rating" value="3"><i></i>
                      <input type="radio" name="rating" value="4"><i></i>
                      <input type="radio" name="rating" value="5"><i></i>
                    </span>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="card-action">
            <div class="chip">
              <img src="assets/img/female_tag.png" alt="Contact Person">
            </div>
            <span><a class="waves-effect btn-flat" style="color: #727272; margin-right: 0"><i class="material-icons left">date_range</i>28-03-2016</a></span>
            <a href="" class="waves-effect waves-light btn right green"><i class="material-icons right">keyboard_arrow_right</i>Readmore</a>
          
          </div>
        </div>
      </div>
      <div class="col s6" id="female_2">
        <div class="card medium" style="width: 100%">
          <div class="row" style="margin-bottom: 0">
            <div class="col s4">
              <img src="assets/img/produk2.jpg" style="width: 100%; padding-top: 25%; margin-left: 12%">
            </div>
            <div class="col s8" style="">
              <div class="card-content">
                <div class="row">
                  <div class="col s12">
                      <h5>NAMA FASHION</h5>
                    </div>
                    <div class="col s12">
                      <p style="text-align: justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col s12" style="padding-top: 20px">
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/baju.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/sepatu.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/topi.png" style="width: 100%">
                      </div>
                      <div class="col s2" style="padding-left: 0">
                        <img src="assets/img/kaca.png" style="width: 100%">
                      </div>
                    </div>
                    <div class="col s12">
                      <span class="star-rating" style="margin-top: 10px">
                      <input type="radio" name="rating" value="1"><i></i>
                      <input type="radio" name="rating" value="2"><i></i>
                      <input type="radio" name="rating" value="3"><i></i>
                      <input type="radio" name="rating" value="4"><i></i>
                      <input type="radio" name="rating" value="5"><i></i>
                    </span>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="card-action">
            <div class="chip">
              <img src="assets/img/female_tag.png" alt="Contact Person">
            </div>
            <span><a class="waves-effect btn-flat" style="color: #727272; margin-right: 0"><i class="material-icons left">date_range</i>28-03-2016</a></span>
            <a href="" class="waves-effect waves-light btn right green"><i class="material-icons right">keyboard_arrow_right</i>Readmore</a>
          
          </div>
        </div>
      </div> -->
    </div>
<?php }  ?>
    <!-- </div> -->
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>