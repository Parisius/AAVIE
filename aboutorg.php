

<!DOCTYPE html>
<html>

<?php include 'head.php';?>

<body>
<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
          			</button>
					<div class="logo-w3layouts-agileits">
						<h1> <a class="navbar-brand" href="index.php">
                                    <img src="images/logoaavie.png" alt="" width="290" height="70">
                                </a></h1>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						
						<ul class="nav navbar-nav">
							<li ><a href="index.php">Accueil</a></li>
							<li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  >Qui sommes-nous?<span class="caret"></span></a>
                                <ul class="dropdown-menu">
									<li><a href="abouten.php">Notre Entreprise</a></li>
                                    <li><a href="aboutorg.php">Notre Organisation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
									<a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Nos Produits <span class="caret"></span></a>
									<ul class="dropdown-menu">
                                        <li><a href="prodind.php">Nos Produits d'Assurance Vie</a></li>
                                        <li><a href="https://www.africaine-assur.com/">Nos Produits IARDT</a></li>
                                    </ul>
							</li>
							<li><a href="single.php">Blog</a></li>
							<li><a href="espace.php">Espace Clients</a></li>
							<li><a href="contact.php">Contact</a></li>
							
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
</div>


	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.php">Accueil</a><span>|</span></li>
				<li>Notre Organisation</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">L'équipe dirigeante</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class=" blog-grid2">
					 <!-- <div id="chart_div"></div>  -->
						<div class="blog-text">
							
							<p>	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp La Compagnie est administrée par un Conseil d’Administration de neuf (09) membres qui définit 
							les orientations au plan stratégique. Il est présidé par Monsieur Constant D. MIGAN </p>
							<p>Le Directeur Général assure la gestion de la Compagnie. Il est doté des pouvoirs les plus étendus 
							pour la représenter, contracter en son nom et l’engager pour tous les actes 
							et opérations qui relèvent de l’objet social.</p>
							<p>La fonction managériale du Directeur Général consiste à l’intégration des ressources humaines, 
							matérielles et financières de l’entreprise, en vue d’atteindre les objectifs fixés.</p>
							<p>Le Directeur Général est assisté dans ses fonctions de différents départements et services techniques (Voir organigramme).
							</p>
								<div id="nextInfo4">
									<p>Leurs attributions se définissent comme suit :
									<br>
										
										&nbsp&nbsp&nbsp<span class="fa fa-circle"></span><b> Le Département Technique et Commercial </b>, 
										Ce département a en charge la gestion technique, la gestion des productions et des encaissements,
										l’édition des états statistiques de la Compagnie et organise sa force de vente; 
										
										<br>
										&nbsp&nbsp<span class="fa fa-circle"></span> <b> Le Département du Système d'Information</b> 
										Ce département assure le bon fonctionnement du Système d’Information de la Compagnie, la gestion des 
										archives et le développement et l'intégration de solutions logiciels ou applicatives pour accompagner
										les services de la Compagnie et ses partenaires;
										<br>
										&nbsp&nbsp&nbsp<span class="fa fa-circle"></span><b> Le Département Administration et Finance</b>
										Ce département a en charge la gestion de la Comptabilité, de la Trésorerie et des Placements de la Compagnie ainsi que la
										gestion des ressources humaines;
										<br>
										&nbsp&nbsp&nbsp<span class="fa fa-circle"></span> <b> Le Service Audit Interne</b>,Ce service s’occupe de l’audit et du contrôle interne, 
											assure une bonne cohésion entre les différents services de la Compagnie;
										<br>
										&nbsp&nbsp&nbsp&nbsp<span class="fa fa-circle"></span> <b> Le Service Réseaux des Particuliers.</b>
									<br>

									</p>
									<p>La Compagnie dispose aussi d’un large réseau commercial étendu à travers tout le territoire national, et des bureaux 
									de représentation dans les départements à l’intérieur du pays. 
									Il s’agit des Bureaux de Natitingou, Djougou, Parakou, Dassa, Bohicon, Lokossa, Porto-Novo et Pobè.</p>
								</div>
								<div class="ab_buttonG">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" id="but4"  onclick="showMore4()" role="button">Voir plus</a>
								</div>
								<script >
									$(function(){
										$("#nextInfo4").hide();
									});
									function showMore4() {
										var o = document.getElementById("but4");
										var x = document.getElementById("nextInfo4");					
											if (x.style.display === "none") {
												o.childNodes[0].nodeValue="Réduire"
												x.style.display = "block";
											} else {
												x.style.display = "none";
												o.childNodes[0].nodeValue="Voir plus"
											}	
									}
								</script>
						</div>
					</div>
					<div class="blog-grid2">
					
						<img src="images/og.png" title="Organigramme de l'Africaine Vie" alt="Organigramme de l'Africaine Vie" class="img-responsive">
						<a href="images/og.png" download="organigramme.png">Télécharger l'Organnigramme</a>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			
		</div>
	</div>
	<!--//ab-->
	
		<!-- /team -->
		<div class="banner_bottom proj">
			<div class="container">
				<h3 class="tittle-w3ls">Le Conseil d'administration</h3>
				<div class="blog-grid2">
					<img src="images/ca.png" title="Conseil d'administration de l'Africaine Vie" alt="Conseil d'administration de l'Africaine Vie" class="img-responsive">
				</div>					
				<!-- <div class="row">
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Président</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Constant D. MIGAN</h5>
											<span>Président</span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Mouftaou SOUHOUIN</h5>
											<span>Membre </span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Linda Anderson</h5>
											<span>Membre </span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Linda Anderson</h5>
											<span>Membre </span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Linda Anderson</h5>
											<span>Membre </span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Linda Anderson</h5>
											<span>Membre </span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Linda Anderson</h5>
											<span>Membre </span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Linda Anderson</h5>
											<span>Membre </span>
										</div>
					</div>
					<div class="col-md-2 col-sm-2">
										<div class="team-member">
											<div class="team-img">
												<img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" width="200" height="150">
											</div>
											<div class="team-hover">
												<div class="desk">
													<h4>Membre</h4>
												</div>
											</div>
										</div>
										<div class="team-title">
											<h5>Linda Anderson</h5>
											<span>Membre </span>
										</div>
					</div>
				</div> -->
			</div>
		</div>
		
		<!-- //team -->
	

	
	<!-- footer -->
	<?php include 'footer.php';?>
	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->


	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>

</html>