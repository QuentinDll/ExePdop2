<?php
include '../model/patients.php';
include '../model/appointments.php';
include '../controler/addAppointmentsCtrl.php';
include '../controler/listsPatientsCtrl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/style.css"/>
        <title>Hospital E2N - Lists appointments</title>
    </head>
    <body>
        <div class="page">
            <!-- Include Navbar -->
            <?php include '../controler/navbarCtrl.php'; ?>
            <main class="main-block">
                <!-- Content -->
                <div class="container">
                    <div class="row">
                        <table class="table table-bordered text-center table-hover">
                            <thead class="thead-dark">
                                <tr class="title">
                                    <th>Lastname</th>
                                    <th>Firstname</th>
                                    <th>Date & Hours</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($showPatientsList as $showPatient) { ?>
                                    <tr class="data">
                                        <td><?= $showPatient->lastname ?></td>
                                        <td><?= $showPatient->firstname ?></td>
                                    <?php } ?>
                                    <?php foreach ($getAppointmentsList as $showAppointments) { ?>
                                        <td><?= $showAppointments->dateHour ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
            <!-- Include Footer -->
            <?php include '../controler/footerCtrl.php'; ?>
        </div>
        <!-- Script Bootstrap 4 -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="../assets/js/script.js"></script>
    </body>
</html>
