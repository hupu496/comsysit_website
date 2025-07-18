  <div class="container-fluid bg-breadcrumb">
    <ul class="breadcrumb-animation">
               
            </ul>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">NEED a HELP</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Need a Help</li>
                    <p><b>ComSys IT Service Provider – We’re Here to Support You</b>
We’re Here to Support You We understand that even the best systems need occasional assistance. Whether you're experiencing technical difficulties, need configuration guidance, or want to request a feature, we're ready to help.</p>
                </ol>    
            </div>
            </div>
<div class="container-fluid FAQ bg-light overflow-hidden">
    <div class="container">
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