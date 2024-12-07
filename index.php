<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedConnect - Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<style>
    .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .stat-card {
        background-color: #f8f9fa;
        border: none;
        border-radius: 8px;
    }

    .stat-card p {
        font-size: 1rem;
        font-weight: bold;
        margin-bottom: 0;
    }

    .stat-card strong {
        font-size: 1.2rem;
        color: #007bff;
    }

    .icon-large {
        font-size: 2rem;
        color: #007bff;
    }
</style>



<body>
    <div class="container-fluid p-0">
        <!-- Header Section -->
        <div class="col-12 shadow p-3 bg-white">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/header.php" ?>
        </div>

        <!-- Offcanvas Sidebar for Mobile -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/offside-bar.php" ?>

        <div class="row gx-0 gy-0 mt-5" style="height: 90vh;">
            <!-- Sidebar -->
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/side-bar.php" ?>


            <!-- Main Content -->
            <div class="col-12 col-sm-10 p-4">
                <!-- Book Appointment Section -->
                <div class="mb-4">
                    <div class="card p-4">
                        <h4 class="text-primary">Book an Appointment</h4>
                        <p class="text-secondary">Schedule your appointments with ease and convenience.</p>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <div class="stat-card text-center p-3">
                            <p>Patient Matric No.</p>
                            <strong><?php echo number_format($patientMatric, 0, '.', ' '); ?></strong>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card text-center p-3">
                            <p>Total Appointments</p>
                            <strong>10</strong>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card text-center p-3">
                            <p>Pending Appointments</p>
                            <strong>2</strong>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card text-center p-3">
                            <p>Declined Appointments</p>
                            <strong>2</strong>
                        </div>
                    </div>
                </div>

                <!-- Medical Records and Tips Section -->
                <div class="row g-3 mb-4">
                    <div class="col-md-8">
                        <div class="card p-4">
                            <h5><i class="bi bi-file-earmark-medical icon-large"></i> Medical Records</h5>
                            <p class="text-secondary">Access your detailed medical history and records.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-4">
                            <h5><i class="bi bi-camera-reels icon-large"></i> Hygiene Tips Video</h5>
                            <div class="embed-responsive embed-responsive-16by9 mt-2">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/TjPL2AYyOrw"
                                    title="The Importance of Handwashing" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>