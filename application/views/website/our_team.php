<div class="container-fluid price py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Our Team</h4>
                    <h1 class="display-5 mb-4">Empowering Innovation Through Software & Hardware Excellence</h1>
                    <p class="mb-0">At ComSys IT, we are a dynamic team of technology enthusiasts, developers, and engineers committed to delivering high-quality software and hardware solutions. Our strength lies in our diverse expertise—ranging from custom software development, mobile and web applications, to robust hardware integration and embedded systems. Whether you're a startup looking to build your first product or an enterprise aiming to optimize operations, our team brings creativity, precision, and passion to every project. We believe in collaboration, continuous learning, and customer-first solutions. Together, we innovate, build, and transform ideas into powerful digital realities.
                    </p>
                </div>
               
            </div>
        </div>
        <!-- Pricing End -->
        <!-- FAQ End -->
        <div class="row">
            <?php  if(!empty($our_team)){
                foreach ($our_team as $key => $value) {  ?>
                    <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url($value['photos']); ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $value['name']; ?></h5>
        <p class="card-text"><?php echo $value['position']; ?></p>
        <p class="card-text"><?php echo $value['description']; ?></p>
        <!-- <p class="card-text"><small class="text-muted"><?php echo $value['added_on'];?></small></p> -->
      </div>
    </div>
  </div>
</div>
            </div>
    <?php   }
            
            }  ?>
           

            
        </div>


        <!-- Feature Start -->
        <div class="container-fluid feature overflow-hidden py-5">
            <div class="container py-5">
                   <?php if(!empty($our_team)){
                        foreach ($our_team as $key => $value) {
                            if($value['position'] == 'Ceo & CFO'){  ?>
                <div class="row g-5 pt-5" style="margin-top: 6rem;">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="feature-img RotateMoveLeft h-100" style="object-fit: cover;">
                            <img src="<?php echo base_url($value['photos']); ?>" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
            
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                        <h4 class="text-primary">Profile</h4>
                        <h1 class="display-5 mb-4"><?php echo $value['name']; ?></h1>
                        <p class="mb-4"><?php echo $value['description']; ?>
                        </p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex">
                                    <i class="fas fa-newspaper fa-4x text-secondary"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h2 class="mb-0 fw-bold">285</h2>
                                        <small class="text-dark">Created Projects</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <i class="fas fa-users fa-4x text-secondary"></i>
                                    <div class="d-flex flex-column ms-3">
                                        <h2 class="mb-0 fw-bold">6560</h2>
                                        <small class="text-dark">Happy Clients</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                 <?php    }
                        }
                    }  ?>
            </div>
        </div>
        <!-- Feature End -->

