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
                <div class="card mb-4">
                    <img src="/placeholder.svg?height=200&width=400" class="card-img-top" alt="Blog post image">
                    <div class="card-body">
                        <h2 class="card-title">Blog Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non erat sem. Morbi fringilla magna id ipsum facilisis ultrices.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2023 by John Doe
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="card mb-4">
                    <img src="/placeholder.svg?height=200&width=400" class="card-img-top" alt="Blog post image">
                    <div class="card-body">
                        <h2 class="card-title">Another Blog Post</h2>
                        <p class="card-text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on December 23, 2022 by Jane Smith
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <!-- About -->
                <div class="card mb-4 sidebar-section">
                    <div class="card-header">About</div>
                    <div class="card-body">
                        <p>Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>
                </div>

                <!-- Categories -->
                <div class="card mb-4 sidebar-section">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
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