
<?php
// Start a session
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/utl/helper.php'; // Adjust this to your actual DB connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['request'] === 'book_appointment') {
   $status = "unattended";
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $time = mysqli_real_escape_string($conn, $_POST['time']);
   $purpose = mysqli_real_escape_string($conn, $_POST['purpose']);
   $user =  $_SESSION['patient_id'];

   $sql = "INSERT INTO appointment ( appointment_date, appointment_time, purpose, patient_status, user_id )
            VALUES (  '$date', '$time', '$purpose', '$status','$user')";

   if (mysqli_query($conn, $sql)) {
      echo json_encode(["status" => "success"]);
   } else {
      echo json_encode(["status" => "error", "message" => "Failed to book appointment."]);
   }
   exit();
}
echo json_encode(["status" => "error", "message" => "Invalid request."]);
