<?php
include("../config/config.php");
$error = "";
$msg = "";

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha_response = $_POST['g-recaptcha-response'];

    // Vérification du reCAPTCHA
    $secretKey = "6LeP2uYnAAAAALGumpuA3QAHOj5SqbxZVB6zAkrN";
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = array(
        'secret' => $secretKey,
        'response' => $captcha_response
    );
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $responseKeys = json_decode($result, true);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$captcha_response = $_POST['g-recaptcha-response'];
	
		// Vérification du reCAPTCHA
		$secretKey = "6LdIIucnAAAAAJkbIM6TeSai1COBmtJlCW7DS4Xk";
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$data = array(
			'secret' => $secretKey,
			'response' => $captcha_response
		);
		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		$responseKeys = json_decode($result, true);
	
		if (intval($responseKeys["success"]) !== 1) {
			// Échec de la vérification du reCAPTCHA
			echo "Veuillez vérifier le reCAPTCHA.";
		} else {
			// reCAPTCHA vérifié avec succès, continuez le traitement du formulaire
			// ...
		}
	}
}
?>


        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->
        
        <!--	Contact Information -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 bg-secondary">
                        <div class="contact-info">
                            <h3 class="mb-4 mt-4 text-white">Contacts</h3>
							
                            <ul>
                                <li class="d-flex mb-4"> <i class="fas fa-map-marker-alt text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Adresse</h5>
                                        <span class="text-white">11 allée des alpes, Vincennes</span> <br>
										<span class="text-white">11 allée des alpes, Vincennes</span</span>
										</div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-phone-alt text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Appelez Nous</h5>
                                        <span class="d-table text-white">+1 234-567-8910</span>
										<span class="text-white">+1 243-765-4321 </span>
									</div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-envelope text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Adresse Email</h5>
										<span class="d-table text-white">helpline@atypikhouse.com</span>
										<span class="text-white">helpline@atypikhouse.com</span>
										</div>
                                </li>
                            </ul>
                        </div>
                    </div>
					<div class="col-lg-1"></div>
                    <div class="col-md-12 col-lg-7">
						<div class="container">
                        <div class="row">
							<div class="col-lg-12">
								<h2 class="text-secondary double-down-line text-center mb-5">Entrer en contact</h2>
								<?php echo $msg; ?><?php echo $error; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form class="w-100" action="process_message.php" method="post">
									<div class="row">
										<div class="row mb-4">
											<div class="form-group col-lg-6">
												<input type="text"  name="name" class="form-control" placeholder="Votre Nom*">
											</div>
											<div class="form-group col-lg-6">
												<input type="text"  name="email" class="form-control" placeholder="Adresse Email*">
											</div>
											<div class="form-group col-lg-6">
												<input type="text"  name="phone" class="form-control" placeholder="Telephone" maxlength="10">
											</div>
											<div class="form-group col-lg-6">
												<input type="text" name="subject"  class="form-control" placeholder="Sujet">
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<textarea name="message" class="form-control" rows="5" placeholder="Tapez votre message..."></textarea>
												</div>
											</div>
											<div class="g-recaptcha" data-sitekey="6LdIIucnAAAAACCgL3V--FGB0gdb1rzPkUUVI526"></div>										</div>
										<button type="submit" value="send message" name="send" class="btn btn-success">Envoyez le message</button>
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!--	Contact Inforamtion -->
        
        
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
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>  

</body>
</html>