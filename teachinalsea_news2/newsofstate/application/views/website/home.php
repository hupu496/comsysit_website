<section class="">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  		<div class="carousel-inner">
		  		  	
		  		  	<div class="carousel-item active">
		  		  	  	<img src="<?= base_url('assets/website/images/ban2.jpg');?>" class="d-block w-100" alt="...">
		  		  	</div>
		  		  	<div class="carousel-item">
		  		  	  	<img src="<?= base_url('assets/website/images/ban1.jpg');?>" class="d-block w-100" alt="...">
		  		  	</div>
		  		  	<!-- <div class="carousel-item">
		  		  	  	<img src="images/add1.jpg" class="d-block w-100" alt="...">
		  		  	</div> -->
		  		</div>
		 		<button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
		 		   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		 		   <span class="sr-only">Previous</span>
		 		</button>
		 		<button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
		 		   <span class="carousel-control-next-icon" aria-hidden="true"></span>
		 		   <span class="sr-only">Next</span>
		 		</button>
			</div>	
		</section>
		<section class="NewsScroll" style="margin-bottom: 10px;">
      		<div class="container-fluid">
        		<div class="row">
           			<div class="col-12 col-md-2" style="text-align: center;"><h4 class="button" style="background: #ff6600;color: white;box-shadow: 6px 0px 0px 0px red;border-radius: 10px; width=" 100%;="">Breaking News : </h4></div>
            		<div class="col-12 col-md-10" style="text-align: center;">
              			<marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
                			<?php 
                				if(!empty($breakingnews)){
                					?><a href="<?php echo base_url('website/news_details/?slug='.$breakingnews[0]['slug']);?>"><span style="color: white"><?php echo $breakingnews[0]['straplines'];?></span></a><?php
                				}

                			?> </span>
              			</marquee>
            		</div>
            	</div>
      		</div>
    	</section>
		<!-- <div class="container">
			<img src="images/add1.jpg" alt="..." width="100%">
		</div> -->

		


    	<section class="about" style="background-image:url(./img/01.jpg);background-size: cover; ">
      		<div class="container-fluid">
       	 		<div class="row justify-content-center">
          			<div style="height:80px"></div>
          			<div class="col-md-3 abt">
            			<div class="pricing-column">
              				<div class="inner-box">
                				<div class="pricing-header"><h3 class="title">Top Stories</h3></div>
                				<marquee behavior="scroll" scrollamount="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()" height="370px">
                					<?php 
                						if(!empty($top_news)){
                							foreach ($top_news as $key => $value) {
                								if($key<5){
                								?>
                									<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><h5><?= $value['tittle'];?></h5></a>
                  					<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><p><?= $value['straplines'];?></p></a>
                  					<hr style="border:1px solid #ee002d;">
                								<?php
                							}
                						}
                						}
                					?>
                				</marquee>
              				</div>
            			</div>
          			</div>
          			<div class="col-md-3 abt">
          			  	<div class="pricing-column">
          			    	<div class="inner-box">
          			      		<div class="pricing-header"><h3 class="title">World</h3></div>
          			      		<marquee behavior="scroll" scrollamount="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()" height="370px">
          			      				<?php
          			      					if(!empty($world_news)){
          			      						foreach ($world_news as $key => $value) {
          			      							
          			      							?>
          			      							<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><h5><?= $value['tittle'];?></h5></a>
          			        						<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><p><?= $value['straplines'];?></p></a>
          			        						<hr style="border:1px solid #ee002d;">
          			      							<?php
          			      						}
          			      					}
          			      				?>
          			        	</marquee>
          			    	</div>
          			  	</div>
          			</div>
          			<div class="col-md-3 abt">
            			<div class="pricing-column">
            		  		<div class="inner-box">
            		    		<div class="pricing-header"><h3 class="title">TRENDING</h3></div>
            		    		<marquee behavior="scroll" scrollamount="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()" height="370px">
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
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/4.jpg');?>" width="100%">
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
              				</div>
            			</div>
          			</div>
        		</div>
      		</div>
    	</section>
		<div class="featured-post-area">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8">
						<div class="section-heading"><h6>Popular News</h6></div>
						<div class="row">
							<div class="col-12 col-lg-7">
								<div class="single-blog-post featured-post">
									<?php
										if(!empty($allnews)){
											// echo PRE;
											// print_r($allnews);die;
											?>
										<div class="post-thumb">
												<a href="<?php echo base_url('website/news_details/?slug='.$allnews[0]['slug']);?>"><img src="<?= base_url($allnews[0]['image']);?>" alt=""></a>
										</div>
									<div class="post-data">
										<a href="<?php echo base_url('website/news_details/?slug='.$allnews[0]['slug']);?>" class="post-catagory"><?= $allnews[0]['menu_name'];?></a>
										<a href="<?php echo base_url('website/news_details/?slug='.$allnews[0]['slug']);?>" class="post-title"><h6><?= $allnews[0]['tittle'];?></h6>
										</a>
										<div class="post-meta">
											<p class="post-author">By <a href="<?php echo base_url('website/news_details/?slug='.$allnews[0]['slug']);?>"><?= $allnews[0]['byline'];?></a></p>
											
										</div>
									</div>
									<?php
										}
									?>
									
								</div>
							</div>
							<div class="col-12 col-lg-5">
								<div class="single-blog-post featured-post-2">
									<?php
										if(!empty($allnews)){
											?>
										<div class="post-thumb">
												<a href="<?php echo base_url('website/news_details/?slug='.$allnews[1]['slug']);?>"><img src="<?= base_url($allnews[1]['image']);?>" alt=""></a>
										</div>
									<div class="post-data">
										<a href="<?php echo base_url('website/news_details/?slug='.$allnews[1]['slug']);?>" class="post-catagory"><?= $allnews[1]['menu_name'];?></a>
										<a href="<?php echo base_url('website/news_details/?slug='.$allnews[1]['slug']);?>" class="post-title"><h6><?= $allnews[1]['tittle'];?></h6>
										</a>
										<div class="post-meta">
											<p class="post-author">By <a href="<?php echo base_url('website/news_details/?slug='.$allnews[1]['slug']);?>"><?= $allnews[1]['byline'];?></a></p>
											
										</div>
									</div>
									<?php
										}
									?>
								</div>
								<div class="single-blog-post featured-post-2">
									<?php
										if(!empty($allnews)){
											?>
										<div class="post-thumb">
												<a href="<?php echo base_url('website/news_details/?slug='.$allnews[2]['slug']);?>"><img src="<?= base_url($allnews[2]['image']);?>" alt=""></a>
										</div>
									<div class="post-data">
										<a href="<?php echo base_url('website/news_details/?slug='.$allnews[2]['slug']);?>" class="post-catagory"><?= $allnews[2]['menu_name'];?></a>
										<a href="<?php echo base_url('website/news_details/?slug='.$allnews[2]['slug']);?>" class="post-title"><h6><?= $allnews[2]['tittle'];?></h6>
										</a>
										<div class="post-meta">
											<p class="post-author">By <a href="<?php echo base_url('website/news_details/?slug='.$allnews[2]['slug']);?>"><?= $allnews[2]['byline'];?></a></p>
										</div>
									</div>
									<?php
										}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="section-heading"><h6>Breaking News</h6></div>
						<?php
							if(!empty($breakingnews)){
							  foreach ($breakingnews as $key => $value) {
							  if($key>0 && $key<7){
							  ?>
							  	<div class="single-blog-post small-featured-post d-flex">
									<div class="post-thumb"><a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" alt=""></a></div>
									<div class="post-data">
										<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>" class="post-catagory"><?= $value['menu_name'];?></a>
										<div class="post-meta">
											<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>" class="post-title"><h6><?= $value['tittle'];?></h6></a>
											<p class="post-date"><span>7:00 AM</span> | <span>June 24</span></p>
										</div>
									</div>
								</div>
							  <?php
							  }
							  }
							}



						?>
						
						<!-- <div class="single-blog-post small-featured-post d-flex">
							<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/20.jpg');?>" alt=""></a></div>
							<div class="post-data">
								<a href="#" class="post-catagory">Politics</a>
								<div class="post-meta">
									<a href="#" class="post-title">
										<h6>Politics is the set of activities that are associated with making decisions in groups, or other forms of power relations among individuals, such as the distribution of resources or status.</h6>
									</a>
									<p class="post-date"><span>8:27 AM</span> | <span>June 24</span></p>
								</div>
							</div>
						</div> -->
						<!-- <div class="single-blog-post small-featured-post d-flex">
							<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/21.jpg');?>" alt=""></a></div>
							<div class="post-data">
								<a href="#" class="post-catagory">Health</a>
								<div class="post-meta">
									<a href="#" class="post-title">
										<h6>Health is a state of complete physical, mental and social well-being and not merely the absence of disease or infirmity.</h6>
									</a>
									<p class="post-date"><span>6:37 PM</span> | <span>June 24</span></p>
								</div>
							</div>
						</div> -->
						<!-- <div class="single-blog-post small-featured-post d-flex">
							<div class="post-thumb">
								<a href="#"><img src="<?= base_url('assets/website/img/bg-img/22.jpg');?>" alt=""></a>
							</div>
							<div class="post-data">
								<a href="#" class="post-catagory">New Book</a>
								<div class="post-meta">
									<a href="#" class="post-title">
										<h6>Margaret Drabble was a bright young star with five novels to her name in 1971, when she was talked into joining her old friend JB Priestley on the judging panel for a new book prize</h6>
									</a>
									<p class="post-date"><span>9:00 PM</span> | <span>June 24</span></p>
								</div>
							</div>
						</div> -->
						<!-- <div class="single-blog-post small-featured-post d-flex">
							<div class="post-thumb">
								<a href="#"><img src="<?= base_url('assets/website/img/bg-img/23.jpg');?>" alt=""></a>
							</div>
							<div class="post-data">
								<a href="#" class="post-catagory">Travel</a>
								<div class="post-meta">
									<a href="#" class="post-title"><h6>Travelling also keeps away stress, depression, and anxiety. It provides a new atmosphere taking out a person from their comfort zone. Overall, traveling broadens the horizon of a person</h6></a>
									<p class="post-date"><span>12:00 PM</span> | <span>June 24</span></p>
								</div>
							</div>
						</div> -->
						<!-- <div class="single-blog-post small-featured-post d-flex">
							<div class="post-thumb">
								<a href="#"><img src="<?= base_url('assets/website/img/bg-img/x24.jpg.pagespeed.ic.yyAy_XmKuM.jpg');?>" alt=""></a>
							</div>
							<div class="post-data">
								<a href="#" class="post-catagory">Lifestyle</a>
								<div class="post-meta">
									<a href="#" class="post-title"><h6>When Alia Bhatt married Ranbir Kapoor this summer, it was a Bollywood power pairing for the ages. Not only was the famed Kapoor family adding another talent to its flock, it was also set to be the combination of two forces. Both Alia and Ranbir are known as star performers in the industry today but until now, only the actress is renowned for her style chops.</h6></a>
									<p class="post-date"><span>1:00 AM</span> | <span>June 24</span></p>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<img src="<?= base_url('assets/website/images/add1.jpg');?>" alt="..." width="100%">
		</div>

		<section class="">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-8">
    					<div class="section-heading" style="margin-bottom:10px"><h6>Technology</h6></div>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
						    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Smartphones</a>
						  	</li>
						  	<li class="nav-item" role="presentation">
						    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Gadgets</a>
						  	</li>
						  	<li class="nav-item" role="presentation">
						    	<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Life Hacks</a>
						  	</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
									<div class="col-md-12">
										<section class="con">
											<div class="container">
												<!-- <center><h2 style="color:#e82e2f;">New SmartPhones</h2></center><hr> -->
												<div class="row">
													<div class="col-md-4">
														<!-- <h2></h2> -->
														<div class="row justify-content-center">
															<div class="col-md-1 col-1">
																<li style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><span class="how">1</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><h6>Samsung Galaxy S20 FE 5G</h6></li>
															</div>
															<div class="col-md-1 col-1">
																<li style="list-style: none"  data-target="#carouselExampleIndicators" data-slide-to="1"><span class="how">2</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li style="list-style: none"  data-target="#carouselExampleIndicators" data-slide-to="1"><h6>OnePlus Nord 2</h6></li>	
															</div>
															<div class="col-md-1 col-1">
																<li style="list-style: none"  data-target="#carouselExampleIndicators" data-slide-to="2"><span class="how">3</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li style="list-style: none"  data-target="#carouselExampleIndicators" data-slide-to="2"><h6>Mi 11X</h6></li>
															</div>
															<div class="col-md-1 col-1">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="3"><span class="how">4</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="3"><h6>Samsung Galaxy M12</h6></li>
															</div>
															<div class="col-md-1 col-1">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="4"><span class="how">5</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="4"><h6>Samsung Galaxy N12</h6></li>
															</div>
															<div class="col-md-1 col-1">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="5"><span class="how">6</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="5"><h6>Samsung Note N12</h6></li>
															</div>
															<div class="col-md-1 col-1">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="6"><span class="how">7</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="6"><h6>Apple Note N12</h6></li>
															</div>
															<div class="col-md-1 col-1">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="7"><span class="how">8</span></li>
															</div>
															<div class="col-md-11 col-11">
																<li  style="list-style: none" data-target="#carouselExampleIndicators" data-slide-to="7"><h6>Apple 13 Pro Max</h6></li>
															</div>
														</div>
													</div>
													<div class="col-md-3">
														<div class="banner">
															<div class="text-center"><!-- <img src="images/phone.png" > --></div>
     														<div id="carouselExampleIndicators" class="carousel slide carousel-parent" data-ride="carousel" data-pause="false">
		  														<div class="carousel-inner">
		    														<div class="carousel-item active">
		      															<img src="<?= base_url('assets/website/images/m1.png');?>" width="50%" class="d-block" alt="ban1">
		    														</div>
		    														<div class="carousel-item">
		       															<img src="<?= base_url('assets/website/images/m2.png');?>"  width="50%" class="d-block" alt="ban2">
		    														</div>
		    														<div class="carousel-item">
		       															<img src="<?= base_url('assets/website/images/m3.png');?>"   width="50%"class="d-block" alt="ban3">
		    														</div>
									
		    														<div class="carousel-item">
		       															<img src="<?= base_url('assets/website/images/m4.png');?>"   width="50%" class="d-block" alt="ban3">
		    														</div>
		    														<div class="carousel-item">
		       															<img src="<?= base_url('assets/website/images/m5.png');?>"   width="50%" class="d-block" alt="ban3">
		    														</div>
		    														<div class="carousel-item">
		       															<img src="<?= base_url('assets/website/images/m6.png');?>"   width="50%" class="d-block" alt="ban3">
		    														</div>
		    														<div class="carousel-item">
		       															<img src="<?= base_url('assets/website/images/m7.png');?>"   width="50%" class="d-block" alt="ban3">
		    														</div>
		    														<div class="carousel-item">
		       															<img src="<?= base_url('assets/website/images/m8.png');?>"   width="50%" class="d-block" alt="ban3">
		    														</div>
		  														</div>
															</div>
    													</div>
													</div>
													<div class="col-md-5">
														<section class="part">
        													<div class="container-fluid">
        														<div class="row">
                													<div class="col-md-12">                 
                    													<div class="owl-carousel owl-theme"id="carouselE">
                        													<div class="item">
                            													<div class="single-blog-post featured-post-2">
																					<div class="post-data">
																						<a href="#" class="post-catagory">Nokia Style+ With 48-Megapixel Primary Camera, 4,900mAh Battery Spotted on FCC</a>
																						<div class="post-meta">
																							<h6>Nokia Style+ has been allegedly making the rounds at various certification sites indicating that the company might soon officially unveil this handset. Now, it has been reportedly spotted on the US' Federal Communications Commission (FCC) database. The supposed listing reveals key specifications of the handset as well as its design details. </h6>
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
																							<h6>Huawei Nova 10 series is all set to launch on July 4 in China. Huawei, via Weibo, has confirmed the arrival of the new Nova series smartphones in its home country. The upcoming lineup is expected to include Huawei Nova 10 and the Huawei Nova 10 Pro models and will succeed Huawei Nova 9 series that debuted last year. </h6>
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
																							<h6>Samsung Galaxy M52 5G price in India has dropped by Rs. 9,000 under a limited-period offer. The Samsung phone comes with features including a 120Hz Super AMOLED Plus display and carries an octa-core Qualcomm Snapdragon 778G SoC.</h6>
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
																						<a href="#" class="post-catagory">6000mAh, FHD+, 8GB RAM, All Under 11k. Meet Galaxy F13 That Is Set to Dominate the Market</a>
																						<div class="post-meta">
																							<h6>Samsung's new Galaxy F13 is the latest addition to the company's popular Galaxy F series in India. The super stylish new Galaxy F13 delivers the best of everything to India's Gen MZ. The all-new Galaxy F13 is designed to be your ideal partner for uninterrupted entertainment on the go.</h6>
																							<div class="d-flex align-items-center">
																								<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
																								<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
																							</div>
																						</div>
																					</div>
																				</div>
                        													</div>
                        												</div>
                													</div>
            													</div>
        													</div>
    													</section>	
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row">
									<div class="col-md-6">
										<div class="single-blog-post featured-post-2">
											<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/x17.jpg.pagespeed.ic.0e_lC2CVg6.jpg');?>" alt=""></a></div>
											<div class="post-data">
												<a href="#" class="post-catagory">Finance</a>
												<div class="post-meta">
													<a href="#" class="post-title"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac.</h6>
													</a>
													<div class="d-flex align-items-center">
														<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
														<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="single-blog-post featured-post-2">
											<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/18.jpg');?>" alt=""></a></div>
											<div class="post-data">
												<a href="#" class="post-catagory">Finance</a>
												<div class="post-meta">
													<a href="#" class="post-title"><h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac...</h6>
													</a>
													<div class="d-flex align-items-center">
														<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
														<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<marquee behavior="scroll" scrollamount="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()" height="370px">
            		      			<div class="row">
            		      				<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/1.jpg');?>" width="100%">
            		      			  	</div>
            		      			  	<div class="col-md-8">
            		      			    	<h3>Fiction</h3>
            		      			    	<p style="text-align:left;">Guinness alert: Guinness World Records has announced its youngest publisher who is all of five years and 211 days. Bella J Dark from Weymouth, UK has become the world’s youngest person to publish a book (female).</p>
            		      			  	</div>

            		      			  	<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/2.jpg');?>" width="100%">
            		      			  	</div>
            		      			 	<div class="col-md-8">
            		      			    	<h3>Real Estate</h3>
            		      			    	<p style="text-align:left;">Reasons behind downfall of real estate market : The market has witnessed a marked decline in the number of people buying.The concept of affordability also needs to be analysed at the city level.</p>
            		      			  	</div>
            		      			  	<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/3.jpg');?>" width="100%">
            		      			  	</div>
            		      			  	<div class="col-md-8">
            		      			    	<h3>Roshni kumari</h3>
            		      			    	<p style="text-align:left;">B.ED, Finance , Ranchi</p>
            		      			  	</div>
            		      			  	<div class="col-md-4">
            		      			    	<img src="<?= base_url('assets/website/img/bg-img/4.jpg');?>" width="100%">
            		      			  	</div>
            		      			  	<div class="col-md-8">
            		      			    	<h3>Rini kumari</h3>
            		      			    	<p style="text-align:left;">B.ED, Finance , Ranchi</p>
            		      			  	</div>
                    					<div class="col-md-4">
                    					  	<img src="<?= base_url('assets/website/img/bg-img/5.jpg');?>" width="100%">
                    					</div>
                    					<div class="col-md-8">
                    					  	<h3>payal kumari</h3>
                    					  	<p style="text-align:left;">B.ED, Finance , Ranchi</p>
                    					</div>
                    					<div class="col-md-4">
                    					  	<img src="<?= base_url('assets/website/img/bg-img/6.jpg');?>" width="100%">
                    					</div>
                    					<div class="col-md-8">
                    					  	<h3>Sonam kumari</h3>
                    					  	<p style="text-align:left;">B.ED, Finance , Ranchi</p>
                    					</div>
                  					</div>
                				</marquee>	
							</div>
						</div>
    				</div>
    				<div class="col-md-4">
    					<div class="section-heading" style="margin-bottom:10px"><h6>Movies</h6></div>
    					<marquee behavior="scroll" scrollamount="5" direction="up" onmouseover="this.stop()" onmouseout="this.start()" height="420px">
            		      	<div class="row">
            		      		<?php
            		      			if(!empty($intertainment)){
            		      				foreach ($intertainment as $key => $value) {
            		      					?>
            		      					<div class="col-md-4">
            		      	    			<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>" class="post-catagory"><img src="<?= base_url('assets/website/img/bg-img/1.jpg');?>" width="100%"></a>
            		      	  				</div>
            		      	  				<div class="col-md-8">
            		      	    				<a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>" class="post-catagory"><h6><?= $value['tittle'];?></h6>
            		      	    				<p style="text-align:left;"><?= $value['straplines'];?></p></a>
            		      	  				</div>
            		      					<?php
            		      				}
            		      			}


            		      		?>
            		      		

            		      	  	<!-- <div class="col-md-4">
            		      	    	<img src="<?= base_url('assets/website/img/bg-img/2.jpg');?>" width="100%">
            		      	  	</div>
            		      	 	<div class="col-md-8">
            		      	    	<h6>Real Estate</h6>
            		      	    	<p style="text-align:left;">Reasons behind downfall of real estate market : The market has witnessed a marked decline in the number opeople buying.The concept of affordability also needs to be analysed at the city level.</p>
            		      	  	</div>

            		      	  	<div class="col-md-4">
            		      	    	<img src="<?= base_url('assets/website/img/bg-img/3.jpg');?>" width="100%">
            		      	  	</div>
            		      	  	<div class="col-md-8">
            		      	    	<h6>Bitcoin Clings to $21,000 While Polygon and Avalanche See Major Gains</h6>
            		      	    	<p style="text-align:left;">Bitcoin and the wider crypto market hasn't seen a massive jump in value over the past 24 hours, but things have been on the up overall with the global crypto market capitalisation rising day-on-day by a healthy percentage. As things stand, the price of the world largest cryptocurrency by market value is hovering around the $21,000 (roughly Rs. 16.5 lakh) mark across global exchanges while Indian exchange CoinSwitch Kuber values Bitcoin at $22,175 (roughly Rs. 17.3 lakh), up by 2.96 percent in the past 24 hours.</p>
            		      	  	</div>

            		      	  	<div class="col-md-4">
            		      	    	<img src="<?= base_url('assets/website/img/bg-img/4.jpg');?>" width="100%">
            		      	  	</div>
            		      	  	<div class="col-md-8">
            		      	    	<h6>"I Ran Away, Some (MLAs) Are Signing Under Pressure": Sena MLA Kailas Patil</h6>
            		      	    	<p style="text-align:left;">Shiv Sena legislator Kailas Patil, who had accompanied party rebel Eknath Shinde to Surat, today alleged that some people are signing up with the rebel camp under pressure. "Some people are signing under pressure. Whatever decision the Chief Minister takes, we are with him," Mr Patil told NDTV.</p>
            		      	  	</div> -->
                    			
                  			</div>
                		</marquee>
    				</div>
    			</div>
    		</div>
    	</section>



		<div class="popular-news-area section-padding-80-50">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-lg-8">
						<div class="section-heading"><h6>Story News</h6></div>
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="single-blog-post style-3">
									<div class="post-thumb">
										<a href="#"><img src="<?= base_url('assets/website/img/bg-img/12.jpg');?>" alt=""></a>
									</div>
									<div class="post-data">
										<a href="#" class="post-catagory">Finance</a>
										<a href="#" class="post-title"><h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
										</a>
										<div class="post-meta d-flex align-items-center">
											<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
											<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="single-blog-post style-3">
									<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/13.jpg');?>" alt=""></a></div>
									<div class="post-data">
										<a href="#" class="post-catagory">Finance</a>
										<a href="#" class="post-title"><h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
										</a>
										<div class="post-meta d-flex align-items-center">
											<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
											<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="single-blog-post style-3">
									<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/14.jpg');?>" alt=""></a></div>
									<div class="post-data">
										<a href="#" class="post-catagory">Finance</a>
										<a href="#" class="post-title"><h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
										</a>
										<div class="post-meta d-flex align-items-center">
											<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
											<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="single-blog-post style-3">
									<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/15.jpg');?>" alt=""></a></div>
									<div class="post-data">
										<a href="#" class="post-catagory">Finance</a>
										<a href="#" class="post-title"><h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6></a>
										<div class="post-meta d-flex align-items-center">
											<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
											<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="single-blog-post style-3">
									<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/13.jpg');?>" alt=""></a></div>
									<div class="post-data">
										<a href="#" class="post-catagory">Finance</a>
										<a href="#" class="post-title"><h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
										</a>
										<div class="post-meta d-flex align-items-center">
											<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
											<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="single-blog-post style-3">
									<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/3.jpg');?>img/bg-img/14.jpg" alt=""></a></div>
									<div class="post-data">
										<a href="#" class="post-catagory">Finance</a>
										<a href="#" class="post-title"><h6>Dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
										</a>
										<div class="post-meta d-flex align-items-center">
											<a href="#" class="post-like"><img src="<?= base_url('assets/website/img/core-img/xlike.png.pagespeed.ic.Kq2Is4sPF6.png');?>" alt=""> <span>392</span></a>
											<a href="#" class="post-comment"><img src="<?= base_url('assets/website/img/core-img/xchat.png.pagespeed.ic.nUR341g95A.png');?>" alt=""> <span>10</span></a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="section-heading"><h6>Info</h6></div>
						<div class="popular-news-widget mb-30">
							<h3>4 Most Popular News</h3>
							<div class="single-popular-post">
								<a href="#"><h6><span>1.</span> Maharashtra political crisis: Eknath Shinde, camping in BJP-ruled Assam with rebel MLAs, has demanded the Sena break its alliance with the Congress and the Nationalist Congress Party.</h6></a>
								<p>June 14, 2022</p>
							</div>
							<div class="single-popular-post">
								<a href="#"><h6><span>2.</span> Gujarat riots case: The petition had been filed by Zakia Jafri, wife of Congress MP Ehsan Jafri, who was among the 68 people killed in what came to be known as the Gulbarg Society massacre.</h6></a>
								<p>June 13, 2022</p>
							</div>
							<div class="single-popular-post">
								<a href="#"><h6><span>3.</span> Mahesh Baldi and Vinod Agarwal, both independent MLAs, have move notice for the removal of Maharashtra Deputy Speaker Narhari Zirwal, who is from NCP.</h6></a>
								<p>June 12, 2022</p>
							</div>
							<div class="single-popular-post">
								<a href="#"><h6><span>4.</span> For Droupadi Murmu, Running For President, A Show Of Strength Led by PM. Besides the prime minister, senior Union Ministers Rajnath Singh, Amit Shah and BJP president J P Nadda were signatories on the nomination papers.</h6></a>
								<p>June 11, 2022</p>
							</div>
						</div>
						<div class="newsletter-widget">
							<h4>Newsletter</h4>
							<p>Subscribe to our Official Newsletter NewsOfState</p>
							<form action="#" method="post">
								<input type="text" name="text" placeholder="Name">
								<input type="email" name="email" placeholder="Email">
								<button type="submit" class="btn w-100">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<img src="<?= base_url('assets/website/images/add1.jpg');?>" alt="..." width="100%">
		</div>
<!-- <div class="video-post-area bg-img bg-overlay" style="background-image:url(img/bg-img/xbg1.jpg.pagespeed.ic.B3o-TzJHGE.jpg)">
<div class="container">
<div class="row justify-content-center">

<div class="col-12 col-sm-6 col-md-4">
<div class="single-video-post">
<img src="<?= base_url('assets/website/img/bg-img/3.jpg');?>img/bg-img/video1.jpg" alt="">

<div class="videobtn">
<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4">
<div class="single-video-post">
<img src="img/bg-img/video2.jpg" alt="">

<div class="videobtn">
<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-4">
<div class="single-video-post">
<img src="img/bg-img/video3.jpg" alt="">

<div class="videobtn">
<a href="https://www.youtube.com/watch?v=5BQr-j3BBzU" class="videoPlayer"><i class="fa fa-play" aria-hidden="true"></i></a>
</div>
</div>
</div>
</div>
</div>
</div> -->


	<div class="editors-pick-post-area section-padding-80-50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-7 col-lg-9">
					<div class="section-heading"><h6>Editor’s Pick</h6></div>
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="<?= base_url('assets/website/img/bg-img/1.jpg') ?>" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>Major Paper Crisis In Pak, Students May Not Get New Books In Next Session</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">February 11, 2022</a></div></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="img/bg-img/5.jpg" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>In Uddhav Thackeray vs Rebels, A Legal Clash Now Blazes</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">March 21, 2022</a></div></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="img/bg-img/6.jpg" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>None Can Compare To How Ravishing Mouni Roy Looks In A Shimmering Black Sequin Lehenga</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">April 09, 2022</a></div></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="img/bg-img/2.jpg" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>Real Estate Firm Fined ₹ 100 Crore By Pollution Control Board In Gurgaon</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">May 01, 2022</a></div></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="img/bg-img/3.jpg" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>BTC, ETH Open With Losses Despite Majority Altcoins Seeing Gains, Market Remains Volatile</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">June 11, 2022</a></div></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="img/bg-img/4.jpg" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>Nokia Style+ With 48-Megapixel Primary Camera, 4,900mAh Battery Spotted on FCC: Report</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">June 12, 2022</a></div></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="img/bg-img/5.jpg" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>Apple Dives Deeper Into Autos With Software For Car Dashboard</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">June 13, 2022</a></div></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="single-blog-post">
								<div class="post-thumb"><a href="#"><img src="img/bg-img/6.jpg" alt=""></a></div>
								<div class="post-data">
									<a href="#" class="post-title"><h6>None Can Compare To How Ravishing Mouni Roy Looks In A Shimmering Black Sequin Lehenga</h6></a>
									<div class="post-meta"><div class="post-date"><a href="#">June 14, 2022</a></div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 col-lg-3">
					<div class="section-heading"><h6>World News</h6></div>
					<div class="single-blog-post style-2">
						<div class="post-thumb"><a href="#"><img src="img/bg-img/7.jpg" alt=""></a></div>
						<div class="post-data">
							<a href="#" class="post-title"><h6>JEE Main 2022 Analysis: Students Found 'Maths Lengthy'; Check Reactions</h6></a>
							<div class="post-meta"><div class="post-date"><a href="#">February 11, 2022</a></div></div>
						</div>
					</div>
					<div class="single-blog-post style-2">
						<div class="post-thumb"><a href="#"><img src="img/bg-img/8.jpg" alt=""></a></div>
						<div class="post-data">
							<a href="#" class="post-title"><h6>Google Wants To Know What Dogs Would Use Internet For. Twitter Responds</h6></a>
							<div class="post-meta"><div class="post-date"><a href="#">February 11, 2022</a></div></div>
						</div>
					</div>
					<div class="single-blog-post style-2">
						<div class="post-thumb"><a href="#"><img src="img/bg-img/9.jpg" alt=""></a></div>
						<div class="post-data">
							<a href="#" class="post-title"><h6>Crypto's Richest Man Moves To Dubai As US Regulators Target Exchange</h6></a>
							<div class="post-meta"><div class="post-date"><a href="#">February 11, 2022</a></div></div>
						</div>
					</div>
					<div class="single-blog-post style-2">
						<div class="post-thumb"><a href="#"><img src="img/bg-img/10.jpg" alt=""></a></div>
						<div class="post-data">
							<a href="#" class="post-title"><h6>ThinkCyber, Deepview Collaborate for Futuristic Cybersecurity Training in India</h6></a>
							<div class="post-meta"><div class="post-date"><a href="#">February 11, 2022</a></div></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>