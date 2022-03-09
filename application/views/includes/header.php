<!DOCTYPE html>
<html>
<head>
	<title> JKY </title>

	<!-- STYLES -->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- 

		#9799A6 // Gray
		#E9E8EE // White
		#61C5C7 // Light Green

	 -->

	<style type="text/css">
		.navbar-custom {
			padding-top: 20px; 
			padding-bottom: 20px;
			padding-left: 50px;
			padding-right: 50px;
			background-color: #E9E8EE;
		}
		.container-custom {
			padding-top: 150px;
			padding-bottom: 140px;
			padding-left: 50px;
		}
		.carousel-custom-1 {
			padding-top: 80px;
		}

		.container-custom-1 {
			padding-top: 200px;
			padding-bottom: 130px;
			padding-left: 50px;
		}
		.font-b-name {
			font-size: 22px;
			font-family: "Lucida Console", "Courier New", monospace;
		}
		.ff-lucida {
			font-family: "Lucida Console", "Courier New", monospace;
		}
		.bg-light-orange {
			background-color: #FFF3EB;
		}
		.bg-light-white {
			background-color: #E9E8EE; 
		}
		.bg-light-green {
			background-color: #61C5C7; 
		}
		.bg-light-grey {
			background-color: #9799A6;
		}
		.clr-green {
			color: #61C5C7;
		}
		.clr-grey {
			color: #9799A6;
		}
		.link {
			text-decoration: none;
			color: #000;
			margin: 15px;
		}

		/* LOGIN  */
		.bg-light-green-grd {
			background: rgb(2,0,36);
			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(97,197,199,1) 0%, rgba(0,212,255,1) 100%);
		}
		.animated {
		  -webkit-animation-duration: 1.5s;
		  animation-duration: 1.5;
		  -webkit-animation-fill-mode: both;
		  animation-fill-mode: both;
		}

		@-webkit-keyframes fadeInDown {
		  from {
		    opacity: 0;
		    -webkit-transform: translate3d(0, -100%, 0);
		    transform: translate3d(0, -100%, 0);
		  }

		  to {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}

		@keyframes fadeInDown {
		  from {
		    opacity: 0;
		    -webkit-transform: translate3d(0, -100%, 0);
		    transform: translate3d(0, -100%, 0);
		  }

		  to {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}

		.fadeInDown {
		  -webkit-animation-name: fadeInDown;
		  animation-name: fadeInDown;
		}

		@-webkit-keyframes fadeInUp {
		  from {
		    opacity: 0;
		    -webkit-transform: translate3d(0, 100%, 0);
		    transform: translate3d(0, 100%, 0);
		  }

		  to {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}

		@keyframes fadeInUp {
		  from {
		    opacity: 0;
		    -webkit-transform: translate3d(0, 100%, 0);
		    transform: translate3d(0, 100%, 0);
		  }

		  to {
		    opacity: 1;
		    -webkit-transform: none;
		    transform: none;
		  }
		}

		.fadeInUp {
		  -webkit-animation-name: fadeInUp;
		  animation-name: fadeInUp;
		}
	</style>
</head>