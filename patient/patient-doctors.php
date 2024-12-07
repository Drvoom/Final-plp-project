<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedConnect - Appointment</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <link href="/assets/css/index.css" rel="stylesheet">

   <style>
      .doctor-card {
         border: none;
         border-radius: 8px;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         transition: transform 0.2s ease;
      }

      .doctor-card:hover {
         transform: scale(1.05);
      }

      .doctor-img {
         width: 100%;
         height: 250px;
         object-fit: cover;
         border-top-left-radius: 8px;
         border-top-right-radius: 8px;
      }

      .doctor-info {
         padding: 15px;
      }

      .doctor-name {
         font-weight: bold;
         margin-bottom: 5px;
      }

      .doctor-speciality {
         color: #6c757d;
         font-size: 0.9rem;
      }
   </style>
</head>

<body>
   <div class="container-fluid p-0">
      <!-- Header Section -->
      <div class="col-12 shadow p-3 bg-white">
         <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
      </div>

      <!-- Offcanvas Sidebar for Mobile -->
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/offside-bar.php" ?>


      <div class="row gx-0 gy-0 mt-5" style="min-height: 90vh;">
         <!-- Sidebar -->
         <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php" ?>


         <!-- Main Content -->
         <div class="col-12 col-sm-10 main-content">
            <div class="container my-5">
               <h2 class="text-center mb-4">Our Doctors</h2>
               <div class="row g-4">
                  <!-- Doctor 1 -->
                  <div class="col-md-4">
                     <div class="card doctor-card">
                        <img src="/img/7450159 1.png" alt="Dr. Sarah Johnson" class="doctor-img">
                        <div class="doctor-info text-center">
                           <p class="doctor-name">Dr. Sarah Johnson</p>
                           <p class="doctor-speciality">Cardiologist</p>
                        </div>
                     </div>
                  </div>

                  <!-- Doctor 2 -->
                  <div class="col-md-4">
                     <div class="card doctor-card">
                        <img src="/img/3d-doctor-cartoon-character_714173-540.avif" alt="Dr. Mark Smith" class="doctor-img">
                        <div class="doctor-info text-center">
                           <p class="doctor-name">Dr. Mark Smith</p>
                           <p class="doctor-speciality">Dermatologist</p>
                        </div>
                     </div>
                  </div>

                  <!-- Doctor 3 -->
                  <div class="col-md-4">
                     <div class="card doctor-card">
                        <img src="/img/3d-graphic-designer-showing-thumbs-up-png 1.png" alt="Dr. Emily Brown" class="doctor-img">
                        <div class="doctor-info text-center">
                           <p class="doctor-name">Dr. Emily Brown</p>
                           <p class="doctor-speciality">Pediatrician</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   <script>
      window.addEventListener("load", function() {
         const preloader = document.getElementById("preloader");
         preloader.style.display = "none";
      });
   </script>
</body>

</html>