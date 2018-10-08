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
        <title>Hospital E2N - Add appointments</title>
    </head>
    <body>
        <div class="page">
            <!-- Include Navbar -->
            <?php include '../controler/navbarCtrl.php'; ?>
            <main class="main-block">
                <!-- Content -->
                <div class="container">
                    <div class="row">
                        <div class="justify-content-start col-6">
                            <form class="text-center border border-light" id="div-form" name="addPatient" method="post" action="#">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="select-patient">Patients</label>
                                        <select id="select-patient" name="select-patient" class="form-control">
                                            <option value="0" disabled selected>Choose a patients</option>
                                            <?php foreach ($showPatientsList as $showPatient) { ?>
                                                <option value="<?= $showPatient->id ?>"><?= $showPatient->lastname . ' ' . $showPatient->firstname ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="date">Days</label>
                                        <input type="date" id="rdv" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="hour">Hours</label>
                                        <input type="time" id="rdv" name="hour" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary btn-md" id="btn-form" name="submit">Add appointments</button>
                                </div>
                            </form>
                        </div>
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
