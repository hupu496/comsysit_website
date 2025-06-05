        <?php if(!empty($service)){ ?>
            <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary"><?php echo $service['name']; ?></h4>
                    <h1 class="display-5 mb-4">CST : A customized <?php echo $service['name']; ?> Services Provider</h1>
                    <p class="mb-0"><?php echo $service['Description']; ?>
                                                </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <?php if(!empty($subservice)){
                        foreach ($subservice as $key => $value) { 
                             ?>
                            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item text-center rounded p-4">
                            <img src="<?php echo base_url($value['proj_images']); ?>" class="img-fluid w-100" alt="Service Image">
                            <div class="service-content">
                                <h4 class="mb-4"><?php echo $value['sub_service']; ?></h4>
                                <p class="mb-4"><?php echo $value['Description']; ?></p>
                               <a href="<?php echo htmlspecialchars($value['video'], ENT_QUOTES); ?>" 
   target="_blank" 
   class="btn btn-light rounded-pill text-primary py-2 px-4">
   Demo
</a>

                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
                                onclick="openModal('<?php echo $value['sub_service']; ?> - Order', generateForm('<?php echo $value['sub_service']; ?>'))">Order
                                </a>
                            </div>
                            </div>
                        </div>
                            
                    <?php   
                        }
                    }  ?>
                </div>
            </div>
        </div>          
        <?php } ?>
        <div id="dynamicModalContainer"></div>


        <!-- Video Modal -->

<!-- model -->
<div class="modal fade" id="iframeModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Demo Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9" id="iframeContainer">
          <!-- iframe will be injected here -->
        </div>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    // Data model for modules
  


   function openModal(title, content) {
    const modalContainer = document.getElementById("dynamicModalContainer");

    const modalHtml = `
        <div class="modal fade" id="dynamicModal" tabindex="-1" aria-labelledby="dynamicModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dynamicModalLabel">${title}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ${content}
                    </div>
                </div>
            </div>
        </div>
    `;

    modalContainer.innerHTML = modalHtml;
    const modal = new bootstrap.Modal(document.getElementById("dynamicModal"));
    modal.show();
}

function generateForm(serviceName) {
    return `
        <form id="serviceOrderForm" method="POST" action="<?php echo base_url('homeservice/serviceorder'); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="mobile" name="mobile" required>
            </div>
            <div class="mb-3">
                <label for="service" class="form-label">Service</label>
                <input type="text" class="form-control" id="service" name="service" value="${serviceName}" readonly>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="query" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    `;
}

// Ensure AJAX submission with event delegation
$(document).ready(function () {
    $(document).on("submit", "#serviceOrderForm", function (event) {
        event.preventDefault(); // Prevent default form submission

        let form = $(this);
        let submitButton = form.find("button[type='submit']");
        submitButton.prop("disabled", true).text("Submitting..."); // Disable button during submission

        $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: form.serialize(),
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    Swal.fire({
                        title: "Success!",
                        text: "Service Order submitted successfully!",
                        icon: "success",
                        confirmButtonText: "OK"
                    }).then(() => {
                        $("#dynamicModal").modal("hide"); // Close modal
                        form[0].reset(); // Reset form
                    });
                } else {
                    Swal.fire("Error!", response.message || "Service Order failed.", "error");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                let errorMessage = "Failed to submit the form. Try again!";
                if (jqXHR.responseText) {
                    try {
                        let errorData = JSON.parse(jqXHR.responseText);
                        errorMessage = errorData.message || errorMessage;
                    } catch (e) {
                        console.error("Error parsing JSON response:", e);
                    }
                }
                Swal.fire("Error!", errorMessage, "error");
            },
            complete: function () {
                submitButton.prop("disabled", false).text("Submit"); // Re-enable button
            }
        });
    });
});
</script>
<script>
function showIframeModal(iframeURL) {
    const iframe = `<iframe src="${iframeURL}" frameborder="0" width="100%" height="400px" allowfullscreen></iframe>`;
    document.getElementById('iframeContainer').innerHTML = iframe;
    $('#iframeModal').modal('show');
}

function closeIframeModal() {
    $('#iframeModal').modal('hide');
    document.getElementById('iframeContainer').innerHTML = ''; // clear on close
}
</script>
