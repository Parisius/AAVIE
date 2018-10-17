
<!DOCTYPE html>
<html>

<?php include 'head.php';?>

<body>
<!-- <?php// include 'utils/redirect.php';?> -->
<?php include 'utils/loadprod.php';?>
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
							<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  >Qui sommes-nous?<span class="caret"></span></a>
                                <ul class="dropdown-menu">
									<li><a href="abouten.php">Notre Entreprise</a></li>
                                    <li><a href="aboutorg.php">Notre Organisation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown active">
									<a href="#"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Nos Produits <span class="caret"></span></a>
									<ul class="dropdown-menu">
                                        <li><a href="prodind.php">Nos Produits d'Assurance Vie</a></li>
                                        <li><a href="https://www.africaine-assur.com/">Nos Produits IARDT</a></li>
                                    </ul>
								</li>
							<li ><a href="single.php">Blog</a></li>
							<li><a href="espace.php">Espace Clients</a></li>
							<li  ><a href="contact.php">Contact</a></li>
							
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
				<li><?php echo $products[$ids]->title;?></li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
	<div class="banner_bottom">
		<div class="container">
			<div class="col-md-9 technology-left">
				<div class="business">
					<div class=" blog-grid2">
						<div class="blog-text">	
							<h5><?php echo $products[$ids]->title;?></h5>
						</div>
						<br>
						<img src=<?php echo $products[$ids]->image;?> class="img-responsive" alt="">
						<br>
						<div class="blog-text" >
						<?php echo $products[$ids]->content;?>
						</div>
						<br>
						<a href="espace.php" class="blog-btn2 ">Souscrire à ce contrat</a>
					</div>

					
				</div>
			</div>
			<!-- technology-right -->
			<div class="col-md-3 technology-right-1">
				<div class="blo-top">
					<div class="tech-btm">
						<img src="images/banner1.jpg" class="img-responsive" alt="" />
					</div>
				</div>
				<div class="blo-top">
					<div class="tech-btm">
						<h4>Restez à l'écoute</h4>
						
						<div class="name">
							<form action="#" method="post">
								
								<input type="email" name="Email" placeholder="Email" required="">
								<div class="button">

									<input type="submit" value="Envoyer">

								</div>
							</form>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="blo-top1">
					<div class="tech-btm">
						<h4>Nos produits</h4>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="product.php"><img src="images/g6.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="product.php">Assurance Sérenité Retraite</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="product.php"><img src="images/g7.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="product.php">Assurance Sérenité Pension</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="product.php"><img src="images/g3.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="product.php">Assurance Libre Sérenité</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="product.php"><img src="images/g5.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="product.php">Assurance Bouckier Emprunteur</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							<div class="blog-grid-left">
								<a href="product.php"><img src="images/g1.jpg" class="img-responsive" alt=""/></a>
							</div>
							<div class="blog-grid-right">

								<h5><a href="product.php">Tontine Wanrou / ALAFIA</a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<!-- footer -->
	<?php include 'footer.php';?>
	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
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

	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
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