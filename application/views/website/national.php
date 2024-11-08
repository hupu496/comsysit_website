
<section class="aa">
	        <div class="container-fluid">
	        	<img src="<?= base_url('assets/website/images/news-events.jpg');?>" style="padding-bottom: 25px;">
		         <div class="row">
		         	<div class="col-md-4">
		       	       <div class="row">
		       	    <?php 
		       	       		if(!empty($national_news)){
		       	       			foreach ($national_news as $key => $value) {
		       	       				if($value['top_news_status']==1){
		       	       				?>
		       	       				<div class="col-md-12 col-6">
					        			<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?php echo base_url($value['image']);?>" alt="" width="100%">
					        	 		<h5><?= $value['tittle'];?></h5>
					       	    		 <p style="padding-left: 10px; line-height: 15px;"><?= 'Edited by '.$value['byline'].' '.date('M d, Y',strtotime($value['news_date']));?></p>
					       	    		 <p style="text-decoration-line: 0px;"><?php echo $value['straplines'];?></p></a>
					       	    		 
					       			</div>
		       	       				<?php
		       	       				}
		       	       			}
		       	       		}
		       	       	?> 
		       	       	<!-- <div class="col-md-12 col-6">
					       		 <img src="<?= base_url('assets/website/images/udai.jpg');?>" alt="" width="100%">
					        	 <h5>Uddhav Thackeray Resigns. Sena Rebels May Meet Governor Today</h5>
					       	    <p style="padding-left: 10px; line-height: 15px;">Edited by Akhil Kumar | Wednesday June 29,  2022,  New Delhi<br> Uddhav Thackeray, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday<br> after a week.</p>
					       	</div>  -->
					       
					       	<!-- <div class="col-md-12 col-6">
					       		 <img src="<?= base_url('assets/website/images/udai.jpg');?>" alt="" width="100%">
					        	 <h5>Uddhav Thackeray Resigns. Sena Rebels May Meet Governor Today</h5>
					       	    <p style="padding-left: 10px; line-height: 15px;">Edited by Akhil Kumar | Wednesday June 29,  2022,  New Delhi<br> Uddhav Thackeray, a father of two sons, had been avoiding going to this shop because of the threats, his wife said. He had gone to his shop yesterday<br> after a week.</p>
					       	</div> -->
					    </div>
				    </div>
	     <div class="col-md-8">
	     	<div class="row">
		        <div class="col-md-6">
		       		<div class="row">

		       			<?php
		       				if(!empty($national_news)){
		       					foreach ($national_news as $key => $value) {
		       						?>
		       					<div class="col-md-4">
						    		<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" alt="" width="100%"></a>
					     		</div>
				        		<div class="col-md-8">
				        			<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><h5><?= $value['tittle']?></h5>
				       	     		<p style="padding-left: 10px; line-height: 15px;"><?= $value['byline'].' | '.date('D M d, Y,',strtotime($value['news_date'])).'<br>'.$value['straplines'];?><br> after a week.</p>
				       			</div></a><?php
		       					}
		       				}
		       				else{?>
		       						<div class="col-md-4">
						        <img src="<?= base_url('assets/website/images/rashtrapati.webp');?>" alt="" width="100%">
					       	</div>
					       	<div class="col-md-8">
					        	<h5>Supreme Court Turns Down Pleas Challenging Validity Of Legal Scheme For Presidential Poll</h5>
					       	     <p style="padding-left: 10px; line-height: 15px;">Press Trust of India | Wednesday June 29, 2022, New Delhi
                                  A vacation bench comprising justices Surya Kant and JB Pardiwala was hearing separate pleas filed by Delhi resident Bam Bam Maharaj Nowhattia and Dr Mandati Thirupathi Reddy, a native of Prakasam district in Andhra Pradesh, on the issue.</p>
					       	</div>
					       	<div class="col-md-4">
						       <img src="<?= base_url('assets/website/images/mamta.webp');?>" alt="" width="100%">
					       	</div>
					       	 <div class="col-md-8">
					        	<h5>Mamata Banerjee Condemns Udaipur Killing, Says Violence Unacceptable</h5>
					       	     <p style="padding-left: 10px; line-height: 15px;">Press Trust of India | Wednesday June 29, 2022, New Delhi
                                 Senior advocate KK Venugopal has agreed to continue as the Attorney General for India for three more months following a request by the central government, government sources said on Wednesday.</p>
					       	 </div>
					       	 <div class="col-md-4" style="margin-top: 15px;">
						       	<img src="<?= base_url('assets/website/images/general.webp');?>" alt="" width="100%">
					       	 </div>
					       	<div class="col-md-8">
					           <h5>KK Venugopal Agrees To Continue As Attorney General For 3 More Months</h5>
					       	    <p style="padding-left: 10px; line-height: 15px;">Press Trust of India | Wednesday June 29, 2022, Kolkata
                                 West Bengal Chief Minister Mamata Banerjee on Wednesday condemned the killing of a tailor in Rajasthan's Udaipur and said violence and extremism are unacceptable..</p>
					       	</div>
					       	<div class="col-md-4" style="margin-top: 15px;">
						       	<img src="<?= base_url('assets/website/images/rajast.webp');?>" alt="" width="100%">
					       	</div>
					       	<div class="col-md-8">
					           <h5>Udaipur Murder: Cops Reject 'Killers Served Biryani In Jail' Claim</h5>
					       	    <p style="padding-left: 10px; line-height: 15px;">Reported by Harsha Kumari Singh, Edited by Debanish Achom | Wednesday June 29, 2022, Jaipur
                                 A media report that claimed the two accused in the murder of a tailor in Udaipur over a post on Prophet Muhammad would be served biryani in jail has been called out as fake by the Rajasthan Police.</p>
					       	    </div>
					       	<div class="col-md-4" style="margin-top: 15px;">
						       	<img src="<?= base_url('assets/website/images/teesta.webp');?>" alt="" width="100%">
					       	</div>
					       	<div class="col-md-8">
					            <h5>"Interference": India Slams UN Official's Support To Testa Setalvad, Ex-Cops</h5>
					       	     <p style="padding-left: 10px; line-height: 15px;">Edited by Aarish Chhabra | Wednesday June 29, 2022, New Delhi
                                  Activist Testa Setalwad arrested after Supreme Court reiterated clearance given to PM Modi in Gujarat riots, criticised those "who kept pot boiling"</p>
					       		  </div>
					       	<div class="col-md-4" style="margin-top: 15px;">
						       	<img src="<?= base_url('assets/website/images/udaipur.png');?>" alt="" width="100%">
					       		</div>
					       	<div class="col-md-8">
					        	<h5>Udaipur Tailor, Murdered On Camera, Cremated Amid Tight Security</h5>
					       	     <p style="padding-left: 10px; line-height: 15px;">Press Trust of India | Wednesday June 29, 2022, Udaipur
                                 Kanhaiya Lal, whose brutal murder triggered communal tension in Udaipur, was cremated in the presence of a large number of people even as curfew remained clamped in parts of the city.</p>
					       	</div>



		       					<?php

		       				}



		       			?>
		       			
					       
		       	    </div>
		       </div>
		       <div class="col-md-6 abt">
            	  <div class="pricing-column" style="border: 2px solid red;">
            		  <div class="inner-box">
            		      <div class="pricing-header"><h3 class="title">TRENDING</h3></div>
            		    	 <div class="col-md-12">                 
                               <div class="owl-carousel owl-theme"id="carouselE">
                              	 <div class="item">
                                 	<div class="single-blog-post featured-post-2">
					       			  <div class="post-data">
					       				 <a href="#" class="post-catagory">Nokia Style+ With 48-Megapixel Primary Camera, 4,900mAh Battery Spotted on FCC</a>
					       				 <div class="post-meta">
					       					 <h6>Nokia Style+ has been allegedly making the rounds at various certification sites indicating that the company might soon officially       handset. Now, it has been reportedly spotted on the   US' Federal Communications Commission (FCC) database. The supposed listing       specifications of the handset as well as its design details. </h6>
					       					   <div class="d-flex align-items-center">
					       						<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
					       						<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
					       					   </div>
					       				  </div>
					       			   </div>
					       		   </div>
                        	   </div>

                        	<div class="item">
                            	<div class="single-blog-post featured-post-2">
									<div class="post-data">
										<a href="#" class="post-catagory">Huawei Nova 10 Series Launch Set for July 4, Nova 10 Pro With Snapdragon 778G Spotted on Geekbench</a>
										<div class="post-meta">
											<h6>Huawei Nova 10 series is all set to launch on July 4 in China. Huawei, via Weibo, has confirmed the arrival of the new Nova series in its home country. The upcoming lineup is expected to include Huawei Nova 10 and the Huawei Nova 10 Pro models and will succeed Huseries that debuted last year. </h6>
											<div class="d-flex align-items-center">
												<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
												<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
											</div>
										</div>
									</div>
								</div>
                        	</div>
                        	<div class="item">
                            	<div class="single-blog-post featured-post-2">
									<div class="post-data">
										<a href="#" class="post-catagory">Samsung Galaxy M52 5G Price in India Discounted by Rs. 9,000</a>
										<div class="post-meta">
											<h6>Samsung Galaxy M52 5G price in India has dropped by Rs. 9,000 under a limited-period offer. The Samsung phone comes with features 120Hz Super AMOLED Plus display and carries an octa-core Qualcomm Snapdragon 778G SoC.</h6>
											<div class="d-flex align-items-center">
												<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
												<a href="#" class="post-comment"><img src="<?= base_url('website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
											</div>
										</div>
									</div>
								</div>
                        	</div>
                        	<div class="item">
                             class="single-blog-post featured-post-2">
								<div class="post-data">
									<a href="#" class="post-catagory">6000mAh, FHD+, 8GB RAM, All Under 11k. Meet Galaxy F13 That Is Set to Dominate the Market</a>
									<div class="post-meta">
										<h6>Samsung's new Galaxy F13 is the latest addition to the company's popular Galaxy F series in India. The super stylish new Galaxy the best of everything to India's Gen MZ. The all-new Galaxy F13 is designed to be your ideal partner for uninterrupted entertainment o>
										<div class="d-flex align-items-center">
											<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
											<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
										</div>
									</div>
								</div>
							</div>
                       </div>
                   </div>
               </div><hr style="border:1px solid red">
            		    		<marquee behavior="scroll" scrollamount="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()" height="690px">
            		      			<div class="row">
            		      				<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/1.jpg');?>" width="100%">
            		      			  	</div>
            		      			  	<div class="col-md-8">
            		      			    	<h5>Fiction</h5>
            		      			    	<p style="text-align:left;">Guinness alert: Guinness World Records has announced its youngest publisher who is all of five years and 211 days. Bella J Dark from Weymouth, UK has become the world’s youngest person to publish a book (female).</p>
            		      			  	</div>
            		      			  	<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/2.jpg');?>" width="100%">
            		      			  	</div>
            		      			 	<div class="col-md-8">
            		      			    	<h5>Real Estate</h5>
            		      			    	<p style="text-align:left;">Reasons behind downfall of real estate market : The market has witnessed a marked decline in the number of people buying.The concept of affordability also needs to be analysed at the city level.</p>
            		      			  	</div>
            		      			  	<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/3.jpg');?>" width="100%">
            		      			  	</div>
            		      			  	<div class="col-md-8">
            		      			    	<h5>Politics</h5>
            		      			    	<p style="text-align:left;">Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations among individuals, such as the distribution of resources or status.</p>
            		      			  	</div>
            		      			  	<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/4.jpg')?>" width="100%">
            		      			  	</div>
            		      			  	<div class="col-md-8">
            		      			    	<h5>Ammendement in Labour Law from July 1</h5>
            		      			    	<p style="text-align:left;">The in-hand salary, contribution to Employees' Provident Fund and working hours could change significantly as the Centre plans to implement new labour laws from July 1.</p>
            		      			  	</div>
                    					<div class="col-md-4">
                    					  	<img src="<?= base_url('assets/website/img/bg-img/5.jpg');?>" width="100%">
                    					</div>
                    					<div class="col-md-8">
                    					  	<h5>"Eknath Shinde's Son An MP, Yet My Son Is Targeted": Uddhav Thackeray</h5>
                    					  	<p style="text-align:left;">Mumbai: Uddhav Thackeray, reduced to a minority in his own party by a stunning revolt by a former aide, said today the Shiv Sena rebels are "trying to break the party" and added: "Why would I feel bad about those who have left?"</p>
                    					</div>
                    					<div class="col-md-4">
                    					  	<img src="<?= base_url('assets/website/img/bg-img/6.jpg');?>" width="100%">
                    					</div>
                    					<div class="col-md-8">
                    					  	<h5>As Gautam Adani Turns 60, His Wife Shares Throwback Pic With Special Note</h5>
                    					  	<p style="text-align:left;">Industrialist Gautam Adani turned 60 today and wishes poured in from all quarters. On the occasion, Mr Adani, Asia's richest person and the chairman and founder of the Adani Group, received a special note attached to a throwback photo from his wife Priti Adani.</p>
                    					</div>
                  					</div>
                				</marquee>
                		    ]  </div>
            		     	</div>
          			      </div>
		       			</div>	
		       		</div>
		       	 </div>
	        </div>
       </section>