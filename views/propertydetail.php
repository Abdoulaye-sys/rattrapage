<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("../config/config.php");
								
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
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
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


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('../images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>détails de la propriété</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item active">détails de la propriété</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->

		
        <div class="full-row">
            <div class="container">
                <div class="row">
				
					<?php
						$id=$_REQUEST['pid']; 
						$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
						while($row=mysqli_fetch_array($query))
						{
					  ?>
				  
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col-md-12">
                                <div id="single-property" style="width:1200px; height:700px; margin:30px auto 50px;"> 
                                    <!-- Slide 1-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../admin/property/<?php echo $row['18'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 2-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../admin/property/<?php echo $row['19'];?>" class="ls-bg" alt="" /> </div>
                                    
                                    <!-- Slide 3-->
                                    <div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../admin/property/<?php echo $row['20'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 4-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../admin/property/<?php echo $row['21'];?>" class="ls-bg" alt="" /> </div>
									
									<!-- Slide 5-->
									<div class="ls-slide" data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;"> <img width="1920" height="1080" src="../admin/property/<?php echo $row['22'];?>" class="ls-bg" alt="" /> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">à <?php echo $row['5'];?></div>
                                <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1'];?></h5>
                                <span class="mb-sm-20 d-block text-capitalize"><i class="fas fa-map-marker-alt text-success font-12"></i> &nbsp;<?php echo $row['14'];?></span>
                                <a href="booking.php?pid=<?php echo $row['0']; ?>" class="btn bg-info mt-4">Réserver</a>
                                <!-- <a href="pay.php?price=<?php echo $row['13']; ?>" class="btn btn-primary">Payer</a> -->

							</div>
                            <div class="col-md-6">
                                <div class="text-success text-left h5 my-2 text-md-right"><?php echo $row['13'];?>€</div>
                                <div class="text-left text-md-right">Prix</div>

                            </div>
                        </div>
                        <div class="property-details">
                            <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                <ul>
                                    <li><span class="text-secondary"><?php echo $row['12'];?></span> m²</li>
                                    <li><span class="text-secondary"><?php echo $row['6'];?></span> chambre</li>
                                    <li><span class="text-secondary"><?php echo $row['7'];?></span> salle de bain</li>
                                    <li><span class="text-secondary"><?php echo $row['8'];?></span> balcon</li>
                                    <li><span class="text-secondary"><?php echo $row['10'];?></span> Hall</li>
                                    <li><span class="text-secondary"><?php echo $row['9'];?></span> cuisine</li>
                                </ul>
                            </div>
                            <h4 class="text-secondary my-4">Description</h4>
                            <p><?php echo $row['2'];?></p>
                            
                            <h5 class="mt-5 mb-4 text-secondary">Appartement</h5>
                            <div  class="table-striped font-14 pb-2">
                                <table class="w-100">
                                    <tbody>
                                        <tr>
                                            <td>BHK :</td>
                                            <td class="text-capitalize"><?php echo $row['4'];?></td>
                                            <td>Type de bien :</td>
                                            <td class="text-capitalize"><?php echo $row['3'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Rez-de-chaussée :</td>
                                            <td class="text-capitalize"><?php echo $row['11'];?></td>
                                            <td>Plancher total :</td>
                                            <td class="text-capitalize"><?php echo $row['28'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Ville :</td>
                                            <td class="text-capitalize"><?php echo $row['15'];?></td>
                                            <td>pays :</td>
                                            <td class="text-capitalize"><?php echo $row['16'];?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <h5 class="mt-5 mb-4 text-secondary">Caractéristiques</h5>
                            <div class="row">
								<?php echo $row['17'];?>
								
                            </div>   
                            <h5 class="mt-5 mb-4 text-secondary">Plans d'étage</h5>
                            <div class="accordion" id="accordionExample">
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> plans d'étage </button>
                                <div id="collapseOne" class="collapse show p-4" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <img src="../admin/property/<?php echo $row['25'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">sous-sol</button>
                                <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <img src="../admin/property/<?php echo $row['26'];?>" alt="Not Available"> </div>
                                <button class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">rez-de-chaussée</button>
                                <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <img src="../admin/property/<?php echo $row['27'];?>" alt="Not Available"> </div>
                            </div>

                            <h5 class="mt-5 mb-4 text-secondary double-down-line-left position-relative">Contacter l'agent</h5>
                            <div class="agent-contact pt-60">
                                <div class="row">
                                    <div class="col-sm-4 col-lg-3"> <img src="../admin/user/<?php echo $row['uimage']; ?>" alt="" height="200" width="170"> </div>
                                    <div class="col-sm-8 col-lg-9">
                                        <div class="agent-data text-ordinary mt-sm-20">
                                            <h6 class="text-success text-capitalize"><?php echo $row['uname'];?></h6>
                                            <ul class="mb-3">
                                                <li><?php echo $row['uphone'];?></li>
                                                <li><?php echo $row['uemail'];?></li>
                                            </ul>
                                            
                                            <div class="mt-3 text-secondary hover-text-success">
                                                <ul>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    <li class="float-left mr-3"><a href="#"><i class="fas fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } ?>
					
                    <div class="col-lg-4">
                        <!-- <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-md-50">Send Message</h4>
                        <form method="post" action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Phone">
                                    </div>
                                </div>
								<div class="col-md-12">
                                    <div class="form-group">
										<textarea class="form-control" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
								
                                <div class="col-md-12">
                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-success w-100">Search Property</button>
                                    </div>
                                </div>
                            </div>
                        </form> -->
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Hébergement recommandée</h4>
                        <ul class="property_list_widget">
							
                            <?php 
                            $query=mysqli_query($con,"SELECT * FROM `property` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 3");
                                    while($row=mysqli_fetch_array($query))
                                    {
                            ?>
                            <li> <img src="../admin/property/<?php echo $row['18'];?>" alt="pimage">
                                <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                
                            </li>
                            <?php } ?>

                        </ul>

                        <div class="sidebar-widget mt-5">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Hébergement récemment ajoutée</h4>
                            <ul class="property_list_widget">
							
								<?php 
								$query=mysqli_query($con,"SELECT * FROM `property` ORDER BY date DESC LIMIT 7");
										while($row=mysqli_fetch_array($query))
										{
								?>
                                <li> <img src="../admin/property/<?php echo $row['18'];?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i> <?php echo $row['14'];?></span>
                                    
                                </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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