 <div class="col-sm-9 col-md-9">
            <div class="well">
                <?php foreach ($d as $key) { 
        if ($key->kategori =='SEASON')
    {?>
                <div class="row" >
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo $key->foto ?>" alt="" class="img-rounded"/>
                        </div>
                        <div class="card-content">
                            <span class="card-title" style="color:#f57c00;width:100%;"><?php echo $key->nama ?></span>
                            <br>
                            <span style="text-align: left; color:#9e9e9e"><?php echo $key->tanggal ?></span>
                            
                          <p><?php echo $key->deskripsi ?></p>
                        </div>
                        <div class="card-action">
                          <a href="<?php echo base_url()?>welcome/detail/<?php echo $key->id ?>/<?php echo $key->genre ?>" style="color:#1b5e20;">Readmore</a>
                        </div>
                      </div>
                    </div>
     <?php } 
        } ?>
        </div>               
    </div>
</div>
