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
   <style>
      .offcanvas-nav .nav-link {
         font-size: 1.2rem;
         margin: 10px 0;
      }
   </style>
</head>

<body>
   <div class="container-fluid p-0">
      <!-- Header Section -->
      <div class="col-12 shadow p-3 d-flex justify-content-between align-items-center">
         <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>

      </div>

      <!-- Offcanvas Sidebar for Mobile -->
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/offside-bar.php" ?>


      <!-- Dashboard Main Section -->
      <div class="row gx-0 gy-0 mt-5" style="height: 90vh">
         <!-- Sidebar for Larger Screens -->
         <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php" ?>


         <!-- Main Content Area -->
         <div class="col-12 col-sm-10 p-3">
            <!-- Section: Book Appointment -->
            <div class="col-12 mb-3">
               <div class="p-3 bg-white border rounded shadow-sm">
                  <h5>Book An Appointment</h5>
               </div>
            </div>

            <!-- USER PROFILE ROW STARTS-->
            <div class="row">
               <div class="col-md-3 col-sm-3">
                  <div class="user-wrapper">
                     <img src="assets/img/1.jpg" class="img-responsive" />
                     <div class="description">
                        <h4></h4>
                        <h5> <strong> University Online Health-center </strong></h5>
                        <p>Pellentesque elementum dapibus convallis.</p>
                        <hr />
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
                     </div>
                  </div>
               </div>

               <div class="col-md-9 col-sm-9 user-wrapper">
                  <div class="description">
                     <h3> </h3>
                     <hr />
                     <div class="panel panel-default">
                        <div class="panel-body">
                           <table class="table table-user-information" align="center">
                              <tbody>
                                 <tr>
                                    <td>PatientMaritialStatus</td>
                                    <td> <?php echo $patientMaritialStatus ?> </td>
                                 </tr>
                                 <tr>
                                    <td>PatientDOB</td>
                                    <td><?php echo $patientDOB  ?></td>
                                 </tr>
                                 <tr>
                                    <td>PatientGender</td>
                                    <td><?php echo $patientMaritialStatus ?></td>
                                 </tr>
                                 <tr>
                                    <td>PatientAddress</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>PatientPhone</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>PatientEmail</td>
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- USER PROFILE ROW END -->
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