<?php
    if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@africaineviebenin.com";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "Nous sommes désolé il y a des erreurs avec les informations envoyés. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= "L'adresse mail n'est pas valide.<br />";
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'Votre message semble invalide <br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  
}
?>

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
							<li class="active" ><a href="contact.php">Contact</a></li>
							
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
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
    <div class="banner_bottom">
		<div class="container">
			
			<div class="mail_form">
				<h3 class="tittle-w3ls">Envoyez nous un Message</h3>
				<div class="inner_sec_info_wthree_agile">
					<form action="#" method="post">
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="custName" type="text" id="input-13" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-13">
							<span class="input__label-content input__label-content--chisato" data-content="Nom">Nom</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="custEmail" type="email" id="input-14" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-14">
							<span class="input__label-content input__label-content--chisato" data-content="Email">Adresse Email</span>
						</label>
						</span>
						<span class="input input--chisato">
						<input class="input__field input__field--chisato" name="subject" type="text" id="input-15" placeholder=" " required="" />
						<label class="input__label input__label--chisato" for="input-15">
							<span class="input__label-content input__label-content--chisato" data-content="Objet">Sujet</span>
						</label>
						</span>
						<textarea name="message" placeholder="Entrez votre message..." required=""></textarea>
						<input type="submit" value="Envoyer">
					</form>

				</div>
			</div>

			<div class="inner_sec_info_wthree_agile">
				<div class="col-md-8 map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3965.2986716107366!2d2.402574471165013!3d6.355370274197667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbj!4v1533810195164"
							style="border:0"></iframe>
					</div>
					<div class="col-md-4 contact_grids_info">
						<div class="contact_grid">
							<div class="contact_grid_right">
								<h4> Direction Générale</h4>
								<p style="text-align: center">Contacts</p>
								<p style="text-align: center">(00229) 21 30 39 93 - 21 30 02 91</p>
								<p style="text-align: center">(00229) 69 67 26 25 - 69 67 25 25</p>
								<p style="text-align: center">Lot 19 Patte d'Oie. 01 BP 2040 Cotonou, Bénin</p>
								<p style="text-align: center">En face des tours administratives en allant vers l'Eglise Bon Pasteur</p>
							</div>
						</div>
						<div class="contact_grid">
							<div class="contact_grid_right">
								<h4> Agence de Bohicon</h4>
								<p style="text-align: center">Contact: (00229) 96 77 87 37</p>
								<p style="text-align: center">Immeuble AHEHEHINNOU en face de Ecoprice</p>
							</div>
						</div>
						<div class="contact_grid" >
							<div class="contact_grid_right">
								<h4> Agence de Come</h4>
								<p style="text-align: center">Contact: (00229) 67 54 07 04</p>
								<p style="text-align: center">Sur la voie d'AKODEHA Immeuble après le college MEGAN </p>
							</div>
						</div>
						<br>
						<div class="contact_grid" data->
							<div class="contact_grid_right">
								<h4> Agence de Parakou</h4>
								<p style="text-align: center">Contact: (00229) 66 00 13 28</p>
								<p style="text-align: center">Route de Malanville dans la rue du CNSR Parakou</p>
							</div>
						</div>
						

						
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
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

