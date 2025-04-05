        <?php if($id == 1 ){ ?>
            <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary">Software Development</h4>
                    <h1 class="display-5 mb-4">CST : A customized software Services Provider</h1>
                    <p class="mb-0">ComSys IT is a leader of Software Development in India and provide a large number of web services, including programming for online applications. The Customized Software Developments for all kinds of web applications built to satisfy the client's needs. For custom developments, at ComSys IT Company the employees are trained to work in the following technology practice.</p>
                            <p>Programming languages - HTML,HTML5, XML, ASP, VB/Java Script, Asp.NET, PHP in association with the database systems. Data base generally recommended - MS Access, MySQL and SQL Usage of web design and graphic design tools - Adobe Dreamweaver, Adobe XD, Adobe Photoshop, Adobe Illustrator, CorelDraw.</p>

                            Development of high-impact graphic design and web design projects including menus, logos, web pages etc.
                                                </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <?php if(!empty($subservice)){
                        foreach ($subservice as $key => $value) { 
                            if($value['serviceid'] == 1){ ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="<?php echo base_url('assets/images/visitor_gatepas.png'); ?>"></div>
                            <div class="service-content">
                                <h4 class="mb-4"><?php echo $value['sub_service']; ?></h4>
                                <p class="mb-4"><?php echo $value['Description']; ?></p>
                               <a href="javascript:void(0);" class="btn btn-light rounded-pill text-primary py-2 px-4"
                                onclick="playVideo('<?php echo $value['video']; ?>')">Demo
                                </a>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
                                onclick="openModal('<?php echo $value['sub_service']; ?> - Order', generateForm('<?php echo $value['sub_service']; ?>'))">Order
                                </a>
                            </div>
                            </div>
                        </div>
                            
                    <?php    }
                        }
                    }  ?>
                    
                    
                   
                </div>
            </div>
        </div>

       <?php  }elseif ($id == 2) { ?>
         <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary">Web Developement</h4>
                    <h1 class="display-5 mb-4">CST : A customized software Services Provider</h1>
                    <p class="mb-0">ComSys IT is a leader of Web Developement in India and provide a large number of web services, including programming for online applications. The Customized web developments for all kinds of web applications built to satisfy the client's needs. For custom developments, at ComSys IT Company the employees are trained to work in the following technology practice.</p>

<p>Programming languages - HTML,HTML5, XML, ASP, VB/Java Script, Asp.NET, PHP in association with the database systems. Data base generally recommended - MS Access, MySQL and SQL Usage of web design and graphic design tools - Adobe Dreamweaver, Adobe XD, Adobe Photoshop, Adobe Illustrator, CorelDraw.</p>

Development of high-impact graphic design and web design projects including menus, logos, web pages etc.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                     <?php if(!empty($subservice)){
                        foreach ($subservice as $key => $value) { 
                            if($value['serviceid'] == 2){ ?>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="<?php echo base_url('assets/images/visitor_gatepas.png'); ?>"></div>
                            <div class="service-content">
                                <h4 class="mb-4"><?php echo $value['sub_service']; ?></h4>
                                <p class="mb-4"><?php echo $value['Description']; ?></p>
                               <a href="javascript:void(0);" class="btn btn-light rounded-pill text-primary py-2 px-4"
                                onclick="playVideo('<?php echo $value['video']; ?>')">Demo
                                </a>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
                                onclick="openModal('<?php echo $value['sub_service']; ?> - Order', generateForm('<?php echo $value['sub_service']; ?>'))">Order
                                </a>
                            </div>
                            </div>
                        </div>
                            
                    <?php    }
                        }
                    }  ?>
                    <!-- <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="<?php echo base_url('assets/images/visitor_gatepas.png'); ?>"></div>
                            <div class="service-content">
                                <h4 class="mb-4">Visitor Gate Pass</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                 <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
   onclick="openModal('Head count system - Modules', generateModuleList())">Module</a>  
<a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
   onclick="openModal('Head count system - Order', generateForm('Head count system'))">Order</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="<?php echo base_url('assets/images/visitor_gatepas.png'); ?>"></div>
                            <div class="service-content">
                                <h4 class="mb-4">E-Safe Pass </h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                 <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
   onclick="openModal('Head count system - Modules', generateModuleList())">Module</a>  
<a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
   onclick="openModal('Head count system - Order', generateForm('Head count system'))">Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center rounded p-4">
                            <div class="service-icon d-inline-block bg-light rounded p-4 mb-4"><img src="<?php echo base_url('assets/images/inventory.png'); ?>"></div>
                            <div class="service-content">
                                <h4 class="mb-4">Inventry System</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur adipisicing elit
                                </p>
                                <a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
   onclick="openModal('Head count system - Modules', generateModuleList())">Module</a>  
<a href="#" class="btn btn-light rounded-pill text-primary py-2 px-4" 
   onclick="openModal('Head count system - Order', generateForm('Head count system'))">Order</a>
                            </div>
                        </div>
                    </div> -->
                    
            </div>
        </div>
           
       <?php }elseif ($id == 3) { ?>
           <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary">Industrial Electronic</h4>
                    <h1 class="display-5 mb-4">CST : A customized software Services Provider</h1>
                    <p class="mb-0">ComSys IT is a leader of Industrial Electronic in India and provide a large number of web services, including programming for online applications. The Customized web developments for all kinds of web applications built to satisfy the client's needs. For custom developments, at ComSys IT Company the employees are trained to work in the following technology practice.</p>

<p>Programming languages - HTML,HTML5, XML, ASP, VB/Java Script, Asp.NET, PHP in association with the database systems. Data base generally recommended - MS Access, MySQL and SQL Usage of web design and graphic design tools - Adobe Dreamweaver, Adobe XD, Adobe Photoshop, Adobe Illustrator, CorelDraw.</p>

Development of high-impact graphic design and web design projects including menus, logos, web pages etc.
                    </p>
                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php  }elseif ($id == 4) { ?>
           <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary">Access and Security</h4>
                    <h1 class="display-5 mb-4">CST : A customized software Services Provider</h1>
                    <p class="mb-0">ComSys IT is a leader of Access and Security in India and provide a large number of web services, including programming for online applications. The Customized web developments for all kinds of web applications built to satisfy the client's needs. For custom developments, at ComSys IT Company the employees are trained to work in the following technology practice.</p>

<p>Programming languages - HTML,HTML5, XML, ASP, VB/Java Script, Asp.NET, PHP in association with the database systems. Data base generally recommended - MS Access, MySQL and SQL Usage of web design and graphic design tools - Adobe Dreamweaver, Adobe XD, Adobe Photoshop, Adobe Illustrator, CorelDraw.</p>

Development of high-impact graphic design and web design projects including menus, logos, web pages etc.
                    </p>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
       <?php }elseif ($id == 5) { ?>
           <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary">Hardware & Networking</h4>
                    <h1 class="display-5 mb-4">CST : A customized software Services Provider</h1>
                    <p class="mb-0">ComSys IT is a leader of Hardware & Networking in India and provide a large number of web services, including programming for online applications. The Customized web developments for all kinds of web applications built to satisfy the client's needs. For custom developments, at ComSys IT Company the employees are trained to work in the following technology practice.</p>

<p>Programming languages - HTML,HTML5, XML, ASP, VB/Java Script, Asp.NET, PHP in association with the database systems. Data base generally recommended - MS Access, MySQL and SQL Usage of web design and graphic design tools - Adobe Dreamweaver, Adobe XD, Adobe Photoshop, Adobe Illustrator, CorelDraw.</p>

Development of high-impact graphic design and web design projects including menus, logos, web pages etc.
                    </p>
                </div>
                 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
       <?php } elseif ($id == 6) { ?>
         <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                    <h4 class="mb-1 text-primary">Lay Out Designing & Interior</h4>
                    <h1 class="display-5 mb-4">CST : A customized software Services Provider</h1>
                    <p class="mb-0">ComSys IT is a leader of Lay Out Designing & Interior in India and provide a large number of web services, including programming for online applications. The Customized web developments for all kinds of web applications built to satisfy the client's needs. For custom developments, at ComSys IT Company the employees are trained to work in the following technology practice.</p>

<p>Programming languages - HTML,HTML5, XML, ASP, VB/Java Script, Asp.NET, PHP in association with the database systems. Data base generally recommended - MS Access, MySQL and SQL Usage of web design and graphic design tools - Adobe Dreamweaver, Adobe XD, Adobe Photoshop, Adobe Illustrator, CorelDraw.</p>

Development of high-impact graphic design and web design projects including menus, logos, web pages etc.
                    </p>
                </div>
                 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
        <?php } ?>
        <div id="dynamicModalContainer"></div>


        <!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Video Demo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="stopVideo()"></button>
      </div>
      <div class="modal-body text-center">
        <!-- YouTube iframe -->
        <iframe id="demoVideo" width="100%" height="400" src="" frameborder="0" 
                allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    // Data model for modules
    const moduleData = {
        head_count_system: [
            "Employee Entry Tracking",
            "Real-time Occupancy Monitoring",
            "Visitor Log System",
            "Attendance Reports",
            "Access Control"
        ],
        e_safe_pass: [
            "User Management",
            "Visitor Gate Pass",
            "Security Module",
            "Admin Dashboard",
            "Reporting & Analytics"
        ],
        visitor_management: [
            "Visitor Registration",
            "Badge Printing",
            "Check-in/Check-out Tracking",
            "Host Notifications",
            "Security Clearance"
        ]
    };


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
// video monitoring
function playVideo(videoUrl) {
    var videoElement = document.getElementById('demoVideo');

    // Convert YouTube URL to embed format if necessary
    var embedUrl = videoUrl.replace("watch?v=", "embed/").replace("youtu.be/", "www.youtube.com/embed/");

    // Append autoplay parameter
    embedUrl += "?autoplay=1";

    videoElement.src = embedUrl;  // Set the iframe source

    var videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
    videoModal.show();
}

// Stop the video when the modal is closed
function stopVideo() {
    var videoElement = document.getElementById('demoVideo');
    videoElement.src = "";  // Clear the iframe source to stop playback
}


</script>