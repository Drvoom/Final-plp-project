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
      /* Style for dark font color in paragraphs */
      .dark-text p {
         color: #333;
         /* Dark gray or choose any other dark color */
      }

      /* Style for chat box */
      .chat-box {
         position: fixed;
         bottom: 0;
         right: 0;
         width: 300px;
         height: 400px;
         background-color: #f9f9f9;
         border: 1px solid #ccc;
         padding: 10px;
      }

      .chat-box.show {
         display: block;
      }

      .chat-box .chat-header {
         background-color: #333;
         color: #fff;
         padding: 10px;
         border-bottom: 1px solid #ccc;
      }

      .chat-box .chat-body {
         padding: 10px;
         overflow-y: auto;
         height: 300px;
      }

      .chat-box .chat-footer {
         padding: 10px;
         border-top: 1px solid #ccc;
      }

      .chat-box .chat-footer input[type="text"] {
         width: 70%;
         height: 30px;
         padding: 10px;
         border: 1px solid #ccc;
      }

      .chat-box .chat-footer button[type="button"] {
         width: 30%;
         height: 30px;
         padding: 10px;
         border: none;
         background-color: #333;
         color: #fff;
         cursor: pointer;
      }
   </style>
</head>

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
            <!-- Chat Box -->
            <div class="" id="">
               <div class="chat-header">
                  <h5>Chat Box</h5>
               </div>
               <div class="chat-body">
                  <!-- Chat messages will be displayed here -->
               </div>
               <div class="chat-footer">
                  <input type="text" id="chat-input" placeholder="Type a message...">
                  <button type="button" id="send-chat-message">Send</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

   <script>
      // Toggle chat box
      document.getElementById('toggle-chat-box').addEventListener('click', function() {
         var chatBox = document.getElementById('chat-box');
         chatBox.classList.toggle('show');
      });


      // Send chat message
      document.getElementById('send-chat-message').addEventListener('click', function() {
         var chatInput = document.getElementById('chat-input');
         var chatMessage = chatInput.value;
         if (chatMessage !== '') {
            var chatBody = document.querySelector('.chat-body');
            var newMessage = document.createElement('div');
            newMessage.classList.add('chat-message');
            newMessage.innerHTML = chatMessage;
            chatBody.appendChild(newMessage);
            chatInput.value = ''; // Clear the input field
            chatBody.scrollTop = chatBody.scrollHeight; // Scroll to the bottom of the chat body
         }
      });
   </script>
   <script>
      window.addEventListener("load", function() {
         const preloader = document.getElementById("preloader");
         preloader.style.display = "none";
      });
   </script>

   // Optional: Add a timestamp to each message
   // var timestamp = new Date().toLocaleTimeString();
   // newMessage.innerHTML = ${chatMessage} (${timestamp});