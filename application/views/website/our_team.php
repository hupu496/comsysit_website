<style>
     .card {
      position: relative;
      width: 250px;
      height: 300px;
      overflow: hidden;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.03);
    }

    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .card .info {
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 15px;
      background: rgba(255, 255, 255, 0.9);
      color: #000;
      transition: transform 0.3s ease;
    }

    .card:hover .info {
      transform: translateY(-100%);
    }

    .card .hover-info {
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 15px;
      color: white;
      background: rgba(0, 0, 0, 0.8);
      transform: translateY(100%);
      transition: transform 0.3s ease;
    }

    .card:hover .hover-info {
      transform: translateY(0);
    }

    .name {
      font-size: 1.2em;
      font-weight: bold;
    }

    .position {
      font-size: 0.9em;
      margin-top: 4px;
    }

    .desc {
      font-size: 0.8em;
      margin-top: 8px;
      line-height: 1.3;
    }
</style>
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
   <div class="container">
         <div class="row">
            <?php  if(!empty($our_team)){
                foreach ($our_team as $key => $value) {  ?>
            <div class="col-md-4 col-12 mb-4">
               <div class="card">
                <img src="<?php echo base_url($value['photos']); ?>" alt="Abhishek">
                <div class="info">
                <div class="name"><?php echo $value['name']; ?></div>
                <div class="position"><?php echo $value['position']; ?></div>
                </div>
                <div class="hover-info">
                <div class="name"><?php echo $value['name']; ?></div>
                <div class="position"><?php echo $value['position']; ?></div>
                <div class="desc"><?php echo $value['description']; ?></div>
                </div>
            </div>  
            </div>
             <?php   }
            
            }  ?>
           
        </div>
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

