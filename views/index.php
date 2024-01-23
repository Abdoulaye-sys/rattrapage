<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("../config/config.php");
?>
<?php
// Inclure le contrôleur
include("../app/controllers/PropertyController.php");

// Créer une instance du contrôleur
$propertyController = new PropertyController();

// Appeler la fonction pour obtenir les hébergements
$recentProperties = $propertyController->getRecentProperties();
?>


    <style>
        /* Styles pour la bannière de cookies */
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            display: none; /* Cachez la bannière par défaut */
            z-index: 9999; /* Assurez-vous qu'elle s'affiche au-dessus de tout */
        }
        .cookie-banner p {
            margin: 0;
        }
        .cookie-banner button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
   <script>
    // Lorsque la page a fini de charger
    $(document).ready(function() {
        // Vérifie si l'utilisateur a déjà accepté les cookies
        if (!Cookies.get('cookie_accepted')) {
            // Affiche la bannière de cookies
            $('.cookie-banner').show();
        }
    });

    // Fonction pour accepter les cookies
    function acceptCookies() {
        // Définir un cookie pour enregistrer l'acceptation
        Cookies.set('cookie_accepted', 'true', { expires: 365 }); // Cookie expirera dans un an

        // Masquer la bannière de cookies
        $('.cookie-banner').hide();
    }
</script>
        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('../images/banner/rshmpg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4"><span class="text-success">Laissez-nous</span><br>
                            vous guider Accueil</h1>
                            <form method="post" action="propertygrid.php">
                                <div class="row">
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option value="">Sélectionnez Type</option>
												<option value="apartment">Appartement</option>
												<option value="house">Maison</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-2">
                                        <div class="form-group">
                                            <select class="form-control" name="stype">
                                                <option value="">Sélectionnez statut</option>
												<option value="Louer">Louer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Entrez la ville" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-success w-100">Recherchez</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
        
        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Ce que nous faisons</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Service de vente</a></h5>
                                <p> Nous proposons un service de vente de logements atypiques et exclusifs, sélectionnés avec soin pour répondre à vos besoins uniques.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Service de location</a></h5>
                                <p>Atypik House se distingue par son approche personnalisée, son vaste choix de logements exclusifs et son équipe professionnelle dédiée. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-list text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Liste des propriétés</a></h5>
                                <p>Découvrez notre sélection soigneusement choisie de logements atypiques, prêts à répondre à vos aspirations uniques. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-diagram text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Investissement légal</a></h5>
                                <p>Chez Atypik House, nous sommes ravis de vous présenter des possibilités d'investissement légales et prometteuses, conçues pour vous permettre de bâtir un avenir financier solide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-----  Nos Services ---->
		
        <!--	Nouveaux propriétés  -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary double-down-line text-center mb-4">Nos hébergements</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content mt-4" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home">
                                <div class="row">
								
									<?php $query=mysqli_query($con,"SELECT property.*, user.uname,user.utype,user.uimage FROM `property`,`user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 9");
										while($row=mysqli_fetch_array($query))
										{
									?>
								
                                <div class="col-md-6 col-lg-4">
                                <div class="featured-thumb hover-zoomer mb-4">
    <div class="overlay-black overflow-hidden position-relative">
        <a href="../views/propertydetail.php?pid=<?php echo $row['0'];?>">
            <img src="../admin/property/<?php echo $row['18'];?>" alt="pimage" id="propertyImage<?php echo $row['0'];?>">
            </a>
            <div class="featured bg-success text-white">Nouveaux</div>
            <div class="sale bg-success text-white text-capitalize">A <?php echo $row['5'];?></div>
            <div class="price text-primary"><b><?php echo $row['13'];?> € / nuit</b><span class="text-white"><?php echo $row['12'];?> m²</span></div>
        </div>
        <div class="featured-thumb-data shadow-one">
            <div class="p-3">
                <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a href="../views/propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-success"></i> <?php echo $row['14'];?></span>
            </div>
            <div class="bg-gray quantity px-4 pt-4">
                <ul>
                    <li><span><?php echo $row['12'];?></span> m²</li>
                    <li><span><?php echo $row['6'];?></span> Lits</li>
                    <li><span><?php echo $row['7'];?></span>Thermes</li>
                    <li><span><?php echo $row['9'];?></span> Cuisine</li>
                    <li><span><?php echo $row['8'];?></span> Balcon</li>
                </ul>
            </div>
            <div class="p-4 d-inline-block w-100">
                <div class="float-left text-capitalize"><i class="fas fa-user text-success mr-1"></i>Par : <?php echo $row['uname'];?></div>
                <div class="float-right"><i class="far fa-calendar-alt text-success mr-1"></i> <?php echo date('d-m-Y', strtotime($row['date']));?></div>
                <a href="../views/propertydetail.php?pid=<?php echo $row['0'];?>" class="btn btn-primary">Voir détails</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Ajoute un événement de clic à l'image pour rediriger vers la page de détails de la propriété
    document.getElementById('propertyImage<?php echo $row['0'];?>').addEventListener('click', function() {
        window.location.href = 'propertydetail.php?pid=<?php echo $row['0'];?>';
    });
</script>

                                    
									<?php } ?>

                                </div>
                            </div>
                            
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	Recent Properties  -->
        
        <!--	Pourquoi nous choisirs -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('../images/01.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Pourquoi nous choisir</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Les mieux notés</h5>
										<p>Nous sommes fiers d'être considérés comme l'une des agences immobilières les mieux notées de la région. Notre réputation repose sur la satisfaction de nos clients et notre engagement à fournir un service de premier ordre. </p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Qualité de l'expérience</h5>
										<p>Forts d'une expérience inégalée dans le secteur immobilier, nous avons acquis une expertise approfondie pour répondre à vos besoins spécifiques. Que vous recherchiez une location, une vente ou un investissement légal, notre équipe expérimentée est là pour vous guider à chaque étape du processus</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Agents expérimentés</h5>
										<p>Notre équipe d'agents est constituée de professionnels chevronnés, passionnés par l'immobilier et engagés à vous offrir un service personnalisé.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Comment ça marche</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Tout commence par une discussion approfondie avec notre équipe dédiée. Nous prendrons le temps de vous connaître, de comprendre vos besoins spécifiques en matière de logement et de clarifier vos critères de recherche. Que ce soit pour une location à court terme ou à long terme, nous écouterons attentivement vos préférences en termes de localisation, de budget, de taille et de style de logement. Nous serons également à votre disposition pour répondre à toutes vos questions concernant le processus de location et les exigences contractuelles.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Examen des fichiers</h5>
                            <p>Une fois que nous avons une bonne compréhension de vos attentes, notre équipe se mettra à la recherche de propriétés qui correspondent à vos critères. Nous analyserons minutieusement chaque option disponible sur le marché pour vous présenter une sélection de logements potentiels. Nous veillerons à ce que chaque propriété réponde à vos besoins, qu'elle soit bien entretenue et conforme aux normes de qualité que nous nous sommes fixées chez Atypik House. Vous pourrez ainsi parcourir une liste soigneusement choisie de logements atypiques qui reflètent vos préférences et vos aspirations.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-success text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-success" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Acquérir</h5>
                            <p>Une fois que vous avez choisi la propriété qui vous convient, notre équipe vous accompagnera tout au long du processus de location. Nous prendrons en charge les démarches administratives et légales nécessaires pour établir le contrat de location et assurer une transition sans heurts vers votre nouveau logement. Nous nous assurerons également que toutes les conditions de location sont clairement définies et que vous êtes pleinement informé des responsabilités et des droits de chaque partie. Notre objectif est de rendre le processus de location aussi simple et fluide que possible, tout en garantissant que vous vous sentiez à l'aise et en confiance dans votre nouvelle propriété.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	How It Work -->
        
        <!--	Achievement
        ============================================================-->
        <div class="full-row overlay-secondary" style="background-image: url('../images/breadcromb.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="fact-counter">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Propriété disponible</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='sale'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Propriété à vendre disponible</div>
                            </div>
                        </div>
						<div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
								<?php
										$query=mysqli_query($con,"SELECT count(pid) FROM property where stype='rent'");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Louer une propriété disponible</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <?php
										$query=mysqli_query($con,"SELECT count(uid) FROM user");
											while($row=mysqli_fetch_array($query))
												{
										?>
                                <div class="count-num text-success my-4" data-speed="3000" data-stop="<?php 
												$total = $row[0];
												echo $total;?>">0</div>
								<?php } ?>
                                <div class="text-white h5">Utilisateurs enregistrés</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!--	Popular Place -->
		
		<!--	Testonomial -->
		<div class="full-row">
            <div class="container">
                <div class="row">
					<div class="col-lg-12">
						<div class="content-sidebar p-4">
							<div class="mb-3 col-lg-12">
								<h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Témoignage</h4>
									<div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success">
									
										<?php
													
												$query=mysqli_query($con,"select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
												while($row=mysqli_fetch_array($query))
													{
										?>
										<div class="item">
											<div class="p-4 bg-success down-angle-white position-relative">
												<p class="text-white"><i class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>. <i class="fas fa-quote-right mr-2 text-white"></i></p>
											</div>
											<div class="p-2 mt-4">
												<span class="text-success d-table text-capitalize"><?php echo $row['uname']; ?></span> <span class="text-capitalize"><?php echo $row['utype']; ?></span>
											</div>
										</div>
										<?php }  ?>
										
									</div>
							</div>
						 </div>
					</div>
				</div>
			</div>
		</div>
		<!--	Testonomial -->
        
		
		
        <!--	Footer   start-->
		<?php include("../views/include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="../js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="../js/greensock.js"></script> 
<script src="../js/layerslider.transitions.js"></script> 
<script src="../js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="../js/popper.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/owl.carousel.min.js"></script> 
<script src="../js/tmpl.js"></script> 
<script src="../js/jquery.dependClass-0.1.js"></script> 
<script src="../js/draggable-0.1.js"></script> 
<script src="../js/jquery.slider.js"></script> 
<script src="../js/wow.js"></script> 
<script src="../js/YouTubePopUp.jquery.js"></script> 
<script src="../js/custom.js"></script>
</body>

</html>