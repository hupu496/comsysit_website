<section style="padding-top: 20px; padding-bottom:20px;">
      <div class="container">
         <h2 style="color: red;">Business</h2><hr style="border: 1px solid red;">
        <div class="row">
           <div class="col-md-5">
            <?php 
            if(!empty($business_news)){
              ?> <a href="<?php echo base_url('website/news_details/?slug='.$business_news[0]['slug']);?>"><img src="<?= base_url($business_news[0]['image']);?>"></a><?php
            }else{
              ?>
              <img src="<?= base_url('assets/website/images/bb2.webp');?>">
              <?php
            }
            ?>
             
           </div>
           <div class="col-md-7">
            <?php 
            if(!empty($business_news)){
              foreach ($business_news as $key => $value) {
                if($key>0 && $key<6){
                  ?>
                  <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><h6><?= $value['tittle'];?></h6></a><hr>
                  <?php
                }
              }
              
            }else{
              ?><h6>GST@5: Know Why It Was Introduced, What Are Challenges Now</h6><hr>
                  <h6>Coal India Gives Over 26% Returns In One Year; Analysts See Up To 23% Further Gains</h6><hr>
                  <h6>Core Sector Output Grows At 18.1% in May; Cement, Coal, Fertilisers, Electricity Record High Growth</h6><hr>
                  <h6>Indian Economy Witnesses Gradual Recovery In Q1; War in Europe Casts Shadow On Outlook: RBI</h6><?php
            }
            ?>
             
           </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h4 style="color: red;">LATEST NEWS ON BUSINESS</h4>
        <div class="row">
          <?php 
            if(!empty($business_news)){
              foreach ($business_news as $key => $value) {
                if($key>5 && $key>22){
                  ?> <div class="col-md-3">
                      <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" style="width: 100%;">
                     <p><?= $value['tittle'];?></p></a><hr>
                    </div><?php
                }
              }
            }
            else{
              ?><div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb2.webp');?>" style="width: 100%;">
            <p>Stock Market Update: Sensex Drops Over 270 pts, Nifty Below 15,700; Key Points</p><hr>
          </div>
         <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb2.webp');?>" style="width: 100%;">
            <p>Govt Hikes Export Duty on Petrol, Diesel; Will It Impact Demestic Fuel Prices?</p><hr>
          </div>
          <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb5.webp');?>" style="width: 100%;">
            <p>PAN-Aadhaar Linking, Income Tax, Credit Card Rules: 6 Money Rule Changes from Today</p><hr>
          </div>
          <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb7.webp');?>" style="width: 100%;">
            <p>Rupee Falls to a Record Low of 79.12 Against US Dollar; More Pain Ahead?</p><hr>
          </div>
           <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb8.webp');?>" style="width: 100%;">
            <p>Coal India Gives Over 26% Returns In One Year; Analysts See Up To 23% Further Gains</p><hr>
          </div>
           <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb9.webp');?>" style="width: 100%;">
            <p>Stocks to Watch Today: Airtel, UPL, Auto Stock, Lupin, HUL, and Others</p><hr>
          </div>
           <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb11.webp');?>" style="width: 100%;">
            <p>LPG Cylinder Price Cut Today: 19-Kg Commercial Cylinder Becomes Cheaper; Know Rates</p><hr>
          </div>
           <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb13.webp');?>" style="width: 100%;">
            <p>7 Stocks to Buy As Real Estate Stages Stellar Recovery in FY22</p><hr>
          </div><?php
            }
          ?>
          
        </div>
      </div>
    </section>

      <section>
      <div class="container">
        <h4 style="color: red;">MARKET</h4>
        <div class="row">
           <?php 
            if(!empty($business_news)){
              foreach ($business_news as $key => $value) {
                if($key>22 && $key>27){
                  ?> <div class="col-md-3">
                      <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" style="width: 100%;">
                     <p><?= $value['tittle'];?></p></a><hr>
                    </div><?php
                }
              }
            }else{
              ?>
              <div class="col-md-3">
                <img src="<?= base_url('assets/website/images/bb2.webp');?>" style="width: 100%;">
                <p>Stock Market Update: Sensex Drops Over 270 pts, Nifty Below 15,700; Key Points</p><hr>
              </div>
              <div class="col-md-3">
                <img src="<?= base_url('assets/website/images/bb8.webp');?>" style="width: 100%;">
                <p>Coal India Gives Over 26% Returns In One Year; Analysts See Up To 23% Further Gains</p><hr>
              </div>
              <div class="col-md-3">
                <img src="<?= base_url('assets/website/images/bb9.webp');?>" style="width: 100%;">
                <p>Stocks to Watch Today: Airtel, UPL, Auto Stock, Lupin, HUL, and Others</p><hr>
              </div>
           <div class="col-md-3">
                <img src="<?= base_url('assets/website/images/bb13.webp');?>" style="width: 100%;">
                <p>7 Stocks to Buy As Real Estate Stages Stellar Recovery in FY22</p><hr>
          </div>
              <?php
            }
              ?>
        </div>
      </div>
    </section>
     <section>
      <div class="container">
        <h4 style="color: red;">SAVING AND INVESTMENTS</h4>
        <div class="row">
          <?php 
            if(!empty($business_news)){
              foreach ($business_news as $key => $value) {
                if($key>22 && $key>27){
                  ?> <div class="col-md-3">
                      <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" style="width: 100%;">
                     <p><?= $value['tittle'];?></p></a><hr>
                    </div><?php
                }
              }
            }else{
              ?>
          <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/in1.webp');?>" style="width: 100%;">
            <p>PPF, Sukanya Samriddhi, Senior Citizen Scheme: Govt to Hike Rates for September Quarter?</p><hr>
          </div>
          <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/inn2.webp');?>" style="width: 100%;">
            <p>Rupee Rises 13 Paise to 78.90 Against US Dollar in Early Trade</p><hr>
          </div>
          <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/inn3.webp');?>" style="width: 100%;">
            <p>Rupee Plunges 11 Paise to Hit Record Low of 78.96 Against US Dollar in Early Trade</p><hr>
          </div>
           <div class="col-md-3">
            <img src="<?= base_url('assets/website/images/bb13.webp');?>" style="width: 100%;">
            <p>ManipalCigna Launches Cashless OPD Coverage: Annual Checkup, Doctor Consultation, Key Benefits</p><hr>
          </div>
          <?php }?>
        </div>
      </div>
    </section>