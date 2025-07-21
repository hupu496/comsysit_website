        <?php if(!empty($service)){ ?>
            <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary"><?php echo $service['name']; ?></h4>
                    <h1 class="display-5 mb-4">ComSys IT : A Customized <?php echo $service['name']; ?> Services Provider</h1>
                    <p class="mb-0"><?php echo $service['Description']; ?>
                                                </p>
                </div>
           <div class="row g-4 justify-content-center">
    <?php if($service['id']=='4'){   ?>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .header h1::after {
            content: '';
            position: absolute;
            width: 70px;
            height: 4px;
            background-color: #3498db;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .header p {
            color: #7f8c8d;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
        }
        
        .service-card:nth-child(1) {
            animation-delay: 0.2s;
        }
        
        .service-card:nth-child(2) {
            animation-delay: 0.4s;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .service-icon {
            height: 200px;
            background: linear-gradient(135deg, #3498db, #2c3e50);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }
        
        .service-content {
            padding: 30px;
        }
        
        .service-content h2 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .service-content p {
            color: #7f8c8d;
            margin-bottom: 20px;
        }
        
        .service-content ul {
            list-style-type: none;
            margin-bottom: 20px;
        }
        
        .service-content ul li {
            padding: 8px 0;
            padding-left: 30px;
            position: relative;
            color: #555;
        }
        
        .service-content ul li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #3498db;
            font-weight: bold;
        }
        
        .highlight {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #3498db;
            margin-top: 20px;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .service-card {
                max-width: 100%;
            }
        }
    </style>
      <div class="container">
        <div class="header">
            <h1>BPO/KPO Services</h1>
            <p>Comprehensive solutions tailored to your business needs</p>
        </div>
        
        <div class="services">
            <div class="service-card">
                <div class="service-icon">
                    <i>🚦</i>
                </div>
                <div class="service-content">
                    <h2>Journey Risk Management</h2>
                    <p>A systematic approach for ensuring the safety and effectiveness of journeys.</p>
                    <ul>
                        <li>Documentation of potential risks and mitigation strategies</li>
                        <li>Route-specific risk assessment</li>
                        <li>Development of comprehensive route management strategies</li>
                        <li>Continuous monitoring and improvement</li>
                    </ul>
                    <div class="highlight">
                        Journey risk management involves documenting the potential risks that have been found and the accompanying mitigation strategies for specific routes, which might subsequently be used to develop a route management strategy.
                    </div>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i>🚚</i>
                </div>
                <div class="service-content">
                    <h2>Fleet Tracking and Monitoring Services</h2>
                    <p>Advanced solutions for real-time fleet management and control.</p>
                    <ul>
                        <li>Real-time location tracking</li>
                        <li>24/7 operational monitoring</li>
                        <li>Instant violation alerts</li>
                        <li>Data-driven decision making</li>
                        <li>Comprehensive reporting and analytics</li>
                    </ul>
                    <div class="highlight">
                        Managing a fleet today means more than just tracking locations — it's about real-time control, smart decisions, and operational speed. We have an experienced team and dedicated 24x7 operation to monitor your fleet and alert on the occasion of any violation.
                    </div>
                </div>
            </div>
        </div>
    </div>





 <?php    } 
    elseif(!empty($subservice)) {
        foreach ($subservice as $key => $value) { ?>
            <div class="col-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center rounded p-3 shadow-sm border small-card" style="width:190px;">
                    <div class="mb-3">
                        <img src="<?php echo base_url($value['proj_images']); ?>" 
                             class="img-fluid rounded-circle circle-image mx-auto d-block" 
                             alt="Service Image" style="width: 100px;height: 100px;">
                    </div>
                    <div class="service-content">
                        <p class="mb-3"><?php echo $value['sub_service']; ?></p>

                        <a href="<?php echo htmlspecialchars($value['video'], ENT_QUOTES); ?>" 
                           target="_blank" 
                           class="btn btn-light rounded-pill text-primary py-1 px-3 btn-sm">
                            Demo
                        </a>
                        <a href="#" 
                           class="btn btn-light rounded-pill text-primary py-1 px-3 btn-sm" 
                           onclick="openModal('<?php echo $value['sub_service']; ?> - Order', generateForm('<?php echo $value['sub_service']; ?>'))">
                            Order
                        </a>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
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
