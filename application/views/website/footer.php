    <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Company</h4>
                            <a href="<?php echo base_url('profile'); ?>"> Our Portfolio</a>
                            <a href="<?php echo base_url('contact'); ?>"> Contact Us</a>
                            <a href="<?php echo base_url('privacy_policy'); ?>"> Privacy Policy</a>
                            <a href="<?php echo base_url('term_condition'); ?>"> Terms & Conditions</a>
                            <a href="<?php echo base_url('blog'); ?>"> Our Blog & News</a>
                            <a href="<?php echo base_url('our_team'); ?>"> Our Team</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Services</h4>
                             <?php  $services = $this->db->get_where('services',array('status'=>1))->result_array();
                                if(!empty($services)){
                                    foreach ($services as $key => $value) {  ?>
                                     <a href="<?php echo base_url('homeservice/service/1'); ?>"><?php echo $value['name']; ?></a>
                           <?php         }
                                }  ?>
                           
                            <!-- <a href="<?php echo base_url('homeservice/service/2'); ?>"> Web Developement</a>
                            <a href="<?php echo base_url('homeservice/service/3'); ?>"> Industrial Electronic</a>
                            <a href="<?php echo base_url('homeservice/service/4'); ?>"> Access and Security</a>
                            <a href="<?php echo base_url('homeservice/service/5'); ?>"> Hardware & Networking</a>
                            <a href="<?php echo base_url('homeservice/service/6'); ?>"> Lay Out Designing & Interior</a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Head Office</h4>
                            <a href="https://www.google.com/maps/dir/''/Supriya+Apartment+1,+Sector+10+Dwarka,+Dwarka,+Delhi,+110075/@28.5869262,77.0535962,19z/data=!4m13!4m12!1m5!1m1!1s0x390d1adfbbb6931f:0x5efd9bb2516b931f!2m2!1d77.0542163!2d28.5867733!1m5!1m1!1s0x390d1adfbbb6931f:0x5efd9bb2516b931f!2m2!1d77.0542163!2d28.5867733?entry=ttu&g_ep=EgoyMDI1MDUwNy4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="fa fa-map-marker-alt me-2"></i> 507,Supriya Apartment, Plot-20,Sec-10 Dwarka, New Delhi-110075</a>
                            <a href="mailto:info@comsysit.in"><i class="fas fa-envelope me-2"></i> info@comsysit.in</a>
                            <a href="tel:+919470506166"><i class="fas fa-phone me-2"></i> +919470506166</a>
                            <a href="tel:+919212450030" class="mb-3"><i class="fas fa-print me-2"></i> +919212450030</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.facebook.com/comsysit/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.linkedin.com/company/comsys-it/posts/?feedView=all"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-dark">Branch Office</h4>
                            <a href="https://www.google.com/maps/place/COMSYS+IT/@22.5880249,86.4684349,16z/data=!4m23!1m16!4m15!1m6!1m2!1s0x39f61d8bffffffff:0x5df0da89116231f4!2sCOMSYS+IT,+BO-+1st+Floor,+Suvidha+Business+Center,+Ghatsila,+Jamshedpur,+Ghatshila,+Jharkhand+832303!2m2!1d86.47438!2d22.587307!1m6!1m2!1s0x39f61d8bffffffff:0x5df0da89116231f4!2sCOMSYS+IT,+BO-+1st+Floor,+Suvidha+Business+Center,+Ghatsila,+Jamshedpur,+Ghatshila,+Jharkhand+832303!2m2!1d86.47438!2d22.587307!3e0!3m5!1s0x39f61d8bffffffff:0x5df0da89116231f4!8m2!3d22.587307!4d86.47438!16s%2Fg%2F11nns0jsbm?entry=ttu&g_ep=EgoyMDI1MDUwNy4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="fa fa-map-marker-alt me-2"></i>Ghatsila,Jamshedpur</a>
                            <a href="mailto:info@comsysit.in"><i class="fas fa-envelope me-2"></i> info@comsysit.in</a>
                            <a href="tel:+919470506166"><i class="fas fa-phone me-2"></i> +919470506166</a>
                            <a href="tel:+919212450030" class="mb-3"><i class="fas fa-print me-2"></i> +919212450030</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.facebook.com/comsysit/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href="https://www.linkedin.com/company/comsys-it/posts/?feedView=all"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>ComSysIT</a>, All right reserved.</span>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/lib/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js'); ?>"></script>
    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    </body>

</html> 