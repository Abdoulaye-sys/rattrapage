<?php 
include("../config/config.php");
$error = "";
$msg = "";

if(isset($_POST['reg'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $pass = $_POST['pass'];
    $utype = $_POST['utype'];
    
    $uimage = $_FILES['uimage']['name'];
    $temp_name1 = $_FILES['uimage']['tmp_name'];

    // Validation et nettoyage
    if (empty($name) || empty($email) || empty($phone) || empty($pass) || empty($uimage)) {
        $error = "<p class='alert alert-warning'>Veuillez remplir tous les champs</p>";
    } else {
        // Vérification du nombre maximum de caractères
        if (strlen($pass) > 20) {
            $error = "<p class='alert alert-warning'>Le mot de passe ne peut pas dépasser 20 caractères</p>";
        } else {
            // Vérification des mots de passe courants
            $commonPasswords = array("123456", "password", "qwerty"); // Ajoutez d'autres mots de passe courants si nécessaire
            if (in_array($pass, $commonPasswords)) {
                $error = "<p class='alert alert-warning'>Veuillez choisir un mot de passe plus sécurisé</p>";
            } else {
                // Vérification de la présence de majuscules et de caractères spéciaux
                if (!preg_match('/[A-Z]/', $pass) || !preg_match('/[^a-zA-Z0-9]/', $pass)) {
                    $error = "<p class='alert alert-warning'>Le mot de passe doit contenir au moins une majuscule et un caractère spécial</p>";
                } else {
                    // Vérification de l'email
                    $query = "SELECT * FROM user WHERE uemail='$email'";
                    $res = mysqli_query($con, $query);
                    $num = mysqli_num_rows($res);

                    if ($num == 1) {
                        $error = "<p class='alert alert-warning'>L'identifiant de messagerie existe déjà</p> ";
                    } else {
                        // Hashage du mot de passe
                        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

                        // Insertion des données
                        $sql = "INSERT INTO user (uname, uemail, uphone, upass, utype, uimage) 
                                VALUES ('$name', '$email', '$phone', '$hashed_pass', '$utype', '$uimage')";

                        if (mysqli_query($con, $sql)) {
                            move_uploaded_file($temp_name1, "admin/user/$uimage");
                            $msg = "<p class='alert alert-success'>Votre Compte a bien été créé</p> ";
                            $error = ""; // Réinitialisation de l'erreur car le compte a été créé avec succès
                        } else {
                            $error = "<p class='alert alert-warning'>Votre Compte n'a pas été créé</p> ";
                        }
                    }
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" type="images/png" href="../images\favicon-16x16.png">

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
<!--	Title
	=========================================================-->
<title>Atypik House</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Register</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->
		 
		 
		 
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Inscription</h1>
								<p class="account-subtitle">Accéder à notre tableau de bord</p>
								<?php echo $error; ?><?php echo $msg; ?>
								<!-- Form -->
								<form method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text"  name="name" class="form-control" placeholder="Votre Nom*">
									</div>
									<div class="form-group">
										<input type="email"  name="email" class="form-control" placeholder="Votre Email*">
									</div>
									<div class="form-group">
										<input type="text"  name="phone" class="form-control" placeholder="Votre Téléphone*" maxlength="10">
									</div>
									<div class="form-group">
										<input type="password" name="pass"  class="form-control" placeholder="Votre Mot de Passe*">
									</div>

									 <div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="user" checked>Utilisateur
									  </label>
									</div>
									<div class="form-check-inline">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="agent">Agent
									  </label>
									</div>
									<div class="form-check-inline disabled">
									  <label class="form-check-label">
										<input type="radio" class="form-check-input" name="utype" value="builder">Entrepreneur
									  </label>
									</div> 
									
									<div class="form-group">
										<label class="col-form-label"><b>Image de l'utilisateur </b></label>
										<input class="form-control" name="uimage" type="file">
									</div>
									
									<button class="btn btn-success" name="reg" value="Register" type="submit">Inscription</button>
									
								</form>
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">ou</span>
								</div>
								
								<!-- Social Login -->
								<!-- <div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class="google"><i class="fab fa-google"></i></a>
									<a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
									<a href="#" class="google"><i class="fab fa-instagram"></i></a>
								</div> -->
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Vous avez déjà un compte? <a href="login.php">Connexion</a></div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!--	login  -->
        
        
        <!--	Footer   start-->
		<?php include("../views/include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 
<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>