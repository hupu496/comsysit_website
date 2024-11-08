<section>
      <div class="container">
      	 <h2 >News details</h2><hr style="border: 1px solid red;">
      		<div class="row">
      			<div class="col-md-12">
                              <?php if(!empty($news)){
                                   ?>
                                   <div class="row">
                                          <div class="col-md-12">
                                                <img src="<?= base_url($news['image']);?>" class="img-fluid" style="width:100%; height:70%" >
                                          </div>
                                          <div class="col-md-12">
                                                <h4 ><?= $news['tittle'];?></h4>
                                                <p style=""><?= $news['straplines'];?></p>
                                           </div>
                                           <div class="col-md-12">
                                                <p style="line-height: 17px;"><?= $news['news'];?></p>
                                           </div>
                                    </div>
                                   <?php
                              }?>
      			</div>
      		</div>
      	</div>
</section>