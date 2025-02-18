<style>
        /* Custom CSS */
        .blog-header {
            background-color: #f8f9fa;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        .blog-title {
            font-size: 2.5rem;
        }
        .blog-description {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .sidebar-section {
            margin-bottom: 2rem;
        }
    </style>
</head>
    <!-- Main Content -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
          <div class="row">
            <!-- Blog Posts -->
            <div class="col-md-8">
                <!-- Blog Post 1 -->
                <?php if(!empty($blog_description)){
                    ?>
                      <div class="card mb-4">
                    <img src="<?php echo base_url($blog_description['photos']); ?>" class="card-img-top" alt="Blog post image">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $blog_description['name']; ?></h2>
                        <p class="card-text"><?php echo $blog_description['description']; ?></p>
                        
                    </div>
                    <div class="card-footer text-muted">
                        Posted on <?php echo date("Y-m-d", strtotime($blog_description['added_on'])); ?> by Comsys IT                    </div>
                </div>
               <?php    
                }  ?>
                

                <!-- Blog Post 2 -->
              
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <!-- About -->
                <div class="card mb-4 sidebar-section">
                    <div class="card-header">About</div>
                    <div class="card-body">
                        <p><?php echo $blog_description['description']; ?></p>
                    </div>
                </div>

                <!-- Categories -->
                <div class="card mb-4 sidebar-section">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <?php if(!empty($service)){
                                foreach ($service as $key => $value) { ?>
                                  <li><a href="<?php echo base_url($value['url_link']); ?>"><?php echo $value['name']; ?></a></li>
                          <?php      }
                            }  ?>
                            
                        </ul>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="card sidebar-section">
                    <div class="card-header">Follow Us</div>
                    <div class="card-body">
                        <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="btn btn-outline-primary me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-outline-primary"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>