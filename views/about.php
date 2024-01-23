<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("../config/config.php");
include("../app/controllers/AboutController.php");

$aboutController = new AboutController($con);
$aboutData = $aboutController->getAboutData();
?>
        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->
 <!-- About Our Company -->
 <div class="full-row">
        <div class="container">
            <?php foreach ($aboutData as $aboutItem) { ?>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?php echo $aboutItem['title']; ?></h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-md-12 col-lg-7">
                        <div class="about-content">
                            <?php echo $aboutItem['content']; ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5 mt-5">
                        <div class="about-img">
                            <img src="../admin/upload/<?php echo $aboutItem['image']; ?>" alt="about image">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- About Our Company -->        
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
<script src="../js/custom.js"></script></body>

</html>