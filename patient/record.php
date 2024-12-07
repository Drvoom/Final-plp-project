<!DOCTYPE html>
<html lang="en">


<style>
   /* Style for dark font color in paragraphs */
   .dark-text p {
      color: #333;
      /* Dark gray or choose any other dark color */
   }
</style>

<body>

   <div class="container-fluid p-0">
      <!-- Header Section -->
      <div class="col-12 shadow p-3">
         <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
      </div>

      <!-- Offcanvas Sidebar for Mobile -->
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/offside-bar.php" ?>

      <!-- Dashboard Main Section -->
      <div class="row gx-0 gy-0 mt-5" style="height: 90vh">
         <!-- Sidebar Menu -->
         <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php" ?>


         <!-- Main Content Area -->
         <div class="col-12 col-sm-10 p-3">
            <!-- Section: Book Appointment -->
            <div class="col-12 mb-3">
               <div class="p-3 bg-white border rounded shadow-sm">
                  <h5>Book An Appointment</h5>
               </div>
            </div>

            <!-- Appointment Summary Stats -->
            <div class="col-12 mb-3">
               <div class="row g-3">
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Patient Matric No.</p>
                        <strong>237015</strong>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Total Appointment</p>
                        <strong>10</strong>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Pending Appointment</p>
                        <strong>2</strong>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Declined Appointment</p>
                        <strong>2</strong>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Medical Records & Tips Video Section -->
            <div class="col-12 mb-3">
               <div class="row g-3">
                  <div class="col-md-8">
                     <div class="p-3 bg-white border rounded shadow-sm" style="height: 100%;">
                        <h5>Medical Records</h5>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div style="height: 100%;" class="p-3 bg-white border rounded shadow-sm">
                        <h5>Hygiene Tips Video</h5>
                        <!-- Embedded YouTube video iframe -->
                        <div class="embed-responsive embed-responsive-16by9 mt-2">
                           <video autoplay="" loop="" muted="" width="250" height="200">
                              <source src="https://res.cloudinary.com/dbqtos6rt/video/upload/v1720673662/opms/assets/health-care_anybcd.mp4" type="video/mp4">
                           </video>
                        </div>
                     </div>
                  </div>

               </div>
            </div>


            <!-- Status Summary Section -->
            <div class="col-12 mb-3">
               <div class="row g-3">
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Status 1</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Status 2</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Status 3</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="p-3 bg-light border rounded text-center">
                        <p>Status 4</p>
                     </div>
                  </div>
               </div>
            </div>


         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   <script>
      window.addEventListener("load", function() {
         const preloader = document.getElementById("preloader");
         preloader.style.display = "none";
      });
   </script>

</body>

</html>