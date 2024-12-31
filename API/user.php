

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/utl/helper.php';

$request = isset($_POST['request']) ? $_POST['request'] : null;


if ($request === 'register') {
   global $conn;

   try {
      $email = isset($_POST['user_email']) ? $_POST['user_email'] : null;
      $password = isset($_POST['password']) ? $_POST['password'] : null;
      $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
      $matric_num = isset($_POST['matric_num']) ? $_POST['matric_num'] : null;
      $university = isset($_POST['university']) ? $_POST['university'] : null;

      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      $query = "INSERT INTO patient (password,  patientLastName, patientEmail,  matric_num, university) 
                VALUES ('$hashedPassword',  '$last_name','$email', '$matric_num',  '$university')";

      $result = mysqli_query($conn, $query);

      if ($result) {
         sendResp("success", "Account created successfully");
      } else {
         $error = mysqli_error($conn);
         sendResp("failed", "Database error: $error");
      }
   } catch (Throwable $th) {
      sendResp("failed", "Exception occurred: " . $th->getMessage());
   }
}

if ($request == 'login') {
   global $conn;

   // Retrieve input values safely
   $matric_num = isset($_POST['matric_num']) ? $_POST['matric_num'] : null;
   $password = isset($_POST['password']) ? $_POST['password'] : null;
   $university = isset($_POST['university']) ? $_POST['university'] : null;

   if (!$matric_num || !$password || !$university) {
      sendResp("failed", "All fields are required");
      exit();
   }

   // Sanitize input
   $matric_num = mysqli_real_escape_string($conn, $matric_num);
   $university = mysqli_real_escape_string($conn, $university);

   // Query database
   $sql = "SELECT * FROM patient WHERE matric_num = '$matric_num' AND university = '$university'";
   $query = mysqli_query($conn, $sql);

   if (!$query) {
      $error = mysqli_error($conn);
      sendResp("failed", "Error executing query: $error");
      exit();
   }

   if (mysqli_num_rows($query) > 0) {
      $patient = mysqli_fetch_assoc($query);

      // Verify password
      if (password_verify($password, $patient['password'])) {
         // Start session and store patient info
         session_start();
         $_SESSION['patient_id'] = $patient['patient_id'];
         $_SESSION['matric_num'] = $patient['matric_num'];
         $_SESSION['university'] = $patient['university'];
         $_SESSION['patientLastName'] = $patient['patientLastName'];
         $_SESSION['patientFirstName'] = $patient['patientFirstName'];
         $_SESSION['patientMaritialStatus'] = $patient['patientMaritialStatus'];
         $_SESSION['patientDOB'] = $patient['patientDOB'];




         sendResp("success", "Account successfully logged in");
      } else {
         sendResp("failed", "Incorrect matric no. or password");
      }
   } else {
      sendResp("failed", "Incorrect details");
   }
}




