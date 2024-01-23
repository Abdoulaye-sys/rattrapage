<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <!-- Inclure jquery.cookie.js -->
    <!-- ... Autres balises <script> ... -->


<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../css/layerslider.css">
<link rel="stylesheet" type="text/css" href="../css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<meta name="description" content="Découvrez des logements uniques avec Atypik House. Réservez des hébergements hors du commun pour une expérience inoubliable.">
    
    <!-- Balises méta pour les réseaux sociaux (facultatif, mais recommandé) -->
    <meta property="og:title" content="Atypik House - Votre destination unique">
    <meta property="og:description" content="Découvrez des logements uniques avec Atypik House. Réservez des hébergements hors du commun pour une expérience inoubliable.">
    <meta property="og:image" content="URL_de_l_image">
    <meta property="og:url" content="URL_de_la_page">
    <meta property="og:type" content="website">
    
    <!-- Balises méta pour les robots d'exploration -->
    <meta name="robots" content="index, follow">
    
    <!-- Balises méta pour les mots-clés (moins important de nos jours, mais toujours utile) -->
    <meta name="keywords" content="logements uniques, hébergements atypiques, réservation, expérience de voyage">
    
    <!-- Balise méta pour spécifier la langue de la page -->
    <meta name="language" content="French">
    
    <!-- Balise méta pour indiquer l'auteur du site -->
    <meta name="author" content="digital slayers ">
    
    <!-- Balise méta pour la définition de l'encodage des caractères -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="images/png" href="../images\favicon-16x16.png">

    
    
    <!-- Balise méta pour les informations de contact -->
    <meta name="contact" content="contact@atypikhouse.com">
    
    <!-- Balise méta pour la durée de rafraîchissement automatique de la page (si applicable) -->
    <meta http-equiv="refresh" content="300">



<!--	Title
	=========================================================-->
<title>Atypik House</title>
</head>
<body>
<!-- Bannière de cookies en pop-up -->
<!-- <div class="cookie-banner">
        <p>En utilisant ce site, vous acceptez l'utilisation de cookies pour améliorer votre expérience.</p>
        <button onclick="acceptCookies()">J'accepte</button>
</div> -->

<div id="page-wrapper">
    <div class="row"> 

<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white  d-table">
                        <li><a href="#"><i class="fas fa-envelope text-success mr-1"></i>atypikhouse@outlook.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li><i class="fas fa-user text-success mr-1"></i>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php">Se Déconnecter</a>&nbsp;&nbsp;<?php } else { ?>
                                    <a href="login.php">Se Connecter</a>&nbsp;&nbsp; | </li>
                                    <li><i class="fas fa-user-plus text-success mr-1"></i><a href="register.php"> S'inscrire</a></li>
                                <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav hover-success-nav py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="../images/logo/atypikhouse-logos_black .png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Accueil</a></li>
                                <li class="nav-item"> <a class="nav-link" href="about.php">Qui sommes-nous</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="property.php">Propriétés</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li>

                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mon Compte</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"> <a class="nav-link" href="profile.php">Profil</a> </li>
                                            <!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
                                            <li class="nav-item"> <a class="nav-link" href="feature.php">Votre propriété</a> </li>
                                            <li class="nav-item"> <a class="nav-link" href="logout.php">Se déconnecter</a> </li>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item"> <a class="nav-link" href="login.php">Connexion/S'inscrire</a> </li>
                                <?php } ?>
                            </ul>

                            <a class="btn btn-success d-none d-xl-block" style="border-radius:30px;" href="submitproperty.php">Soumettre la propriété</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
