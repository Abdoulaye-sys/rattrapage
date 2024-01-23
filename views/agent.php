<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("../config/config.php");
include("../app/controllers/AgentController.php");
// Créer une instance du contrôleur
$agentController = new AgentController();

// Appeler la fonction pour obtenir les agents
$agents = $agentController->getAgents();
?>
        <!--	Header One -->
        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->


        <div class="row">
    <?php foreach ($agents as $agent) { ?>
        <div class="col-md-6 col-lg-4">
            <div class="hover-zoomer bg-white shadow-one mb-4">
                <div class="overflow-hidden"> <img src="../admin/user/<?php echo $agent['6']; ?>" alt="aimage"> </div>
                <div class="py-3 text-center">
                    <h5 class="text-secondary hover-text-success"><a href="#"><?php echo $agent['1']; ?></a></h5>
                    <span>Atypik House - Agent</span>
                </div>
            </div>
        </div>
    <?php } ?>
</div>        <!--	Footer   start-->
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