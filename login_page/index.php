<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedConnect - Login</title>
   <!-- Bootstrap CSS for responsiveness -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato&family=League+Spartan:wght@400;500;600;700&family=Montserrat:ital@1&family=Nunito:wght@200;300;400;500;600&family=Poppins:wght@300;600&display=swap" rel="stylesheet">


</head>

<body>
   <!-- Navbar for both desktop and mobile -->
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
         <a class="title">Tel<span>Medicines</span></a>
      </div>
   </nav>

   <section class="home section--lg">
      <div class="container py-5">
         <div class="row align-items-center">
            <!-- Doctor Image Section with overlay effect on mobile -->
            <div class="col-lg-6 text-center mb-4 mb-lg-0 doctor-image">
               <img src="/img/doctor.png" class="img-fluid" alt="Doctor">
            </div>

            <!-- Registration Form overlay on mobile -->
            <div class="col-lg-6 login-container">
               <form onsubmit="handleSubmit(event)" method="post">
                  <h3 class="mb-4">Login</h3>
                  <p class="text-dark fs-3">Bringing Doctors closer!</p>
                  <div id="customAlert" class="alert d-none position-fixed top-0 start-50 translate-middle-x text-center text-white p-3" style="z-index: 1050;"></div>

                  <p id="message"></p>

                  <!-- University and Matric No -->
                  <div class="mb-3">
                     <label for="university" class="form-label text-dark fs-5">University</label>
                     <select class="form-select" name="university" id="university" required>
                        <option value="" selected>Select University</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="matricNum" class="form-label text-dark fs-5">Matric No.</label>
                     <input type="text" class="form-control" placeholder="Enter your Matric Number" name="matricNum" id="matric_num" required>
                  </div>

                  <div class="mb-3">
                     <label for="password" class="form-label text-dark fs-5">Password</label>
                     <input type="password" class="form-control" placeholder="Enter your password" name="password" id="password" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Login</button>
                  <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
                     <a href="/register_page/"><span class="fs-5">Register</span></a>
                  </div>



               </form>
            </div>
         </div>
      </div>
   </section>


   <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>

</body>

</html>
