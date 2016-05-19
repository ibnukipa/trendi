<div class="container" style="padding-top: 10px">
		<div class="row">
               <?php foreach ($d as $key) { 
        if ($key->kategori =='KEMARAU')
    {?>
                <div class="col s4">
                      <div class="card">
                        <div class="card-image">
               <!--            <img class="materialboxed" width="650" src="<?php echo base_url() . $key->foto ?>"> -->
                          <img src="<?php echo base_url() . $key->foto ?>" style="width:100%;height:350px;" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;"><?php echo $key->nama ?></span>
                            <br>
                            <span style="text-align: left; color:#9e9e9e"><?php echo $key->tanggal ?></span>
                          <p><?php echo $key->deskripsi ?></p>
                          <span class="rating">
                          <input id="rating5" type="radio" name="rating" value="5">
                          <label for="rating5">5</label>
                          <input id="rating4" type="radio" name="rating" value="4">
                          <label for="rating4">4</label>
                          <input id="rating3" type="radio" name="rating" value="3">
                          <label for="rating3">3</label>
                          <input id="rating2" type="radio" name="rating" value="2" checked>
                          <label for="rating2">2</label>
                          <input id="rating1" type="radio" name="rating" value="1">
                          <label for="rating1">1</label>
                        </span>
                        </div>
                        <div class="card-action">
                            <a style="color:#1b5e20;" class="modal-trigger waves-effect waves-light btn" href="#modal1">READ MORE</a>
                        </div>
                      </div>
                    </div>
  <?php } 
        } ?>

				<div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/aa.png" style="width:100%;height:350px;" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                            <br>
                            <span style="text-align: left; color:#9e9e9e">21/05/2016</span>
                          <p>Elegant ft Casualbdnsdnan jamdoamsfnwh hjnsjncfsjnafnaj hauhudhuwhu sjdmsodmioajhduwe dfnjznfjnjn uhfuhnfnklnohuhu ncnjndjnjncfde</p>
                          <span class="rating">
                          <input id="rating5" type="radio" name="rating" value="5">
                          <label for="rating5">5</label>
                          <input id="rating4" type="radio" name="rating" value="4">
                          <label for="rating4">4</label>
                          <input id="rating3" type="radio" name="rating" value="3">
                          <label for="rating3">3</label>
                          <input id="rating2" type="radio" name="rating" value="2" checked>
                          <label for="rating2">2</label>
                          <input id="rating1" type="radio" name="rating" value="1">
                          <label for="rating1">1</label>
                        </span>
                        </div>
                        <div class="card-action">
                            <a style="color:#1b5e20;" class="modal-trigger waves-effect waves-light btn" href="#modal1">READ MORE</a>
                        </div>
                      </div>
                </div>
                <div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/produk2.jpg" style="width:100%;height:350px;" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span><br>
                            <span style="text-align: left; color:#9e9e9e">21/05/2016</span>
                          <p>Elegant ft Casual</p>
                          <span class="rating">
                          <input id="rating5" type="radio" name="rating" value="5">
                          <label for="rating5">5</label>
                          <input id="rating4" type="radio" name="rating" value="4">
                          <label for="rating4">4</label>
                          <input id="rating3" type="radio" name="rating" value="3">
                          <label for="rating3">3</label>
                          <input id="rating2" type="radio" name="rating" value="2" checked>
                          <label for="rating2">2</label>
                          <input id="rating1" type="radio" name="rating" value="1">
                          <label for="rating1">1</label>
                        </span>
                        </div>
                        <div class="card-action">
                            <a style="color:#1b5e20;" class="modal-trigger waves-effect waves-light btn" href="#modal1">READ MORE</a>
                        </div>
                      </div>
                </div>
               <div class="col s4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/favorite.jpg" style="width:100%;height:350px;" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                            <br>
                            <span style="text-align: left; color:#9e9e9e">21/05/2016</span>
                          <p>Elegant ft Casual</p>
                          <span class="rating">
                          <input id="rating5" type="radio" name="rating" value="5">
                          <label for="rating5">5</label>
                          <input id="rating4" type="radio" name="rating" value="4">
                          <label for="rating4">4</label>
                          <input id="rating3" type="radio" name="rating" value="3">
                          <label for="rating3">3</label>
                          <input id="rating2" type="radio" name="rating" value="2" checked>
                          <label for="rating2">2</label>
                          <input id="rating1" type="radio" name="rating" value="1">
                          <label for="rating1">1</label>
                        </span>
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
