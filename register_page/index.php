<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedConnect - Register</title>
    <!-- Bootstrap CSS for responsiveness -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">
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
        <div class="container py-3">
            <div class="row align-items-center mb-4 mb-lg-0 doctor-image">
                <!-- Image Section -->
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img src="/img/doctor.png" class="img-fluid" alt="Doctor">
                </div>

                <!-- Registration Form -->
                <div class="col-lg-6 login-container">
                    <form onsubmit="handleSubmit(event)" method="post">
                        <h3 class="mb-2">Register</h3>
                        <p>Bringing Doctors closer!</p>
                        <div id="customAlert" class="alert d-none position-fixed top-0 start-50 translate-middle-x text-center text-white p-3" style="z-index: 1050;"></div>

                        <p id="message"></p>

                        <!-- Name and Phone on the same row -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter your First Name" name="first_name" id="first_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="usernumber" class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter your Last Name" name="last_name" id="last_name" required>
                            </div>
                        </div>

                        <!-- email and Phone on the same row -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Enter your Email" name="email" id="user_email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="usernumber" class="form-label">Phone</label>
                                <input type="tel" class="form-control" placeholder="Enter your phone number" name="phone_number" id="user_number" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="useraddress" class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Enter your address" name="project_topic" id="user_address" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" name="password" id="password" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" name="confirmPassword" id="confirm_password" required>
                            </div>
                        </div>

                        <!-- University and Matric No on the same row -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="university" class="form-label">University</label>
                                <select class="form-select" name="university" id="university" required>
                                    <option value="" selected>Select University</option>
                                    <!-- Options will be populated dynamically -->
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="matricNum" class="form-label">Matric No.</label>
                                <input type="text" class="form-control" placeholder="Enter your Matric Number" name="matricNum" id="matric_num" required>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="privacy_policy" required>
                            <label class="form-check-label" for="privacy_policy">
                                I agree with the terms and conditions and privacy policy
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Register Now</button>
                        <div class="d-flex justify-content-center align-items-center py-2" style="height: 10px;">
                            <a href="/login_page/"><span class="fs-5 ">login</span></a>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/footer.php" ?>


    <script>
        function handleSubmit(event) {
            event.preventDefault();

            const user_email = $("#user_email").val();
            const password = $("#password").val();
            const confirm_password = $("#confirm_password").val();
            const first_name = $("#first_name").val();
            const last_name = $("#last_name").val();
            const user_address = $("#user_address").val();
            const matric_num = $("#matric_num").val();
            const user_policy = $("#privacy_policy").prop("checked");
            const user_num = $("#user_number").val();
            const university = $("#university").val(); // Changed to match PHP variable name
            const messageElem = document.getElementById("message");

            if (!user_email) return customAlert("Email can't be empty!", "error", 3000);
            if (!password || password.length < 5) return customAlert("Password must be more than 5 characters!", "error", 3000);
            if (password !== confirm_password) {
                messageElem.textContent = "Passwords do not match!";
                messageElem.style.color = "red";
                return;
            } else {
                messageElem.textContent = "";
            }

            if (!user_policy) {
                messageElem.textContent = "Must Agree with Policy!";
                messageElem.style.color = "red";
                return;
            } else {}

            $.post('../API/user.php', {
                request: "register",
                password,
                first_name,
                last_name,
                user_email,
                user_address,
                university, // Updated to match PHP variable name
                matric_num,
                user_num,
            }, function(response) {
                // try {
                //     response = JSON.parse(response);
                // } catch (error) {
                //     return customAlert("An error occurred while processing your request.", "error", 3000);
                // }
                response = JSON.parse(response);


                if (response.status === "success") {
                    customAlert("Account created successfully", "success", 3000);
                    setTimeout(() => {
                        window.location.href = "/login_page/";
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

         const universities = [
         "University of Lagos",
         "Obafemi Awolowo University",
         "Ahmadu Bello University",
         "University of Nigeria, Nsukka",
         "Covenant University",
      ];

      const universitySelect = document.getElementById("university");

      universities.forEach((university) => {
         const option = document.createElement("option");
         option.value = university;
         option.textContent = university;
         universitySelect.appendChild(option);
      });
    </script>
</body>

</html>
