    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
       <div class="container py-5">
          <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
             <div class="row g-4">
                <div class="col-lg-3">
                   <a href="#">
                   </a>
                </div>
                <div class="col-lg-6">
                   <div class="position-relative mx-auto">
                      <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                      <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;"> News Letter</button>
                   </div>
                </div>
                <div class="col-lg-3">
                   <div class="d-flex justify-content-end pt-3">
                      <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                      <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                   </div>
                </div>
             </div>
          </div>
      

<div class="row g-5">
<div class="col-lg-3 col-md-6">
<div class="footer-item">
<h4 class="text-light mb-3">Why Choose Our Telemedicine Platform?</h4>
<p class="mb-4">Experience convenient, high-quality healthcare from the comfort of your own home. Our platform connects you with board-certified physicians and healthcare professionals.</p>
<a href="#" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Learn More</a>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="d-flex flex-column text-start footer-item">
<h4 class="text-light mb-3">Quick Links</h4>
<a class="btn-link" href="#">About Us</a>
<a class="btn-link" href="#">Contact Us</a>
<a class="btn-link" href="#">Privacy Policy</a>
<a class="btn-link" href="#">Terms & Conditions</a>
<a class="btn-link" href="#">FAQs & Help</a>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="d-flex flex-column text-start footer-item">
<h4 class="text-light mb-3">Patient Resources</h4>
<a class="btn-link" href="#">My Account</a>
<a class="btn-link" href="#">Appointment Scheduling</a>
<a class="btn-link" href="#">Prescription Refills</a>
<a class="btn-link" href="#">Medical Records</a>
<a class="btn-link" href="#">Patient Portal</a>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="footer-item">
<h4 class="text-light mb-3">Contact Us</h4>
<p>Phone: 1-800-MED-CARE (1-800-633-2273)</p>
<p>Email: mailto:info@telemedicineplatform.com</p>
<p>Address: 123 Main St, Anytown, Nigeria 12345</p>
<img src="img/payment.png" class="img-fluid" alt="">
</div>
</div>
</div>

       </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
       <div class="container">
          <div class="row">
             <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your
                      Site Name</a>, All right reserved.</span>
             </div>
             <div class="col-md-6 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https:/". ***/-->
                Designed By <a class="border-bottom" href="/">Drvoom</a>
             </div>
          </div>
       </div>
    </div>
    <!-- Copyright End -->
    <!-- Bootstrap JS for collapsible navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
       window.addEventListener("load", function() {
          const preloader = document.getElementById("preloader");
          preloader.style.display = "none";
       });
    </script>
    
    <script>
       function handleSubmit(event) {
          event.preventDefault();
          const date = $("#date").val();
          const time = $("#time").val();
          const purpose = $("#purpose").val();

          // Validate inputs
          if (!date || !time || !purpose) {
             return customAlert("All fields are required!", "error", 3000);
          }

          // Send data to the server
          $.post('/API/appointment.php', {
             request: "book_appointment",
             date,
             time,
             purpose,
          }, function(response) {
             response = JSON.parse(response);

             if (response.status === "success") {
                customAlert("Appointment booked successfully", "success", 3000);
                setTimeout(() => {
                   window.location.href = "/"; // Redirect after success
                }, 1500);
             } else {
                customAlert(response.message, "error", 3000);
             }
          }).fail(function() {
             customAlert("Could not send request. Please check your internet connection.", "error", 3000);
          });
       }

       function customAlert(message, status, duration) {
          const customAlertCard = $("#customAlert");
          customAlertCard.html(message);
          customAlertCard.removeClass("bg-danger").removeClass("bg-success");
          customAlertCard.addClass(status === "success" ? "bg-success" : "bg-danger");
          customAlertCard.removeClass("d-none");

          setTimeout(() => {
             customAlertCard.addClass("d-none");
          }, duration);
       }
    </script>
   
   
    
