<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-5 d-flex flex-column min-vh-100 justify-content-center align-items-center bg-light-green-grd">
					<h1 class="text-center"> SAMPLE NAME. </h1>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p class="text-center">&copy; info.test@gmail.com</p>
				</div>

				<div class="col-md-7 d-flex flex-column min-vh-100 justify-content-center align-items-center">
					<h3> Log in.</h3>

					<br>
						<div id="login_alert" class="alert alert-danger d-none" role="alert"></div>
					<br>

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<form id="login_form" class="login-form">
									<div class="mb-3">
									  <label for="username" class="login-form-label">Email address</label>
									  <input id="username" type="text" class="mt-2 form-control login-form" placeholder="Enter username">
									</div>

									<div class="mb-3">
									  <label for="password" class="login-form-label">Password</label>
									  <input id="password" type="password" class="mt-2 form-control login-form" placeholder="Enter password">
									</div>

									<br>

									<div class="col-12">
								    <button id="btn_login" type="submit" class="btn bg-light-green-grd pull-right">Login</button>
								  </div>
								</form>
							</div>		
							<div class="col-md-3"></div>
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</div>

	<input type="hidden" id="base_url" name="url" value="<?php echo base_url(); ?>">
</body>

<!-- SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/scripts/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
	let doc             = $(document);
	let base_url        = document.getElementById('base_url').value;
	let loginController = base_url + 'login/user';
	
	$(function() {
		doc.on('submit', '#login_form', (e) => {
			console.log(loginController);
			e.preventDefault();

			let username = $('#username').val();
			let password = $('#password').val();

			if (username == '' || password == '') {
				$('#login_alert')
					.text('Enter username or password.')
					.removeClass('d-none')
					.removeAttr('style')
					.addClass('d-block');

				$('#login_alert').fadeOut(2000, function() {
			    $('#login_alert').removeClass('d-block').addClass('d-none');
			  });
			}
			
			$.ajax({
				url : loginController,
				type: 'POST',
				data: { 
					'username' : username, 
					'password' : password
				},
				dataType: 'JSON',
				assync: true,
				beforeSend: function(){},
				success: function(res){
					console.log(res);
				},
			});
		});
	});
</script>