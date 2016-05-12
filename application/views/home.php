<div id="page-wrapper">
<div class="row" >
<!--    Header-->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image">
                          <img 
                               <?php if($e == 'female') 
                                    { ?> 
                                        src="<?php echo base_url()?>assets/img/ea.jpg" 
                                    <?php } else {?> 
                                         src="<?php echo base_url()?>assets/img/gb.jpg"
                               <?php } ?>
                               style="width:100%" alt="" class="img-rounded"/>
                        </div>
<!--
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Tampilan Eegant</span>
                          <p>Elegant ft Casual</p>
                        </div>
-->
                      </div>
                    </div>
<!--    Content-->
        <?php foreach ($d as $key) { ?>
                <div class="col-lg-4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo $key->foto ?>" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;"><?php echo $key->nama ?></span>
                            <br>
                            <span style="text-align: left; color:#9e9e9e"><?php echo $key->tanggal ?></span>
                          <p><?php echo $key->deskripsi ?></p>
                        </div>
                        <div class="card-action">
                          <a href="<?php echo base_url()?>welcome/detail/<?php echo $key->id ?>/<?php echo $key->genre ?>" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                    </div>
     <?php }  ?>
        </div> 

</div>