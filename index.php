<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
        <title>Hospital E2N</title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <div class="page">
            <!-- Include Navbar -->
            <?php include 'controler/navbarCtrl.php'; ?>
            <main class="main-block">
                <?php include 'controler/carouselCtrl.php'; ?>
                <!-- Content -->
                <div class="container">
                    <div class="jumbotron text-center">
                        <h1>Welcome to the E2N Hospital</h1>
                        <p></p>
                    </div>
                </div>
            </main>
            <!-- Include Footer -->
            <?php include 'controler/footerCtrl.php'; ?>
        </div>
        <!-- Script Bootstrap 4 -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
