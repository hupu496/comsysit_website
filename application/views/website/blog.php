
        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Our Blog</h4>
                    <h1 class="display-5 mb-4">Join Us For New Blog</h1>
                    <p class="mb-0">Explore end-to-end IT solutions with our expertise in hardware, software, and ERP services. We deliver smooth integration, improved efficiency, and customized support designed around your business goals. Rely on us to drive your digital transformation with cutting-edge innovation and dependable service.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <?php if(!empty($blog)){
                        foreach ($blog as $key => $value) {
                             $desc = strip_tags($value['description']); // remove HTML tags
                             $words = explode(' ', $desc);
                             $limited = implode(' ', array_slice($words, 0, 15));  ?>
                           <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="<?php echo base_url($value['photos']); ?>" class="img-fluid w-100" alt="">
                                <div class="blog-info">
                                    <span><i class="fa fa-clock"></i> <?php echo date($value['added_on']); ?></span>
                                    <div class="d-flex">
                                        <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                        <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-dark border p-4 ">
                                <h5 class="mb-4"><?php echo $value['name']; ?></h5>
                               <p class="mb-4"><?= $limited ?>...</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href='<?php echo base_url("homeservice/blog_description/$value[id]"); ?>'>Read More</a>
                            </div>
                        </div>
                    </div>
                   <?php     }
                    }  ?>
                </div>
            </div>
        </div>
        <!-- Blog End -->

