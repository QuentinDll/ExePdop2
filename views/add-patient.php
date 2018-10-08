<?php
include '../model/patients.php';
include '../controler/addPatientsCtrl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../assets/css/style.css"/>
        <title>Hospital E2N - Add patient</title>
    </head>
    <body>
        <div class="page">
            <!-- Include Navbar -->
            <?php include '../controler/navbarCtrl.php'; ?>
            <main class="main-block">
                <!-- Content -->
                <div class="container">
                    <div class="row">
                        <div class="justify-content-start">
                            <form class="text-center border border-light" id="div-form" name="addPatient" method="post" action="#">
                                <div class="form-row">
                                    <!--Lastname input -->
                                    <div class="form-group col-md-6">
                                        <label for="inputLastname">Lastname</label>
                                        <input type="text" class="form-control" id="inputLastname" name="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" placeholder="Lastname"/>
                                        <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>
                                    </div>
                                    <!--Firstame input -->
                                    <div class="form-group col-md-6">
                                        <label for="inputFirstname">Firstname</label>
                                        <input type="text" class="form-control" id="inputFirstname" name="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" placeholder="Firstname"/>
                                        <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <!--Age input -->
                                    <div class="form-group col-md-6">
                                        <label for="inputBD">Birth date</label>
                                        <input type="date" class="form-control" id="inputBD" name="birthdate" value="<?= isset($birthdate) ? $birthdate : '' ?>"/>
                                        <p class="text-danger"><?= isset($formError['birthdate']) ? $formError['birthdate'] : ''; ?></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <!--Phone Number input -->
                                    <div class="form-group col-md-6">
                                        <label for="inputPhone">Phone Number</label>
                                        <input type="tel" class="form-control" id="inputPhone" name="phone" value="<?= isset($phone) ? $phone : '' ?>" placeholder="Phone Number"/>
                                        <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <!--Email input -->
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="mail" value="<?= isset($mail) ? $mail : '' ?>" placeholder="Email"/>
                                        <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                                    </div>
                                </div>

                                <!-- Frame Modal Bottom -->
                                <div class="modal fade top" id="frameModalTop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                                    <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
                                    <div class="modal-dialog modal-frame modal-top" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <p class="pt-3 pr-2">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Frame Modal Bottom -->

                                <button type="submit" class="btn btn-primary btn-md" id="btn-form" name="submit">Sign in</button>
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
