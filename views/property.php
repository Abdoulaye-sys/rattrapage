<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("../config/config.php");
include("../app/controllers/PropertyController.php");

// Créer une instance du contrôleur
$propertyController = new PropertyController();

// Appeler la fonction pour obtenir les propriétés récentes
$recentProperties = $propertyController->getRecentProperties();
///code								
?>

        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->
        
        <!--	Property Grid
		===============================================================-->
        <div class="full-row">
            <div class="container">
                <div class="row">
				
                <div class="col-lg-8">
    <div class="row">
        <?php foreach ($recentProperties as $property) { ?>
            <div class="col-md-6">
                <div class="featured-thumb hover-zoomer mb-4">
                    <div class="overlay-black overflow-hidden position-relative"> 
                        <img src="../admin/property/<?php echo $property['18']; ?>" alt="pimage">
                        <div class="sale bg-success text-white">A <?php echo $property['5']; ?></div>
                        <div class="price text-primary text-capitalize">
                            <?php echo $property['13']; ?> €<span class="text-white"><?php echo $property['12']; ?> m²</span>
                        </div>
                    </div>
                    <div class="featured-thumb-data shadow-one">
                        <div class="p-4">
                            <h5 class="text-secondary hover-text-success mb-2 text-capitalize">
                                <a href="propertydetail.php?pid=<?php echo $property['0']; ?>"><?php echo $property['1']; ?></a>
                            </h5>
                            <span class="location text-capitalize">
                                <i class="fas fa-map-marker-alt text-success"></i> <?php echo $property['14']; ?>
                            </span>
                        </div>
                        <div class="px-4 pb-4 d-inline-block w-100">
                            <div class="float-left text-capitalize">
                                <i class="fas fa-user text-success mr-1"></i>Par : <?php echo $property['uname']; ?>
                            </div>
                            <div class="float-right">
                                <i class="far fa-calendar-alt text-success mr-1"></i> 
                                <?php echo date('d-m-Y', strtotime($property['date'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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

<script src="../js/custom.js"></script>
</body>

</html>