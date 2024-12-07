<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MedConnect - Appointment</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <style>
      .card {
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .sidebar {
         min-height: 100%;
         background-color: #f8f9fa;
      }

      .main-content {
         padding: 20px;
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




      <!-- Dashboard Main Section -->
      <div class="row gx-0 gy-0 mt-5" style="min-height: 90vh;">
         <!-- Sidebar -->
         <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php" ?>


         <!-- Main Content -->
         <div class="col-12 col-sm-10 main-content">
            <div class="row justify-content-center">
               <div class="col-md-8">
                  <div class="card p-4">
                     <h3 class="text-center mb-4">Book Your Appointment</h3>
                     <form id="appointmentForm" onsubmit="handleSubmit(event)">
                        <!-- User Information -->
                        

                        <!-- Appointment Details -->
                        <div class="mb-3">
                           <label for="date" class="form-label">Preferred Date</label>
                           <input type="date" class="form-control" id="date" required>
                        </div>

                        <div class="mb-3">
                           <label for="time" class="form-label">Preferred Time</label>
                           <select class="form-select" id="time" required>
                              <option value="" selected disabled>Select a time</option>
                              <option>9:00 AM - 10:00 AM</option>
                              <option>10:00 AM - 11:00 AM</option>
                              <option>11:00 AM - 12:00 PM</option>
                              <option>2:00 PM - 3:00 PM</option>
                              <option>3:00 PM - 4:00 PM</option>
                           </select>
                        </div>

                        <div class="mb-3">
                           <label for="purpose" class="form-label">Purpose of Appointment</label>
                           <textarea class="form-control" id="purpose" rows="3" placeholder="Describe the purpose of your appointment" required></textarea>
                        </div>

                        <!-- Confirmation Button -->
                        <div class="d-grid">
                           <button type="submit" class="btn btn-primary">Confirm Appointment</button>
                        </div>
                     </form>
                     <!-- Custom Alert -->
                     <div id="customAlert" class="alert d-none mt-3 text-center"></div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

   <script>
      function handleSubmit(event) {
         event.preventDefault();
         const date = $("#date").val();
         const time = $("#time").val();
         const purpose = $("#purpose").val();

         // Validate inputs
         if ( !date || !time || !purpose) {
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

</body>

</html>