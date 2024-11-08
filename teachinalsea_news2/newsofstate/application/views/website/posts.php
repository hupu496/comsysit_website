<section class="NewsScroll" style="margin-bottom: 10px;">
      		<div class="container-fluid">
        		<div class="row">
           			<div class="col-12 col-md-2" style="text-align: center;"><h4 class="button" style="background: #ff6600;color: white;box-shadow: 6px 0px 0px 0px red;border-radius: 10px; width=" 100%;="">Breaking News : </h4></div>
            		<div class="col-12 col-md-10" style="text-align: center;">
              			<marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                			<span style="color: white">Financial News: A new company is born today at the stock market. Financial News: A new company is born today at the stock market. Financial News: A new company is born today at the stock market. Financial News: A new company is born today at the stock market. </span>
              			</marquee>
            		</div>
            	</div>
      		</div>
    	</section>
      <section>
      	<div class="container">
      		
      		<h2 >Posts</h2><hr style="border: 1px solid red;">
      		<div class="row">
      			<div class="col-md-12">
      				<div class="row">
                                    <?php if(!empty($post_news)){
                                        foreach ($post_news as $key => $value) {
                                          ?>
                                          <div class="col-md-3" style="padding-bottom:20px">
                                           <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" class="img-fluid" width="100%"></a>
                                          </div>
                                          <div class="col-md-9" style="padding-bottom:20px">
                                                <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><h4 ><?php echo $value['tittle'];?></h4></a>
                                                <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><p style="line-height: 17px;"><?php echo $value['straplines'];?></p></a>
                                          </div>

                                          <?php
                                        }

                                    }else{
                                          ?>
                                          <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/handcuff.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4 >Madhya Pradesh: Four men arrested for setting ablaze woman in Vidisha</h4>
                                          <p style="line-height: 17px;">In Madhya Pradesh’s Vidisha, four men set ablaze a woman under the influence of alcohol. The main accused has been identified as Amit Rai. The incident took place on June 28.</p>
                                    </div>
                                    <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/magic.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4>Agra ‘tantrik’ arrested for ‘sacrificing’ kid to take advantage of property row between 2 families</h4>
                                          <p>A man, who claimed to be a ‘tantrik’, was arrested in Agra, Uttar Pradesh, for allegedly ‘sacrificing’ a 2.5-year-old boy “to appease Devi Maa" in Jagner.</p>
                                    </div>
                                    <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/tala.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4>2 criminals injured in police encounter in UP’s Bulandshahr, pistols recovered</h4>
                                          <p style="line-height: 15px;">Two criminals were injured after an encounter broke out between them and police in UP’s Bulandshahr on Tuesday night. The accused were later arrested and two pistols were recovered from their possession.</p>
                                    </div>
                                    <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/minor.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4 style="line-height: 19px;">10-year-old girl raped, body dumped on railway track by relative in Gwalior</h4>
                                          <p style="line-height: 15px;">A minor girl was allegedly raped, and her body was dumped on the railway track by a relative who took her out for ice cream in Gwalior. The accused is currently absconding.</p>
                                    </div>
                                    <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/Crime11.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4>Man kills wife after argument in Jharkhand's Gumla</h4>
                                          <p>A 30-year-old man allegedly killed his wife following an argument in Gumla district of Jharkhand..</p>
                                    </div>
                                    <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/imageedi.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4>Mangaluru boy assaulted while returning from Madrasa by unidentified miscreants</h4>
                                          <p>A Muslim boy, returning from Madrasa, was assaulted by some unknown bike-borne miscreants on Monday night in Mangaluru district of Karnataka..</p>
                                    </div>
                                    <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/crimescene.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4>Nagpur man kills in-laws with axe over property dispute; leaves wife, daughter seriously injured</h4>
                                          <p style="line-height: 15px;">A man allegedly hacked to death his in-laws and seriously injured his wife and daughter over a property dispute in Amar Nagar area of Nagpur, a police official said on Saturday.</p>
                                    </div>
                                    <div class="col-md-3" style="padding-bottom:20px">
                                           <img src="<?= base_url('assets/website/images/Rep.jpg');?>" class="img-fluid" width="100%">
                                    </div>
                                    <div class="col-md-9" style="padding-bottom:20px">
                                          <h4>Former Tripura minister detained for molesting student in Delhi</h4>
                                          <p>Police have detained a former Tripura minister for molesting a girl in Delhi.</p>
                                    </div>
                                    <?php
                                    }?>
      					
      				</div>
      			</div>
      			</div>
      		</div>
      	</div>
      </section>