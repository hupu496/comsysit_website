<div class="container-fluid price py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="text-primary">Live Demo</h4>
                    <h1 class="display-5 mb-4">Explore our working software solutions in real time.</h1>
                    <p class="mb-0">ComSysIT offers industry-ready live demos so clients can experience our software before committing. Whether you're in retail, industrial, education, or government sectors – we've got tailored solutions for you.
                    </p>
                </div>
               
            </div>
        </div>
      
        <div class="row">
            <?php  if(!empty($live_demo)){
                foreach ($live_demo as $key => $value) {  ?>
                    <div class="col-md-6">
                <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url($value['photos']); ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
   
      <div class="card-body">
        <h5 class="card-title"><?php echo $value['name']; ?></h5>
        <!-- <p class="card-text"><?php echo $value['link']; ?></p>
             <p class="card-text"><?php echo $value['user_access']; ?></p> -->
         <button 
  type="button" 
  class="btn btn-primary rounded-pill text-white py-2 px-4 request-demo-btn" 
  data-bs-toggle="modal" 
  data-bs-target="#exampleModal1"
  data-name="<?= $value['name']; ?>"
  data-link="<?= $value['link']; ?>"
  data-access="<?= $value['user_access']; ?>"
>
  Request Demo
</button>

      </div>
    </div>
  </div>
</div>
            </div>
    <?php   }
            
            }  ?>
           

            
        </div>

<!-- demo -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Demo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <form method="post" action="<?php echo base_url('homeservice/request_demo'); ?>">
                            <div class="row g-3">
                              
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                               
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" name="mobileno" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">WhatsApp Number</label>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <div class="form-floating">
                                       <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Subject" readonly>
                                        <label for="subject">Product Name</label>
                                    </div>
                                </div>
                               
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
      </div>
     
    </div>
  </div>
</div>
<script>
  let selectedName = '', selectedLink = '', selectedAccess = '';

  // Handle "Request Demo" button click
  document.querySelectorAll('.request-demo-btn').forEach(button => {
    button.addEventListener('click', function () {
      selectedName = this.getAttribute('data-name');
      selectedLink = this.getAttribute('data-link');
      selectedAccess = this.getAttribute('data-access');

      document.getElementById('product_name').value = selectedName;
    });
  });

  // Handle form submit
  document.querySelector('#exampleModal1 form').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(response => {
      if (response.status === 'success') {
        // Close modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal1'));
        modal.hide();

        // Append info and hide button
        document.querySelectorAll('.request-demo-btn').forEach(button => {
          if (button.getAttribute('data-name') === selectedName) {
            const cardBody = button.closest('.card-body');

            // Prevent duplicate info
            if (!cardBody.querySelector('.extra-info')) {
              // Add clickable link
              const linkP = document.createElement('p');
              linkP.className = 'card-text extra-info';
              linkP.innerHTML = `<strong>Link:</strong> <a href="${selectedLink}" target="_blank">${selectedLink}</a>`;

              // Add user ID
              const accessP = document.createElement('p');
              accessP.className = 'card-text extra-info';
              accessP.innerHTML = `<strong>User ID:</strong> ${selectedAccess}`;

              // Append to card body
              cardBody.appendChild(linkP);
              cardBody.appendChild(accessP);
            }

            // Hide the request button
            button.style.display = 'none';
          }
        });

        // Reset email and phone
        form.querySelector('input[name="email"]').value = '';
        form.querySelector('input[name="mobileno"]').value = '';
      } else {
        alert('Error: ' + response.message);
      }
    })
    .catch(err => {
      alert('Request failed');
      console.error(err);
    });
  });
</script>

