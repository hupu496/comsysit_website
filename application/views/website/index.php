
            <!-- Hero Header Start -->
            <div class="hero-header overflow-hidden px-5">
                <div class="rotate-img">
                    <img src="<?php echo base_url('assets/img/sty-1.png'); ?>" class="img-fluid w-100" alt="">
                    <div class="rotate-sty-2"></div>
                </div>
                <div class="row gy-5 align-items-center">
                   <div class="col-lg-6 wow fadeInLeft text-start" data-wow-delay="0.1s">
    <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s" style="word-break: break-word;">
        IT and Industrial Automation Service Provider
    </h1>
    <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s" style="text-align: justify; word-break: break-word;">
        The company offers a dynamic blend of strategic consulting and system integration services to help organizations architect and build their businesses. 
        <strong>COMSYS IT</strong> is a customer-driven company that always strives to provide customized solutions as per the customer’s demand.
    </p>
    <a href="#" class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.7s">
        Get Started
    </a>
</div>


                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <img src="<?php echo base_url('assets/img/hero-img-1.png'); ?>" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
            </div>
            <!-- Hero Header End -->
      
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left Image -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="RotateMoveLeft">
                    <img src="<?php echo base_url('assets/img/about-1.png'); ?>" class="img-fluid w-100" alt="">
                </div>
            </div>

            <!-- Right Text Content -->
            <div class="col-lg-6 wow fadeInUp text-start" data-wow-delay="0.3s">
                <h4 class="mb-1 text-primary">Elevating your digital presence with</h4>
                <h2 class="mb-4 fw-bold" style="word-break: break-word;">
                    Expert Software, Hardware & Networking Services
                </h2>

                <p class="mb-4" style="text-align: justify; word-break: break-word;">
                    Our state-of-the-art solutions are meticulously tailored to optimize operations and elevate customer service, empowering businesses to thrive. With our cutting-edge software, brands unlock new levels of service excellence and drive unparalleled growth, securing their position at the forefront of the market.
                </p>

                <p class="fw-bold mb-2">Discover our suite of highly interactive and customer-engaging software offerings, including:</p>
                <ul class="mb-4 ps-3">
                    <li>Industrial Software</li>
                    <li>ERPs</li>
                    <li>Access Control and Safety</li>
                    <li>Software Development and Consultancy</li>
                </ul>

                <p style="text-align: justify;">
                    "Join us at <strong>ComSys IT</strong>, where every solution is a testament to our commitment to your success."
                </p>
            </div>
        </div>
    </div>
</div>

        <!-- About End -->


        <!-- Service Start -->
           <div class="container-fluid blog py-5">
            <div class="container py-5">
               <div class="mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
    <h4 class="text-primary text-center">Our Services</h4>
    <h1 class="mb-4 text-center">ComSys IT services that boost your business online & offline.</h1>
    <p class="mb-0" style="text-align: justify; word-break: break-word;">
        <strong>COMSYS IT</strong> offers expert services in Software & Consultation, Hardware & Networking, Industrial Automation, and BPO/KPO — empowering businesses with innovative, efficient, and customized solutions to drive growth, productivity, and digital transformation across diverse industries.
    </p>
</div>

                <div class="row g-4 justify-content-center">
                    <?php if(!empty($services)){
                        foreach ($services as $key => $value) { 
                            $desc = strip_tags($value['Description']); // remove HTML tags
                            $words = explode(' ', $desc);
                            $limited = implode(' ', array_slice($words, 0, 15)); ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item border" style="height:27rem;">
                            <div class="blog-img">
                                <img src="<?php echo base_url($value['image']); ?>" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content text-dark  p-4 ">
                                <h5 class="mb-4"><?php echo $value['name']; ?></h5>
                                <p class="mb-4" style="word-break: break-word;"><?php echo $limited; ?>...</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="<?php echo base_url($value['url_link']); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                           
                   <?php     }
                    }  ?>
                    
                 
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="container-fluid feature overflow-hidden py-5">
            <div class="container py-5">
                <div class="mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
    <h4 class="text-primary text-center">Let's Build Your Project Together</h4>
    <h1 class="display-5 mb-4 text-center">Collaborate with our team of experts to bring your vision to life.</h1>
    <p class="mb-0" style="text-align: justify; word-break: break-word;">
        The software development lifecycle includes requirement analysis, design and implementation, verification, and maintenance — ensuring systems meet stakeholder needs, function as intended, and remain effective over time through structured development, rigorous testing, and continuous updates to adapt to change.
    </p>
</div>

                <div class="row g-4 justify-content-center text-start mb-5">
    <!-- Card 1 -->
    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="p-4 h-100">
            <div class="d-inline-block rounded bg-light p-4 mb-4">
                <i class="fas fa-envelope fa-5x text-secondary"></i>
            </div>
            <div class="feature-content">
                <a href="#" class="h5 d-block mb-3">Requirement & Study <i class="fa fa-long-arrow-alt-right"></i></a>
                <p style="text-align: justify; word-break: break-word;">
                    Identify the specific needs of stakeholders, users, and systems. Translate high-level business objectives into concrete requirements.
                </p>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
        <div class="p-4 h-100">
            <div class="d-inline-block rounded bg-light p-4 mb-4">
                <i class="fas fa-sitemap fa-5x text-secondary"></i>
            </div>
            <div class="feature-content">
                <a href="#" class="h5 d-block mb-3">Design & Implementation <i class="fa fa-long-arrow-alt-right"></i></a>
                <p style="text-align: justify; word-break: break-word;">
                    Transform requirements into a detailed design that serves as a blueprint for development.
                </p>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
        <div class="p-4 h-100">
            <div class="d-inline-block rounded bg-light p-4 mb-4">
                <i class="fas fa-mail-bulk fa-5x text-secondary"></i>
            </div>
            <div class="feature-content">
                <a href="#" class="h5 d-block mb-3">Maintenance <i class="fa fa-long-arrow-alt-right"></i></a>
                <p style="text-align: justify; word-break: break-word;">
                    Maintenance is the final stage of the software development lifecycle (SDLC) and is crucial to ensuring that a system continues to perform optimally, meets user needs, and adapts to any changes.
                </p>
            </div>
        </div>
    </div>

    <!-- Button -->
    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
        <div class="my-3 text-center">
            <a href="#" class="btn btn-primary d-inline rounded-pill px-5 py-3">More Features</a>
        </div>
    </div>
</div>

                <div class="row g-5 pt-5" style="margin-top: 6rem;">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="feature-img RotateMoveLeft h-100" style="object-fit: cover;">
                            <img src="<?php echo base_url('assets/img/features-1.png');?>" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                        <h4 class="text-primary">Features</h4>
                        <h1 class="display-5 mb-4">Push Your Visitors Into Happy Customers</h1>
                        <p class="mb-4" style="text-align: justify; word-break: break-word;">
                            We at <strong>ComSys IT Service Provider</strong> believe in the power of collaboration. We work closely with our clients to understand their unique needs and vision, and develop custom software solutions that align with their business objectives. 

                            Our team of experienced software developers, designers, and project managers are committed to delivering high-quality software solutions that exceed expectations. Whether you have a clear idea of what you want or need help shaping your vision, we're here to help. 

                            From ideation to development and deployment, we'll work with you every step of the way to ensure your project is a success.
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
                        <div class="my-4">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- FAQ Start -->
  <div class="container-fluid FAQ bg-light overflow-hidden py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="accordion" id="accordionExample">
                    <?php if (!empty($faqs)) {
                        foreach ($faqs as $key => $value) {
                            $headingId = 'heading' . $key;
                            $collapseId = 'collapse' . $key;
                            $isFirst = ($key === array_key_first($faqs)); // First item expanded
                            ?>
                            <div class="accordion-item border-0 mb-4">
                                <h2 class="accordion-header" id="<?= $headingId; ?>">
                                    <button class="accordion-button <?= $isFirst ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId; ?>" aria-expanded="<?= $isFirst ? 'true' : 'false'; ?>" aria-controls="<?= $collapseId; ?>">
                                        <?= $value['question']; ?>
                                    </button>
                                </h2>
                                <div id="<?= $collapseId; ?>" class="accordion-collapse collapse <?= $isFirst ? 'show' : ''; ?>" aria-labelledby="<?= $headingId; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body my-2">
                                        <p><?= $value['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="FAQ-img RotateMoveRight rounded">
                    <img src="<?= base_url('assets/img/about-1.png'); ?>" class="img-fluid w-100" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- FAQ End -->
        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Our Blog</h4>
                    <h1 class="display-5 mb-4">Join Us For New Blog</h1>
                    <p class="mb-0">Discover comprehensive IT solutions with our expert hardware, software, and ERP services. We ensure seamless integration, enhanced productivity, and tailored support to meet your business needs. Trust us to power your digital transformation with innovation and reliability.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
<?php if (!empty($blog)) {
    foreach ($blog as $key => $value) { 
        $desc = strip_tags($value['description']); // remove HTML tags
        $words = explode(' ', $desc);
        $limited = implode(' ', array_slice($words, 0, 15));  ?>
        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="<?php echo base_url($value['photos']); ?>" class="img-fluid w-100" alt="Blog Image">
                    <div class="blog-info">
                        <span><i class="fa fa-clock"></i> <?php echo date('Y-m-d', strtotime($value['added_on'])); ?></span>
                        <div class="d-flex">
                             <!-- <span class="me-3">3 <i class="fa fa-heart"></i></span> -->
                            <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </div>
                <div class="blog-content text-dark border p-4" style="height:18rem;">
                    <h5 class="mb-4"><?php echo $value['name']; ?></h5>
                    <p class="mb-4"><?= $limited ?>...</p>
                    <a class="btn btn-light rounded-pill py-2 px-4" href="<?php echo base_url('homeservice/blog_description/'.$value['id']); ?>">Read More</a>
                </div>
            </div>
        </div>

<?php } } ?>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Our Clients</h4>
                    <h1 class="display-5 mb-4">What Our Client Say About Us</h1>
                    <p class="mb-0 " style="text-align: justify; word-break: break-word;">Our clients consistently praise our dedication, professionalism, and exceptional service. They value our commitment to quality, timely delivery, and personalized support, which builds lasting trust. Their positive feedback drives us to maintain excellence and exceed expectations every time.
                    </p>
                </div>
                <div class="testimonial-carousel owl-carousel wow zoomInDown" data-wow-delay="0.2s">
                    <?php if(!empty($testimonial)){
                        foreach ($testimonial as $key => $value) {  ?>
                         <div class="testimonial-item" data-dot="<img class='img-fluid' src='<?php echo base_url($value['images']); ?>' alt=''>">
                        <div class="testimonial-inner text-center p-5">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <div class="testimonial-inner-img border border-primary border-3 me-4" style="width: 100px; height: 100px; border-radius: 50%;">
                                    <img src="<?php echo base_url($value['images']); ?>" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div>
                                    <h5 class="mb-2"><?php echo $value['name'] ?></h5>
                                    <p class="mb-0"><?php echo $value['location']; ?></p>
                                </div>
                            </div>
                            <p class="fs-7"><?php echo $value['description']; ?>
                            </p>
                            <div class="text-center">
                                <div class="d-flex justify-content-center">
                                    <?php if(!empty($value['star'])){
                                        for ($i=0; $i < $value['star']; $i++) {   ?>
                                          <i class="fas fa-star text-primary"></i>
                                 <?php   }
                                    }
                                     ?>
                                    <!-- <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                         
                <?php        } 
                    }  ?>
                   
                 
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- Testimonial End -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script>
$(document).ready(function () {
    $("form").submit(function (event) {
        event.preventDefault(); // Prevent default form submission

        $.ajax({
            url: $(this).attr("action"), // Form action URL
            type: "POST",
            data: $(this).serialize(), // Serialize form data
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    Swal.fire("Submit Successfully!", "Meeting Available Soon!", "success").then(() => {
                        window.location.reload(); // Reload page after success
                    });
                } else {
                    Swal.fire("Error!", response.message || "Something went wrong.", "error");
                }
            },
            error: function () {
                Swal.fire("Error!", "Failed to submit the form. Try again!", "error");
            }
        });
    });
});
</script>