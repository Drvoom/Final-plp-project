<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedConnect Dashboard</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <link href="/assets/css/index.css" rel="stylesheet">
</head>
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

            </div>

            <!-- Additional Status Section -->
            <div class="col-12">

            </div>
         </div>
      </div>
   </div>

   <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>

</body>

</html>