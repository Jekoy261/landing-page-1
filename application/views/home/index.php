<body>
	<?php
		$img_logo = 'assets/images/index/logo.png';
	?>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow navbar-custom">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">
	      <img src="<?php echo $img_logo; ?>" alt="" width="30" height="30" class="d-inline-block align-text-top">
	      <small style="margin-left: 10px;"> 
	      	COMPANY NAME
	      </small>
	    </a>
	    
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav me-auto my-2 my-lg-0">
	      </div>

	      <form class="d-flex">
	        <ul class="navbar-nav me-auto my-2 my-lg-0" style="--bs-scroll-height: 100px;">
	        	<li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">HOME</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" aria-current="page" href="#about">ABOUT</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" aria-current="page" href="#services">SERVICES</a>
		        </li>
	        	<li class="nav-item">
		          <a class="nav-link" aria-current="page" href="#careers">CAREERS</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#contactus">CONTACT US</a>
		        </li>
		      </ul>
	      </form>
	    </div>
	  </div>
	</nav>

	<content>
		<div id="carouselExampleControls-1" class="carousel carousel-custom-1 slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleControls-1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" data-bs-target="#carouselExampleControls-1" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" data-bs-target="#carouselExampleControls-1" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>

		  <!-- 1440 / 500 -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg" class="d-block w-100" alt="Slide 1">
		    </div>
		    <div class="carousel-item">
		      <img src="https://cdn.vuetifyjs.com/images/carousel/bird.jpg" class="d-block w-100" alt="Slide 2">
		    </div>
		    <div class="carousel-item">
		      <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="d-block w-100" alt="Slide 3">
		    </div>
		  </div>

		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-1" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-1" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	</content>

	<!-- CONTENT COMPANY DESCRIPTION -->
	<content id="about" href="about">
		<div class="container-fluid bg-light container-custom">
			<div class="row">
				<div class="col-md-12">
					<p class="font-b-name"> JEKOY LIAN BRANCH TEST NAME </p>
				</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-1">
						</div>
						
						<div class="col-md-5">
							<div class="col-md-2">
								<hr class="hr-custom">
							</div>

							<div class="col-md-12">
								<p class="ff-lucida">
									<?php echo $pf_year ?>
								</p>

								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</div>
						</div>

						<div class="col-md-1">
						</div>

						<div class="col-md-5">
							<img src="assets/images/index/image_test_1.png" alt="" width="550" height="550" class="d-inline-block">
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-9"></div>
						<div class="col-md-3">
							<div class="col-md-3">
								<hr class="hr-custom">
							</div>

							<p class="font-b-name"> JEKOY LIAN BRANCH TEST NAME </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>

	<content id="services">
		<div class="container-fluid bg-light-green container-custom">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="ff-lucida fw-bold"> OUR SERVICES </h2>
				</div>

				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6 text-center">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="col-md-3"></div>
					</div>
				</div>

				<div class="col-md-12 mt-5">
					<div class="row">
						<div class="col-md-4">
							<div class="card shadow mb-3" style="max-width: 500px;">
							  <div class="row g-0">
							    <div class="col-md-4">
							      <img src="assets/images/index/image_mid_1.jpg" class="img-fluid rounded-start" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							        <h5 class="card-title text-bold"> Place </h5>
							        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow mb-3" style="max-width: 500px;">
							  <div class="row g-0">
							    <div class="col-md-4">
							      <img src="assets/images/index/image_mid_2.jpg" class="img-fluid rounded-start" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							        <h5 class="card-title text-bold"> Place </h5>
							        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card shadow mb-3" style="max-width: 500px;">
							  <div class="row g-0">
							    <div class="col-md-4">
							      <img src="assets/images/index/image_mid_3.jpg" class="img-fluid rounded-start" alt="...">
							    </div>
							    <div class="col-md-8">
							      <div class="card-body">
							        <h5 class="card-title text-bold"> Place </h5>
							        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</content>

	<div id="carouselExampleControls-2" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleControls-2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleControls-2" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleControls-2" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>

	  <!-- 1440 / 500 -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg" class="d-block w-100" alt="Slide 1">
	    </div>
	    <div class="carousel-item">
	      <img src="https://cdn.vuetifyjs.com/images/carousel/bird.jpg" class="d-block w-100" alt="Slide 2">
	    </div>
	    <div class="carousel-item">
	      <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="d-block w-100" alt="Slide 3">
	    </div>
	  </div>

	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls-2" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls-2" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>

	<!-- COMPANY TEAM -->
	<div class="container-fluid bg-light container-custom">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="ff-lucida"> SAMPLE DESCRIPTION </h2>
			</div>

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 text-center">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>

			<div class="col-md-12 mt-5">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<h3 class="ff-lucida mt-5"> SAMPLE DATA </h3>
						<hr>
						<p class="">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>	
					</div>

					<div class="col-md-1"></div>
					<div class="col-md-5">
						<img src="assets/images/index/image_last_1.jpg" class="img-fluid rounded-start" alt="...">
					</div>
				</div>
			</div>

			<div class="col-md-12 mt-5">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-5">
						<img src="assets/images/index/image_last_2.jpg" class="img-fluid rounded-start" alt="...">
					</div>

					<div class="col-md-5">
						<h3 class="ff-lucida mt-5"> SAMPLE DATA </h3>
						<hr>
						<p class="">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>	
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>

		<div class="col-md-12">
			<br>
			<br>
		</div>
	</div>

	<content id="careers">
		<div class="container-fluid bg-light-white container-custom">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-5"></div>
					<div class="col-md-2 text-center bg-light-white" style="margin-top: -250px; margin-bottom: 50px; border-radius: 100%;">

						<img style="padding: 40px;" width="260" height="260" src="<?php echo base_url(); ?><?php echo $img_logo; ?>">
						
					</div>
					<div class="col-md-5"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="ff-lucida fw-bold"> JOIN OUR AWESOME TEAM </h2>
				</div>
			</div>

			<div class="col-md-12">
				<br>
				<br>
			</div>
		</div>
	</content>

	<div class="container-fluid bg-light-green container-custom">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-2">
					<div class="row">
						<h2> COMPANY </h2>
						<a class="link" href="#">HOME </a>
						<a class="link" href="#about">ABOUT </a>
						<a class="link" href="#services">SERVICES </a>
						<a class="link" href="#careers">CAREERS </a>
						<a class="link" href="#contactus">CONTACT US </a>
					</div>
				</div>

				<div class="col-md-2">
					<div class="row">
						<h2> PARTNERS </h2>
						<a class="link" href="#">Partner 1 </a>
						<a class="link" href="#">Partner 2 </a>
						<a class="link" href="#">Partner 3</a>
						<a class="link" href="#">Partner 4</a>
					</div>
				</div>

				<div class="col-md-2">
					<div class="row">
						<h2> SOCIAL </h2>
						<a class="link" href="#">Facebook </a>
						<a class="link" href="#">Twitter </a>
						<a class="link" href="#">Instagram </a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12 text-center">
			<br>
			<br>
			Copyright &copy; <?php echo $today_year; ?> All Right Reserved <b class="ff-lucida"> info.test@gmail.com</b>
		</div>
	</div>
</body>

<!-- SCRIPTS -->
<script src="<?php echo base_url('assets/scripts/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</html>