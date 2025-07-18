<?php $images = json_decode($project['images'] ?? '[]', true);
$tech = json_decode($project['tech'] ?? '[]', true); ?>

<section id="portfolio-details" class="portfolio-details" style="padding-top: 6rem !important;">
      <div class="container">
         <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary"><?php echo $project['name']; ?></h4>
                    <h1 class="display-5 mb-4">ComSys IT :A Presentation Of <?php echo $project['name']; ?> Project</h1>
                    <p class="mb-0"><?php echo $project['Description']; ?>
                                                </p>
                </div>

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper-container">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php foreach ($images as $key => $img): ?>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $key ?>" <?= ($key == 0) ? 'class="active" aria-current="true"' : '' ?> aria-label="Slide <?= $key + 1 ?>"></button>
    <?php endforeach; ?>
</div>
<div class="carousel-inner">
    <?php foreach ($images as $key => $img): ?>
    <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>">
      <img src="<?= base_url(trim($img, '\"')) ?>" class="d-block w-100" alt="project image <?= $key + 1 ?>">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <?php endforeach; ?>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
              
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: <?= $project['name'] ?></li>
              <li><strong>Project Name</strong>: <?= $project['sub_service'] ?></li>
              <li><strong>Status</strong>: <?= ($project['status'] == 1) ? 'Active' : 'Inactive' ?></li>
              <li><strong>Image</strong>: <img src="<?= base_url($project['proj_images']) ?>" height="50"></li>
            </ul>
          </div>
            <div class="portfolio-info mt-3">
            <h3>Technology Used <i class='bx bx-code'></i></h3>
            <ul>
              <?php foreach ($tech as $t): ?>
                <li><strong style="font-size: 18px; color:#cb3fb8;"><i class='bx bx-code-block'></i> <?= htmlspecialchars($t) ?></strong></li>
              <?php endforeach; ?>
            </ul>
          </div>
          </div>

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>About this project</h2>
              <p><?= $project['description']; ?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->