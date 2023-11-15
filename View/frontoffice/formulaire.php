<?php

include '../../controller/user.php';
include '../../model/user.php';

// create an instance of the controller
$UserC = new UserC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set and not empty
    if (
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["adresse"]) &&
        isset($_POST["telephone"])
    ) {
        if (
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["adresse"]) &&
            !empty($_POST["telephone"])
        ) {
            // Create a new User object
            $User = new User(
                null,
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['adresse'],
                $_POST['telephone']
            );

            // Add the user using the controller
            $UserC->addUser($User);

            // Redirect to the desired page after adding the user
            header('Location: formulaire.php');
            exit(); // Make sure to exit after header redirect to prevent further execution
        } else {
            echo "All fields are required.";
        }
    }
}
?>


?>
<html lang="en">
   <head>
	      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier avec JavaScript</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
		button1
		{
			margin: 500px;
		}
    </style>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>NutriNet</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/nutrinet.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">



<link rel="stylesheet" href="css/product.css">
   </head>
   <body>
      <!-- ***** Preloader Start ***** -->
      <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!-- ***** Preloader End ***** -->
      <!-- banner bg main start -->
   <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
     <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo" ><a href="index.html"><img src="images/nnn.png" width="250px"></a></div>
                  </div>
               </div>
            </div>
         </div>
	   
         <!-- logo section end -->
         <div class="page-heading header-text">
            <div class="container">
              <div class="row">
                <div class="col-lg-12  " align="center">
                  <span class="buy_bt"><a href="index.html">Home</a>  >  <a href="#">Shop</a>  >prot1</span>
                </div>
              </div>
            </div>
          </div>
          <div>&nbsp;</div>
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="index.html">Home</a>
                     <a href="fashion.html">Fashion</a>
                     <a href="electronic.html">Electronic</a>
                     <a href="jewellery.html">Jewellery</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #CEE452; border-color:#ffffff ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Account</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
     </div>
         <!-- header section end -->
         <!-- banner section start -->
         <!-- banner section end -->
	   <div>&nbsp;</div>
   </div>
      <!-- banner bg main end -->
      <div>&nbsp;</div>
      <div>&nbsp;</div>








<hr>

/هنا/

     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .error-message {
            color: red;
        }
    </style>
</head>
<body>
// houna
    <h2>Formulaire de Contact</h2>
    <form id="contactForm" action="" method="POST">

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
            <span class="error-message" id="errorNom"></span>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control" required>
            <span class="error-message" id="errorPrenom"></span>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" class="form-control" required>
            <span class="error-message" id="errorAdresse"></span>
        </div>

        <div class="form-group">
            <label for="telephone">Numéro de Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" class="form-control" pattern="[0-9]{8}" placeholder="Ex. 1234567890" required>
            <span class="error-message" id="errorTelephone"></span>
        </div>

        <button class="btn btn-secondary" type="submit" onclick="validerFormulaire()" style="background-color: #CEE452; color: white;;width: 100px">Envoyer</button>
    </form>

    <script>
        function validerFormulaire() {
            // Réinitialiser les messages d'erreur
            document.getElementById('errorNom').innerHTML = '';
            document.getElementById('errorPrenom').innerHTML = '';
            document.getElementById('errorAdresse').innerHTML = '';
            document.getElementById('errorTelephone').innerHTML = '';

            // Récupérer les valeurs des champs
            var nom = document.getElementById('nom').value;
            var prenom = document.getElementById('prenom').value;
            var adresse = document.getElementById('adresse').value;
            var telephone = document.getElementById('telephone').value;

            // Validation simple côté client
            var erreurs = false;

            if (nom.trim() === '') {
                document.getElementById('errorNom').innerHTML = 'Veuillez saisir votre nom.';
                erreurs = true;
            }

            if (prenom.trim() === '') {
                document.getElementById('errorPrenom').innerHTML = 'Veuillez saisir votre prénom.';
                erreurs = true;
            }

            if (adresse.trim() === '') {
                document.getElementById('errorAdresse').innerHTML = 'Veuillez saisir votre adresse.';
                erreurs = true;
            }

            if (!/^\d{8}$/.test(telephone)) {
                document.getElementById('errorTelephone').innerHTML = 'Veuillez saisir un numéro de téléphone valide (8 chiffres).';
                erreurs = true;
            }

            // Envoyer le formulaire si aucune erreur n'est détectée
            if (!erreurs) {
                // Vous pouvez ajouter ici le code pour envoyer les données à votre serveur
                alert('Formulaire soumis avec succès !');
            }
        }
    </script>


















   <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/nnn.png" width="250px"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number Najm Eddin : <a href="#">+216 94054064</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2023 All Rights Reserved. Design by <a href="https://html.design">TechTitans</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>

      <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/owl-carousel.js"></script>
  <script src="js/counter.js"></script>
  <script src="js/custom.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>