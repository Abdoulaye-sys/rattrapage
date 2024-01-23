<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("../config/config.php");
if(!isset($_SESSION['uemail']))
{
	header("location:login.php");
}								
?>
        <!--	Header start  -->
		<?php include("../views/include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('../images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Propriété répertoriée par l'utilisateur</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item active">Propriété répertoriée par l'utilisateur</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container">
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">Propriété répertoriée par l'utilisateur</h2>
							<?php 
								if(isset($_GET['msg']))	
								echo $_GET['msg'];	
							?>
                        </div>
					</div>
					<table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                        <thead>
                             <tr  class="bg-dark">
                                <th class="text-white font-weight-bolder">Propriétés</th>
                                <th class="text-white font-weight-bolder">BHK</th>
                                <th class="text-white font-weight-bolder">Type</th>
                                <th class="text-white font-weight-bolder">Date d'ajout</th>
								<th class="text-white font-weight-bolder">Statut</th>
                                <th class="text-white font-weight-bolder">Modifier</th>
								<th class="text-white font-weight-bolder">Supprimer</th>
                             </tr>
                        </thead>
                        <tbody>
							<?php 
							$uid=$_SESSION['uid'];
							$query=mysqli_query($con,"SELECT * FROM `property` WHERE uid='$uid'");
								while($row=mysqli_fetch_array($query))
								{
							?>
                            <tr>
                                <td>
									<img src="../admin/property/<?php echo $row['18'];?>" alt="pimage">
                                    <div class="property-info d-table">
                                        <h5 class="text-secondary text-capitalize"><a href="../views/propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                        <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-success font-13"></i>&nbsp; <?php echo $row['14'];?></span>
                                        <div class="price mt-3">
											<span class="text-success">&nbsp;<?php echo $row['13'];?> €</span>
										</div>
                                    </div>
								</td>
                                <td><?php echo $row['4'];?></td>
                                <td class="text-capitalize"> <?php echo $row['5'];?></td>
                                <td><?php echo $row['29'];?></td>
								<td class="text-capitalize"><?php echo $row['24'];?></td>
                                <td><a class="btn btn-info" href="../views/submitpropertyupdate.php?id=<?php echo $row['0'];?>">Modifier</a></td>
								<td><a class="btn btn-danger" href="../views/submitpropertydelete.php?id=<?php echo $row['0'];?>">Supprimer</a></td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>            
            </div>
        </div>
	<!--	Submit property   -->
        
        
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
</html>