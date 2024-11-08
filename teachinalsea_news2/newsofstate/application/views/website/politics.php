 <section style="padding-top: 20px;">
        <div class="container">
          <h2 style="color: red;">Politics</h2><hr style="border: 1px solid red;">
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                   <?php
                   if(!empty($politics_news)){
                        ?>
                          <a href="<?php echo base_url('website/news_details/?slug='.$value['slug']);?>"><img src="<?= base_url($politics_news[0]['image']);?>" width="100%">
                          <p><?= $politics_news[0]['img_caption'].' | Latest Updates';?></p></a> 
                        <?php
                      } else{
                        ?>
                        <img src="<?= base_url('assets/website/images/maharashtra.jpg');?>">
                        <p>Eknath Shinde Is Chief Minister: 10 Facts On The BJP's Big Move | Latest Updates</p><?php
                      }
                  ?> 
                </div>
                <?php 
                  if(!empty($politics_news)){
                    foreach ($politics_news as $key => $value) {
                      if($key>0 and $key<7){
                        ?>
                        <div class="col-md-4">
                          <a href="<?php echo base_url('website/news_details/'.$value['slug']);?>"><img src="<?= base_url($value['image']);?>" style="width: 100%;"></a>
                        </div>
                        <div class="col-md-8">
                          <a href="<?php echo base_url('website/news_details/'.$value['slug']);?>"><h6><?= $value['tittle'];?></h6></a>
                        </div>
                        <div class="col-md-12">
                          <hr>
                        </div>
                        <?php
                      }
                    }
                  }else{
                    ?>
                    <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/fhdsh.webp');?>" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h6>No hindrance from our side to rebels if they tie up with BJP; Sena to play constructive oppn in new govt: Raut</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa2.webp');?>" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h6>'You People Know the Meaning...': Tej Pratap Yadav Seeks Private Meet with Speaker 'For 2 Minutes'</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa3.webp');?>" style="width: 200%;">
                </div>
                <div class="col-md-8">
                  <h6>Hordes of Hoardings in Hyderabad Reveal Signs of TRS-BJP War Prior to Visit of PM Modi, Shah, Nadda</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa4.webp');?>" style="width: 200%;">
                </div>
                <div class="col-md-8">
                  <h6>Maharashtra Govt Formation LIVE Updates: 'Focus on Development', CM Shinde Takes Front Seat; Spl Assembly Session from July 2 May See Trust Vote</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa5.webp');?>" style="width: 200%;">
                </div>
                <div class="col-md-8">
                  <h6>UP CM Adityanath Disburses Rs 16,000 Crore Loan to 1.9 Lakh Beneficiaries</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa6.webp');?>" style="width: 200%;">
                </div>
                <div class="col-md-8">
                  <h6>Prez Poll: Droupadi Murmu Likely to Start Her Campaign from Himachal, Haryana on Friday</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa7.webp');?>" style="width: 200%;">
                </div>
                <div class="col-md-8">
                  <h6>'Modi Nagar', 'Nitish Nagar': Bihar to Have Townships Named After PM and CM</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                    <?php
                  }
                ?>
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="row">
                  <?php 
                    if(!empty($politics_news)){
                      foreach ($politics_news as $key => $value) {
                        if($key>6 && $key<13){
                          ?>
                            <div class="col-md-4">
                              <a href="<?php echo base_url('website/news_details/'.$value['slug']);?>"><img src="<?= base_url($value['image']);?>"></a>
                            </div>
                            <div class="col-md-8">
                              <a href="<?php echo base_url('website/news_details/'.$value['slug']);?>"><h6><?= $value['straplines'];?></h6></a>
                            </div>
                            <div class="col-md-12">
                              <hr>
                            </div>
                          <?php
                        }
                      }
                    }
                    else{
                          ?>
                          <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa8.webp');?>">
                </div>
                 <div class="col-md-8">
                  <h6>MVA Govt's Departure: Congress Loses Power in Yet Another State, Slide Continues..Battered by a string of electoral reverses, the Congress has now been edged out of power in yet another state with the fall of the Maha Vikas Aghadi (MVA) government in Maharashtra, and now governs only Rajasthan and Chhattisgarh on its own, and Jharkhand in alliance with the JMM and the RJD.</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                 <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa9.webp');?>">
                </div>
                 <div class="col-md-8">
                  <h6>The Punjab Assembly on Thursday passed a resolution by voice vote against the Agnipath military recruitment scheme, urging the Centre to immediately roll back it in the larger interest of the country. However, in the 117-member assembly, two BJP MLAs Ashwani Sharma and Jangi Lal Mahajan opposed the resolution.</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                 <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa10.webp');?>" style="width: 100%;">
                </div>
                 <div class="col-md-8">
                  <h6>prime Minister Narendra Modi on Thursday congratulated Eknath Shinde and Devendra Fadnavis on taking as Maharashtra chief minister and deputy chief minister respectively and expressed confidence that they will take the state to greater heights.</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                 <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/a11.webp');?>">
                </div>
                 <div class="col-md-8">
                  <h6>The 10-day Maharashtra political crisis ended with two back-to-back surprises: one, Eknath Shinde, and not Devendra Fadnavis, being sworn in as the chief minister and second, Fadnavis agreeing to be his deputy even after announcing that he would stay out of power.</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                 <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa12.jpg');?>">
                </div>
                 <div class="col-md-8">
                  <h6>Yashwant Sinha, the Opposition nominee for the next month's Presidential election, on Thursday alleged that any government which believes in the Constitution and secularism and does not believe in Hindutva is not safe in this country. Addressing a meeting of DMK and its allies which extended support to him, Sinha said they (BJP) have found a scapegoat to occupy the 'exalted chair' of the Chief Minister of Maharashtra.</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                 <div class="col-md-4">
                  <img src="<?= base_url('assets/website/images/aa13.webp');?>">
                </div>
                 <div class="col-md-8">
                  <h6>Maharashtra Congress leaders on Thursday met Shiv Sena president Uddhav Thackeray at his residence `Matoshree' in suburban Bandra a day after he resigned as chief minister. It was a courtesy call as they had worked with Thackeray as part of the Maha Vikas Aghadi (MVA) coalition government for the last two-and-half years, said Congress leader Nitin Raut.</h6>
                </div>
                <div class="col-md-12">
                  <hr>
                </div>
                      <?php
                        }
                  ?>
                
              </div>
            </div>
          </div>
        </div>
      </section>