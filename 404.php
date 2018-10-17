
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
							<li  ><a href="index.php">Accueil</a></li>
							<li class="dropdown">
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
				<li><a href="index.php">Home</a><span>|</span></li>
				<li>404</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">

<div class="container">
<div class="error-404">
				<h4>404</h4>
				<p style="text-align:center" >Ooops! Aucun Résultat.</p>
				<!-- <form action="#" method="post">
					<input class="serch" type="search" name="serch" placeholder="Search here" required="">
					<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form> -->
				<div class="error social-icons">
					<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
				</div>
				<a class="b-home" href="index.php">Revenir à l'accueil</a>
			</div>

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
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
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

