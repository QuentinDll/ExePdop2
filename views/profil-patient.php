<?php
include '../model/patients.php';
include '../controler/profilsPatientsCtrl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes"/>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/style.css"/>
        <title>Hospital E2N - Profil patient</title>
    </head>
    <body>
        <div class="page">
            <!-- Include Navbar -->
            <?php include '../controler/navbarCtrl.php'; ?>
            <main class="main-block">
                <!-- Content -->
                <div class="container">
                    <form class="text-center border border-light" id="div-form" name="addPatient" method="post" action="profil-patient.php?id=<?= $patients->id ?>">
                        <div class="form-row">
                            <!--Lastname input -->
                            <div class="form-group col-md-6">
                                <label for="inputLastname">Lastname</label>
                                <input type="text" class="form-control" id="inputLastname" name="lastname" value="<?= ($showEachPatients->lastname); ?>"/>
                                <?php if (isset($formError['lastname'])) { ?>
                                    <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>
                                <?php } ?>
                            </div>
                            <!--Firstame input -->
                            <div class="form-group col-md-6">
                                <label for="inputFirstname">Firstname</label>
                                <input type="text" class="form-control" id="inputFirstname" name="firstname" value="<?= ($showEachPatients->firstname); ?>"/>
                                <?php if (isset($formError['firstname'])) { ?>
                                    <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <!--Age input -->
                            <div class="form-group col-md-6">
                                <label for="inputBD">Birth date</label>
                                <input type="date" class="form-control" id="inputBD" name="birthdate" value="<?= ($showEachPatients->birthdate); ?>"/>
                                <?php if (isset($formError['birthdate'])) { ?>
                                    <p class="text-danger"><?= isset($formError['birthdate']) ? $formError['birthdate'] : ''; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <!--Phone Number input -->
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Phone Number</label>
                                <input type="tel" class="form-control" id="inputPhone" name="phone" value="<?= ($showEachPatients->phone); ?>"/>
                                <?php if (isset($formError['phone'])) { ?>
                                    <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <!--Email input -->
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="mail" value="<?= ($showEachPatients->mail); ?>"/>
                                <?php if (isset($formError['mail'])) { ?>
                                    <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md" id="btn-form" name="submit">Sign in</button>
                    </form>
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
