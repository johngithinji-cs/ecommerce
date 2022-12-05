
	<div class="sidebar-header">
		<a href="#" class="sidebar-close"><i class="feather-x-circle"></i></a>
	</div>
	<div class="sidebar-layout">
		<div class="sidebar-body">
			<div class="side-logo mb-40">
				<a href="<?php echo base_url('assets/theme/index.html')?>" ><img src="<?php echo base_url('assets/theme/assets/img/logo.png')?>" alt="logo" /></a>
			</div>
			<div class="login-group register-login" >
				<h5>Register</h5>
				<form action="<?php echo base_url()?>new_user" method="POST">
					<div class="form-group">
						<input type="text" name="fname" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group">
						<input type="text" name="lname" class="form-control" placeholder="Last Name">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="form-group">
						<div class="pass-group">
							<input type="password" name="password" class="form-control pass-input" placeholder=" password">
							<span class="feather-eye toggle-password"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="pass-group">
							<input type="password" name="passconf" class="form-control pass-one-input" placeholder="Confirm Password">
							<span class="feather-eye conform-password"></span>
						</div>
					</div>
					<div class="register-method">
						<label class="radio-inline custom_radio me-4">
							<input type="radio" name="optradio" id="in-customer" checked="">
							<span class="checkmark"></span> I am a Customer
</label>
						<label class="radio-inline custom_radio">
							<input type="radio" name="optradio" id="in-vendor">
							<span class="checkmark"></span> I am a Vendor
</label>
					</div>
					<div class="ventor-groups mt-10">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Store Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Store URL">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Store Phone Number">
						</div>
					</div>
					<div class="register-policy">
						<p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
					</div>
					<div class="remember-me form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="remember"> I agree to terms & Policy.
						</label>
					</div>
					<div class="d-grid login-pharmacy mb-25">
						<button class="btn btn-primary btn-start" type="submit">Sign Up</button>
					</div>
					<div class="create-account">
						<p>Have an account already? <a href="javascript:;" class="popup-toggle">Login</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>

