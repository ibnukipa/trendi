<div id="page-wrapper">
<div class="row" >
<!--    Header-->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url()?>assets/img/ea.jpg" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;">Card Title</span>
                          <p>Elegant ft Casual</p>
                        </div>
                        <div class="card-action">
                          <a href="<?php echo base_url()?>welcome/detail" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                    </div>
<!--    Content-->
        <?php foreach ($d as $key) { 
        if ($key->genre =='PEREMPUAN')
    {?>
    
    
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo base_url(); echo $key->foto ?>assets/img/aa.png" style="width:100%" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;"><?php echo $key->nama ?></span>
                          <p><?php echo $key->deskripsi ?></p>
                        </div>
                        <div class="card-action">
                          <a href="<?php echo base_url()?>welcome/detail" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                    </div>
    <?php } } ?>
                  </div>

</div>