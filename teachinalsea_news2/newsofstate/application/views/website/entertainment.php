<section>
  <div class="container">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="row" >
        <div class="col-12 col-md-12 col-lg-3">
          <h2 style="color: red;">Trending Nows<span class="tnews"></span></h2><hr style="color: red; border: 1px solid red;">
          <div class="row">
            <?php 
              if(!empty($entertainment_news)){
                foreach ($entertainment_news as $key => $value){
                  if($key<5){
                    ?>
                    <div class="col-12 col-md-12 col-lg-6">
                      <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" class="d-block w-100" alt="...1"></a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                     <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><h6><?= $value['tittle'];?></h6></a>
                   </div>
                    <?php
                  }
                }
              }
              else{
                    ?>
                    <div class="col-12 col-md-12 col-lg-6">
                      <img src="<?= base_url('assets/website/images/zz.webp');?>" class="d-block w-100" alt="...1">
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                      <h6>Shanna Moakler Breaks Silence on Ex Travis Barker's Hospitalization</h6>
                    </div>
                   <div class="col-12 col-md-12 col-lg-6">
                      <img src="<?= base_url('assets/website/images/z2.jpg');?>" class="d-block w-100" alt="...1">
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                      <h6>Sharna Burgess Gives Birth, Welcomes Baby With Brian Austin Green</h6>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                     <img src="<?= base_url('assets/website/images/z4.webp');?>" class="d-block w-100" alt="...1">
                   </div>
                   <div class="col-12 col-md-12 col-lg-6">
                      <h6>Why Kristin Cavallari Calls Jay Cutler Divorce the "Best Thing"</h6>
                   </div>
                    <div class="col-12 col-md-12 col-lg-6">
                      <img src="<?= base_url('assets/website/images/z13.webp');?>" class="d-block w-100" alt="...1">
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                      <h6 style="line-height: 18px;">Kim Kardashian, 2022 MET Gala, Red Carpet Fashion4
                      Kim Kardashian Responds to SKKN Trademark Lawsuit</h6>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                      <img src="<?= base_url('assets/website/images/z15.webp');?>" class="d-block w-100" alt="...1">
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                     <h6>Pete Davidson Sets the Record Straight on Olivia O’Brien Dating Rumorst</h6>
                   </div>
                   <?php
                  }

            ?>
            
          </div>
        </div>
          <div class="col-12 col-md-12 col-lg-6" style="background:#4eade5;padding:20px">
            <h2>Today's Hot Photos</h2>
            <div id="carouselExampleControl" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url('assets/website/images/z7.webp');?>" class="d-block w-100" alt="...1">
                    <h3>Dylan Llewellyn & Nicola Coughlan</h3>
                    
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/website/images/z9.jpg');?>" class="d-block w-100" alt="...2">
                    <h3>Milo Ventimiglia & Rachel Brosnahan</h3>
                   
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/website/images/z7.jpg');?>" class="d-block w-100" alt="...3">
                    <h3>Elizabeth Olsen</h3>
                   
                  </div>
                </div>
              <button class="carousel-control-prev" type="button" data-target="#carouselExampleControl" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-target="#carouselExampleControl" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </button>
          </div>
      </div>
      <div class="col-12 col-md-12 col-lg-3">
        <h5>Big Time Rush's Kendall Schmidt Engaged to Girlfriend Mica
      Big Time Rush’s Kendall Schmidt Engaged to Girlfriend Mica</h5>
        <img src="<?= base_url('assets/website/images/z5.webp');?>" alt="...img" class="d-block w-100">
        <h5 style="padding-top: 15px;">RHUGT Ex-Wives Club Power Rankings: Round 1</h5>
        <h5 style="padding-top: 15px;">Anne Hathaway Relates Devil Wears Prada Story to Abortion Rights</h5>
        <hr>
        <p style="background: red; color: black; padding-left: 10px;">EXCLUSIVE</p>
        <h5 style="padding-top: 15px;">Where Southern Charm's Craig & Naomie Stand After Hookup Drama</h5>
        <button class="btn btn-success" float="right">SEE MORE</button>
      </div>
    </div>
  </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="col-12 col-md-12 col-lg-12 mt-3" style="background:#4eade5;padding:20px">
      <div class="row" >
        <div class="col-12 col-md-6 col-lg-6">
          <img src="<?= base_url('assets/website/images/z12.webp');?>" class="d-block w-100" alt="....">
        </div>
          <div class="col-12 col-md-6 col-lg-6">
            <h2>Today's Hot Photos</h2>
            <div id="carouselExampleControl1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url('assets/website/images/z8.jpg');?>" class="d-block w-100" alt="...1">
                    <h3>Selena Gomez</h3>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/website/images/z10.webp');?>" class="d-block w-100" alt="...2">
                    <h3>Ashley Tisdale</h3>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/website/images/z11.webp');?>" class="d-block w-100" alt="...3">
                    <h3>Jennifer Garner</h3>
                  </div>
                </div>
              <button class="carousel-control-prev" type="button" data-target="#carouselExampleControl1" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-target="#carouselExampleControl1" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </button>
          </div>
      </div>
    </div>
  </div>
  </div>
</section>