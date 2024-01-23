<?php
session_start();
include("../config/config.php");
include("../app/controllers/LoginController.php");

$error = "";
$msg = "";

// Créer une instance du contrôleur
$loginController = new LoginController();

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    // Appeler la fonction pour la connexion
    $error = $loginController->login($email, $pass);
}
?>
<?php include("../views/include/header.php");?>
<body>



<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
        <!--	Header end  -->
		 
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Connexion</h1>
								<p class="account-subtitle">Accéder à notre tableau de bord</p>
								<?php echo $error; ?><?php echo $msg; ?>
									<!-- Form -->
									<form method="post">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Votre Email*">
										</div>
										<div class="form-group">
											<input type="password" name="pass" class="form-control" placeholder="Votre Mot de Passe*">
										</div>

										<button class="btn btn-success" name="login" value="Login" type="submit">connexion</button>
									</form>								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">OU</span>
								</div>
								<!-- Social Login -->
								<!-- <div class="social-login">
									<span>Login with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class="google"><i class="fab fa-google"></i></a>
									<a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
									<a href="#" class="google"><i class="fab fa-instagram"></i></a>
								</div> -->
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Vous n'avez pas de compte? <a href="register.php">Inscription</a></div>
								
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