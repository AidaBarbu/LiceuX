<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Baza de date Liceul X</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.html#page-top">Liceul X</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html#portfolio">Conectare</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html#about">Despre</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.html#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Adaugare</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->

                          <?php
header('Content-type: text/html; charset=utf-8');

$mesaj = ''; 


if (isset($_POST['clasa']) && isset($_POST['nume']) && isset($_POST['nota']) && isset($_POST['descriere'])) {

$_POST = array_map("strip_tags", $_POST);
$_POST = array_map("trim", $_POST);

if(!isset($eroare)) {
 include 'connection.php';

 $clasa = $_POST['clasa'];
 $nume = $_POST['nume'];
 $nota = $_POST['nota'];
 $descriere = $_POST['descriere'];
 
 // Acum se adauga mai in siguranta aceste date in MySQL
 $sql = "INSERT INTO `liceu` (`clasa`, `nume`, `nota`, `descriere`) VALUES ('$clasa', '$nume', '$nota', '$descriere')";
 if($dbh->query($sql) === TRUE) {
 $mesaj = '<h4>Datele au fost adaugate</h4>';
 }
 else $mesaj = '<h4>Datele nu au putut fi adaugate </h4>';
}
else $mesaj = '<h4>'. implode('<br>', $eroare). '</h4>';
}

echo $mesaj;                       
?>

<form action="" method="post">
    Clasa: <input type="text" name="clasa" id="clasa" value="<?php if(isset($clasa)) echo $clasa; ?>" /><br><br>
    Nume si Prenume: <input type="text" name="nume" id="nume" value="<?php if(isset($nume)) echo $nume; ?>" /><br><br>
    Nota: <input type="text" name="nota" id="nota" value="<?php if(isset($nota)) echo $nota; ?>" /><br><br>
    Descriere(Promovat / Repetent): <input type="text" name="descriere" id="descriere" value="<?php if(isset($descriere)) echo $descriere; ?>" /><br><br>
<input type="submit" name="submit" id="submit" value="Trimite"  />
</form>
                            
                 
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Locatie</h4>
                        <p class="lead mb-0">
                            Str Abc, Nr. 15
                            <br />
                            Iasi
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Ne puteti gasi pe:</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Ne puteti contacta:</h4>
                        <p class="lead mb-0">
                            Email: liceulX@liceulx.com
                            <br>
                            Telefon:07********
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
