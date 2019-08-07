<?php
include('functions.php');

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="google-site-verification" content="T2Tz-wuhxfv7VAk6EdyXtwhJnJl5UdtTTe6B20BjcaM" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>WapSlak connects your Slack to WhatsApp. In a flash.</title>
	<meta name="description"
		content="Let your whole team assist people from within Slack. The whole world uses WhatsApp. Your team is on Slack; let them help straight from Slack to Whatsapp">
	<!-- Google font -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MSC8NC7');</script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="shortcut icon" href="img/fa-icon.ico" type="image/x-icon">


	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
	<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSC8NC7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/GM/MainBackground.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/GM/Webpage.png" alt="logo">
							<img class="logo-alt" src="img/GM/Webpage.png" alt="logo">
							<span class="logo_title">Wapslak</span>
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#register">Register to get trial access</a></li>
					<li><a href="#how">How does it work</a></li>
					<li><a href="#pricing">Pricing</a></li>
					<!-- <li>


						<?php
							if(isset($_SESSION['user_id'])){
								echo '<a href="usersetting.php">Settings</a>';
							} else {
								echo '<a data-toggle="modal" data-target="#login_modal">Login</a>';

							}
						?>

					</li>
					<?php
						if(isset($_SESSION['user_id'])){
					?>
						<li>
							<a href="/logout.php">Log out</a>
						</li>
					<?php
						}
					?> -->
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">We connect your <font color="yellow">S</font><font color="red">l</font><font color="green">a</font><font color="blue">c</font><font color="yellow">k</font> to <font color="green">Whatsapp</font>
							</h1>
							<p class="white-text" style="font-size : 18px;">Let your customers send you a WhatsApp message and let your team answer	them from Slack.
                <p><button class="btn btn-success register_button">Register Here</button></p>

							</p>
							<!--<button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button> -->
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="register" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Register to get trial access</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-12 ">
					<form name="register_form" onsubmit="return validform()" action="register.php" method="POST"
						id='register_form'>
						<div class="form-group row">
							<label for="full_name" class="col-md-4 col-form-label text-right">Name and Surname:</label>
							<div class="col-md-6">
								<input type="text" id="surname" class="form-control" name="surname" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="email_address" class="col-md-4 col-form-label text-right">Full Business
								Name:</label>
							<div class="col-md-6">
								<input type="text" id="biz_name" class="form-control" name="biz_name" required>
							</div>
						</div>

						<!-- <div class="form-group row">
							<label for="user_name" class="col-md-4 col-form-label text-right">Display name / Short name
								/ Abbreviation:</label>
							<div class="col-md-6">
								<input type="text" id="short_name" class="form-control" name="short_name">
							</div>
						</div> -->

						<div class="form-group row">
							<label for="phone_number" class="col-md-4 col-form-label text-right">Email address:</label>
							<div class="col-md-6">
								<input type="email" id="eamil_address" class="form-control" name="eamil_address" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="present_address" class="col-md-4 col-form-label text-right">Website
								address:</label>
							<div class="col-md-6">
								<input type="text" id="site_address" class="form-control" name="site_address" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="permanent_address" class="col-md-4 col-form-label text-right">Country:</label>
							<div class="col-md-6">
								<input type="text" id="country" class="form-control" name="country">
							</div>
						</div>

						<div class="form-group row">
							<label for="nid_number" class="col-md-4 col-form-label text-right">Your telephone
								number:</label>
							<div class="col-md-6">
								<input type="text" id="phone_number" class="form-control" name="phone_number">
							</div>
						</div>

						<!-- <div class="form-group row">
							<label for="nid_number" class="col-md-4 col-form-label text-right">Your Slack
								workspace:</label>
							<div class="col-md-6">
								<input type="text" id="workspace" class="form-control" name="workspace" required>
							</div>
						</div> -->
						<div class="col-md-4">

						</div>
						<div class="col-md-6">
							<div class="g-recaptcha" data-sitekey="6LdLv6gUAAAAAOR-qFWddfLT8ZxQBXak_rdb42G7"></div>

						</div>
						<div class="col-md-4">

						</div>
						<div class="col-md-6 offset-md-4 text-right">
							<button type="submit" class="btn btn-primary">
								Register
							</button>
						</div>
					</form>
				</div>
				<!-- /about -->



			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->

	<!-- Why Choose Us -->
	<div id="how" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="title">How does it work</h2>
					</div>

				</div>
				<div class="col-md-12">
					<br>
					<p>We give you a snippet of Javascript that you must install on your website.</p>
					<p>This snippet will add a Whatsapp icon to your website. </p>
					<p>We will receive your client’s Whatsapp message and we will route it to your Slack channel.</p>
					<p>Your team can then reply directly in Slack and we will Whatsapp it back to the customer.</p>
					<p>So, your customer will message you in their Whatsapp app and you will answer them in Slack. Everybody is using their app that they are comfortable with.</p>

					<br>
					<h5>FAQ's</h5>
					<div class="qz">
						<p class="question">Does my client need to have Slack in order for this to work?</p>
						<p class="answer">No, your client will use his Whatsapp app to message you</p>
					</div>
					<div class="qz">
						<p class="question">Do I need Whatsapp in order to answer my client in my Slack?</p>
						<p class="answer">No, you don’t need to be a Whatsapp user to answer your client. You simply use your Slack to answer your client in his Whatsapp. That is the service that Wapslak renders (we route your Slack messages to your clients Whatsapp)</p>
					</div>

				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<!-- <h5 class="text-center">See here how to set up your Slack.</h5>
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/GM/Logo.png" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
						<img class="img-responsive" src="./img/GM/Logo.png" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
					</div> -->
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->

	<!-- Pricing -->
	<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
			</div>
			<div class="section-header text-center">
				<h2 class="title">Pricing</h2>
			</div>

			<!-- /Section header -->

			<!-- pricing -->
			<div class="col-sm-4">
				<div class="pricing">
					<div class="price-head">
						<span class="price-title">Free trial</span>
						<div class="price">
							<h3>Free</h3>
						</div>
					</div>
					<ul class="price-content">
						<li>
							<p>Number of messages per month : 20</p>
						</li>
						<li>
							<p>Own dedicated number : No</p>
						</li>
						<li>
							<p>Monthly price : 0</p>
						</li>
					</ul>
				</div>
			</div>
			<!-- /pricing -->

			<!-- pricing -->
			<div class="col-sm-4">
				<div class="pricing">
					<div class="price-head">
						<span class="price-title">Basic</span>
						<div class="price">
							<h3>$49</h3>
						</div>
					</div>
					<ul class="price-content">
						<li>
							<p>Number of messages per month : 10,000</p>
						</li>
						<li>
							<p>Own dedicated number : No</p>
						</li>
						<li>
							<p>Monthly price : $49</p>
						</li>
					</ul>
				</div>
			</div>
			<!-- /pricing -->

			<!-- pricing -->
			<div class="col-sm-4">
				<div class="pricing">
					<div class="price-head">
						<span class="price-title">Pro (coming
								soon)</span>
						<div class="price">
							<h3>$199</h3>
						</div>
					</div>
					<ul class="price-content">
						<li>
							<p>Number of messages per month : 30,000</p>
						</li>
						<li>
							<p>Own dedicated number : Yes</p>
						</li>
						<li>
							<p>Monthly price : $199</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-12 text-center">
			<a href="#register" class="btn btn-primary trial_button" >
				Register to get free trial access
							</a>
			</div>

		</div>
	</div>
	<!-- /pricing -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">


					<!-- footer follow -->

					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2019. All Rights Reserved. </p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>



	<!-- The Modal -->
	<div class="modal" id="login_modal">
		<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="/login.php" method="post" class="login_fom">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="email" name="login_email" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" name="login_pass" required>
					</div>

					<div class="g-recaptcha" data-sitekey="6LfhWqgUAAAAAIBCl-VKwceFxxLK5sAexZKCOXZF"></div>
					<p class="text-right"><a data-toggle="modal" data-target="#forgot_modal">Forgot Password</a></p>
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>

		</div>
		</div>
	</div>

	<div class="modal" id="forgot_modal">
		<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form action="" method="post" class="forgot_form">
					<div class="form-group">
						<label for="email">Email address:</label>
						<input type="email" class="form-control" id="" name="forgot_email" required>
					</div>

					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>

		</div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function (){
		$('.login_fom').submit(function (e){
			e.preventDefault();
			if (grecaptcha.getResponse() == ""){
                alert("Please check the recaptcha!");
            } else {
							$.ajax({
			            url: '/login.php',
			            type: 'post',
									data: $(this).serialize(),
			            cache: false,
			            beforeSend: function (xhr) { },
			            success: function (data, textStatus, jQxhr) {
							if(data == "success"){
								location.reload();
							} else {
								alert("Invalid Login.");
							}

			            },
			            error: function (jqXhr, textStatus, errorThrown) {
			                console.log(errorThrown);
			            }
			        }).done(function () { });
            }
		})

		$('#register_form').submit(function (e){
			// if (grecaptcha.getResponse() == ""){
			// 					e.preventDefault();
      //           alert("Please check the recaptcha!");
      //       } else {
			//
      //       }
		})

    $('.register_button').click(function (){
      window.location.href = "#register"
    })

		$('.forgot_form').submit(function (e){
			e.preventDefault();

			$.ajax({
          url: '/forgot.php',
          type: 'post',
					data: $(this).serialize(),
          cache: false,
          beforeSend: function (xhr) { },
          success: function (data, textStatus, jQxhr) {
						alert(data)
          },
          error: function (jqXhr, textStatus, errorThrown) {
              console.log(errorThrown);
          }
      }).done(function () { });

		})
	})

</script>
</body>

</html>
