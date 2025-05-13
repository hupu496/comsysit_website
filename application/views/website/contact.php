        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary mb-4">Contact Us</h4>
                    <h1 class="display-5 mb-4">Get In Touch</h1>
                    <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                    </p>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="display-5 mb-2">Contact Form</h2>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="#">Download Now</a>.</p>
                        <form method="post" action="<?php echo base_url('homeservice/contactsave'); ?>">
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" name="mobile" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        
                                        <select name="service" class="form-control">  <?php if(!empty($service)){
                                            foreach ($service as $key => $value) { ?>
                                        <option value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
                                    <?php        }
                                        }   ?></select>
                                        <label for="project">Your service</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-home fa-2x text-primary"></i></div>
                            <div class="ms-4">
                                <h4>Head Office</h4>
                                <p class="mb-0">507,Supriya Apartment, Plot-20,Sec-10 Dwarka, New Delhi-110075</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                            <div class="ms-4">
                                <h4>Branch Office</h4>
                                <p class="mb-0">Ghatsila,Jamshedpur</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                            <div class="ms-4">
                                <h4>Mobile</h4>
                                <p class="mb-0">+919470506166</p>
                                <p class="mb-0">+919212450030</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                            <div class="ms-4">
                                <h4>Email</h4>
                                <p class="mb-0">info@comsysit.in</p>
                                <!-- <p class="mb-0">info@comsysit.in</p> -->
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="me-4">
                                <div class="bg-light d-flex align-items-center justify-content-center" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fas fa-share fa-2x text-primary"></i></div>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-lg-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded h-100">
                            <iframe class="rounded w-100" 
                            style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m23!1m8!1m3!1d875.8570675643184!2d77.0535962!3d28.5869262!3m2!1i1024!2i768!4f13.1!4m12!3e6!4m4!1s0x390d1adfbbb6931f%3A0x5efd9bb2516b931f!3m2!1d28.586773299999997!2d77.0542163!4m5!1s0x390d1adfbbb6931f%3A0x5efd9bb2516b931f!2sSupriya%20Apartment%201%2C%20Sector%2010%20Dwarka%2C%20Dwarka%2C%20Delhi%2C%20110075!3m2!1d28.586773299999997!2d77.0542163!5e0!3m2!1sen!2sin!4v1746879465678!5m2!1sen!2sin" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
