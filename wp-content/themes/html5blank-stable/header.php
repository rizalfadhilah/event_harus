<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title>Event Speedcreed</title>

	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


</head>


<nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
	<img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/img/logo-sc.png" id="logo_custom" width="10%"  alt="logo">
	<button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon "></span>
	</button>
	<div class="collapse navbar-collapse " id="collapsibleNavbar">
		<ul class="navbar-nav ml-auto ">
			<li class="nav-item">
				<a class="nav-link" id="color" href="#were">WE’RE BACK</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="color" href="#itinerary">ITINERARY</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="color" href="#">HIGHLIGHT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="color" href="#">REGISTER</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="color" href="#">CONTACT</a>
			</li>    
		</ul>
	</div>  
</nav>


<style type="text/css">
#color{
	color: white; 
}
.custom-navbar{z-index:;background-color: rgb(0, 0, 0);}
.custom-toggler.navbar-toggler {border-color: rgb(247,32,78);}
.custom-toggler .navbar-toggler-icon {background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(247,32,78, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");}
.custom-toggler .navbar-toggler-icon{width: 18px!important;}
.custom-toggler:hover{border-color: rgb(255,255,255); background-color: #f76a88;}
.navbar-toggler-icon:hover{background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");}#logo_custom{margin-top: -6px;}
@media only screen and (max-width: 760px) { #logo_custom{width: 40%;}}
                          
	#wpforms-form-8{
		padding: 50px;
	}
	#wpforms-submit-8{
		color: #fff;
		background-color: #007bff;
		border-color: #007bff;
		width: 100%;
	}
	#wpadminbar{
		display: none;
	}
	@import url('https://fonts.googleapis.com/css?family=Lobster');

#days {
  font-size: 100px;
  color: #db4844;
}
#hours {
  font-size: 70px;
  color: #f07c22;
}
#minutes {
  font-size: 50px;
  color: #f6da74;
}
#seconds {
  font-size: 30px;
  color: #abcd58;
}
span {
  display: block;
  font-size: 10px;
  color: white;
}

/*------------ we are  -----*/
.we a{
    font-size:12px;
}
</style>