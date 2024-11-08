<section>
      <div class="container">
      	 <h2 >Crime</h2><hr style="border: 1px solid red;">
      		<div class="row">
      			<div class="col-md-8">
                              <?php if(!empty($crime_news)){
                                    foreach ($crime_news as $key => $value) {
                                     ?>
                                    <div class="row">
                                          <div class="col-md-3">
                                                <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" class="img-fluid" style="width:100%"></a>
                                          </div>
                                          <div class="col-md-9">
                                               <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"> <h4 ><?= $value['tittle'];?></h4>
                                                <p style="line-height: 17px;"><?= $value['straplines'];?></p></a>
                                           </div>
                                    </div>
                                    <?php
                                    }

                              }else{?>
                                    <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/handcuff.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4 >Madhya Pradesh: Four men arrested for setting ablaze woman in Vidisha</h4>
                                          <p style="line-height: 17px;">In Madhya Pradesh’s Vidisha, four men set ablaze a woman under the influence of alcohol. The main accused has been identified as Amit Rai. The incident took place on June 28.</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/magic.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4>Agra ‘tantrik’ arrested for ‘sacrificing’ kid to take advantage of property row between 2 families</h4>
                                          <p>A man, who claimed to be a ‘tantrik’, was arrested in Agra, Uttar Pradesh, for allegedly ‘sacrificing’ a 2.5-year-old boy “to appease Devi Maa" in Jagner.</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/tala.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4>2 criminals injured in police encounter in UP’s Bulandshahr, pistols recovered</h4>
                                          <p style="line-height: 15px;">Two criminals were injured after an encounter broke out between them and police in UP’s Bulandshahr on Tuesday night. The accused were later arrested and two pistols were recovered from their possession.</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/minor.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4 style="line-height: 19px;">10-year-old girl raped, body dumped on railway track by relative in Gwalior</h4>
                                          <p style="line-height: 15px;">A minor girl was allegedly raped, and her body was dumped on the railway track by a relative who took her out for ice cream in Gwalior. The accused is currently absconding.</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/Crime11.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4>Man kills wife after argument in Jharkhand's Gumla</h4>
                                          <p>A 30-year-old man allegedly killed his wife following an argument in Gumla district of Jharkhand..</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/imageedi.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4>Mangaluru boy assaulted while returning from Madrasa by unidentified miscreants</h4>
                                          <p>A Muslim boy, returning from Madrasa, was assaulted by some unknown bike-borne miscreants on Monday night in Mangaluru district of Karnataka..</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/crimescene.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4>Nagpur man kills in-laws with axe over property dispute; leaves wife, daughter seriously injured</h4>
                                          <p style="line-height: 15px;">A man allegedly hacked to death his in-laws and seriously injured his wife and daughter over a property dispute in Amar Nagar area of Nagpur, a police official said on Saturday.</p>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-3">
                                           <img src="<?= base_url('assets/website/images/Rep.jpg');?>" class="img-fluid" style="width:100%">
                                    </div>
                                    <div class="col-md-9">
                                          <h4>Former Tripura minister detained for molesting student in Delhi</h4>
                                          <p>Police have detained a former Tripura minister for molesting a girl in Delhi.</p>
                                    </div>
                              </div>



                              <?php }?>
      				


      			</div>
      			<div class="col-md-4">
      				<h2 style="color: red;">Read this</h2>
                              <?php
                                  if(!empty($crime_news)){
                                    foreach ($crime_news as $key => $value) {
                                          ?>
                                          <div class="row" style="padding-bottom: 10px; padding-top: 10px; margin-top: 20px; border-radius: 10px; border-width: 3px; box-shadow: 2px 2px 4px 2px grey; border: white;">
                                                <div class="col-md-7 mb-3" >
                                                <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><h6><?= $value['tittle'];?></h6></a>     
                                          </div>
                                          <div class="col-md-5 mb-3">
                                                <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" style="width:100%;"></a>
                                          </div>
                                          </div>
                                          <?php
                                    }
                                  }else{
                                    ?>
                                     <div class="row" style="padding-bottom: 10px; padding-top: 10px;  margin-top: 20px; border-radius: 10px; border-width: 3px; box-shadow: 2px 2px 4px 2px grey; border: white;">
                                          <div class="col-md-7" >
                                                <h6>Shinde, Scindia and a history lesson amid Maharashtra crisis</h6>  
                                          </div>
                                          <div class="col-md-5">
                                                <img src="<?= base_url('assets/website/images/Shinde.jpg');?>" style="width:100%;">
                                          </div>
                                    </div>
                                    <div class="row" style="padding-bottom: 10px;  margin-top: 20px; border-radius: 10px; border-width: 3px; box-shadow: 2px 2px 4px 2px grey; border: white;">
                                    <div class="col-md-7" >
                                     <h6>Goa the next stop for Maharashtra rebels’ 3G network </h6>   
                                    </div>
                                    <div class="col-md-5">
                                      <img src="<?= base_url('assets/website/images/PT.jpg');?>" style="width:100%; padding-top: 10px;">
                                    </div>
                               </div>

                                    <?php
                                  }
                              ?>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>