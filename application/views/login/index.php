<!-- Login -->

	<div class="sidebar-header">
		<a href="#" class="sidebar-close"><i class="feather-x-circle"></i></a>
	</div>
	<div class="sidebar-layout">
		<div class="sidebar-body">
			<div class="side-logo mb-40">
				<a href="<?php echo base_url('assets/theme/index.html')?>" ><img src="<?php echo base_url('assets/theme/assets/img/logo.png')?>" alt="logo" /></a>
			</div>
			<div class="login-group" >
				<h5>Login</h5>
				<form action="<?php echo base_url('assets/theme/account.html')?>">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="form-group">
						<div class="pass-group">
							<input type="password" class="form-control pass-input" placeholder="Enter your password">
							<span class="feather-eye toggle-password"></span>
						</div>
					</div>
					<div class="forgot-pass">
						<a class="forgot-link popup-toggle2" href="javascript:;" >Forgot Password ?</a>
					</div>
					<div class="d-grid login-pharmacy mb-25">
						<button class="btn btn-primary btn-start" type="submit">Sign In</button>
					</div>
					<div class="create-account create-sign">
						<p>Don't have an account? <a href="javascript:;" class="popup-toggle1">Create one</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- /Login -->
