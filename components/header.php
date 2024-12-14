<!-- Navbar start -->
<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/utl/helper.php';

// Check if the patient is logged in

session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['patient_id'])) {
   // User is logged in
   $patientMatric = $_SESSION['matric_num'];
   $patientName = $_SESSION['patientLastName'];
   $patientFirstName = $_SESSION['patientFirstName'];
   $patientMaritialStatus = $_SESSION['patientMaritialStatus'];
   $patientDOB = $_SESSION['patientDOB'];


} else {
   //  User is not logged in, redirect to login page
   header("Location: /login_page/");
   exit();
}



?>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedConnect</title>
   <!-- Bootstrap CSS for responsiveness -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato&family=League+Spartan:wght@400;500;600;700&family=Montserrat:ital@1&family=Nunito:wght@200;300;400;500;600&family=Poppins:wght@300;600&display=swap" rel="stylesheet">
</head>

   <div id="preloader">
      <div class="spinner"></div>
   </div>


   <div class="container-fluid border bg-dark shadow mb-3 fixed-top">
      <div class="text-white align-items-center">
         <div>
            <nav class="navbar navbar-light navbar-expand-xl">
               <a class="title">Tel<span>Medicines</span></a>

               <!-- Hamburger Button for Mobile -->
               <button class="btn btn-primary d-sm-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                  <i class="bi bi-list"></i>
               </button>
            </nav>
         </div>
         <div class="col-md-4">
            <a class="nav-link" href="/patient/health_tips.php">
               <?php echo ucfirst($patientName)
               ?> <i class="bi bi-person-circle"></i>
            </a>
         </div>
      </div>
   </div>
   <!-- Navbar End -->