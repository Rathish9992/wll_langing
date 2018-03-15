<ul class="social-list">
	<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
	<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
	<li><a href="#" title="Reddit"><i class="fa fa-reddit"></i></a></li>
	<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
	<li><a href="#" title="Google+"><i class="fa fa-google-plus"></i></a></li>
	<li><a href="#" title="Medium"><i class="fa fa-medium"></i></a></li>
</ul>

<header>
	<div class="head-top" id="navbar">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<a href="index.php" class="logo">
						<img src="images/willcoin-logo.png" class="img-responsive"/>
					</a>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-4">
					<nav>
						<h6 class="mob_nav clearfix">
							<i class="fa fa-bars" aria-controls="mob" aria-expanded="false" data-target="#mob" data-toggle="collapse"></i>
						</h6>
						<ul id="mob" class="navigation collapse">
							<li><a href="index.php">Home</a></li>
							<li><a href="#" class="teleg">Telegram</a></li>
							<li><a href="#" class="log">Login</a></li>
							<li><a href="#" class="reg">Register</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2">
					<a class="step-info hidden-xs cl_tabs" href="#tabs">
						<i class="fa fa-info"></i><span>5 Simple Steps to<br>Buy WLL Token</span>
					</a>
					<nav id="step-info">
						<ul>
							<li>
								<a href="#tabs" class="cl_tabs">
									<i class="fa fa-info"></i><span>5 Simple Steps to Buy WLL Token</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="head-bottom">
		<div class="container">
			<div class="row">
				<div class="hb-lt text-center">
					<h4>A Decentralized Organization for settlement of crypto Assets</h4>
					<h5>Public sale on <span>May 1<sup>st</sup> 2018</span></h5>
					<div id="timer"></div>
					<form>
						<div class="input-group">
						    <input type="text" class="form-control" placeholder="Email">
						    <div class="input-group-btn">
						      <button class="btn btn-default" type="submit">
						       Whitelist Now
						      </button>
						    </div>
						</div>
					</form>
					<p>by Digitrust Corporation Pte Ltd, Singapore</p>
				</div>
				<!--<div class="col-md-1"></div>-->
				<div class="hb-rt text-center">
					<h3><img src="images/will.png" class="img-responsive"></h3>
					<h5>Protect your Crypto wealth in a safe way<br>Pass it on to your loved ones securely</h5>
					<p>56 Million People among us die every year (108 death p/minute) and our rightful heirs need help inheriting their crypto assets</p>
					<p>Will coin is your utility token to</p>
					<ul class="hlist">
						<li><span>1</span> Prepare for any eventuality</li>
						<li><span>2</span> Assign and modify heirs over time</li>
						<li><span>3</span> Secure settlement services</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Login content-->
<div id="login-modal" class="modal fade" role="dialog">
	<div class="col-md-4 col-sm-6 col-xs-8" style="float: none; margin: auto;">
	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	     	<div class="modal-body">
			    <div class="row">
			    	<div class="col-md-12 login-box">
			    		<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">x</button>
						</div>
						<div class="modal-content">
						    <!--Login Form-->
							<div id="first">
								<h3>LOGIN</h3>
								<form class="login-form">
									<div class="form-group">
										<div class="icon-addon addon-md">
											<input type="text" required="" onblur="if (this.value == '') {this.value = 'Username';}" onfocus="this.value = '';" value="Username" class="form-control">
											<label for="username" class="fa fa-user"></label>
										</div>
									</div>
									<div class="form-group">
										<div class="icon-addon addon-md">
											<input type="password" required="" onblur="if (this.value == '') {this.value = 'Password';}" onfocus="this.value = '';" value="Password" class="form-control">
											<label for="password" class="fa fa-key"></label>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="login-btn"> Login</button>
									</div>
									<div class="form-group">
										<div class="col-xs-4">
											<a href="#" data-toggle="modal" data-target="#signup-modal" data-dismiss="modal" class="log-link2">Sign up</a>
										</div>
										<div class="col-xs-8 text-right">
											<a href="#" class="log-link" id="forgot">Forgot My Password?</a>
										</div>
								    </div>
								</form>
							</div>
							
							<!--Forgot Form-->
							<div id="second">
								<h3>Forgot Password</h3>
								<form class="forgot-form">
									<div class="form-group">
										<div class="icon-addon addon-md">
											<input type="text" required="" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="this.value = '';" value="Email" class="form-control">
											<label for="email" class="fa fa-envelope"></label>
										</div>
									</div>
									<div class="form-group">
										<button type="submit" class="login-btn">Submit</button>
									</div>
									<div class="form-group">
										<div class="col-sm-12 text-center">
											<a href="#" class="log-link" id="login">Sign In</a>
										</div>
								    </div>
								</form>
							</div>
						</div>
			    	</div>
			    </div>
	     	</div>
	    </div>
	</div>
	</div>
</div>


<!-- Sign up content-->
<div id="signup-modal" class="modal fade" role="dialog">
	<div class="col-md-4 col-sm-6 col-xs-8" style="float: none; margin: auto;">
	<div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	     	<div class="modal-body">
			    <div class="row">
			    	<div class="col-md-12 login-box">
			    		<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">x</button>
						</div>
						<div class="modal-content">
							<h3>Sign Up</h3>
							<form class="login-form">
								<div class="form-group">
									<div class="icon-addon addon-md">
										<input type="text" required="" onblur="if (this.value == '') {this.value = 'Name';}" onfocus="this.value = '';" value="Name" class="form-control">
										<label for="name" class="fa fa-user"></label>
									</div>
								</div>
								<div class="form-group">
									<div class="icon-addon addon-md">
										<input type="text" required="" onblur="if (this.value == '') {this.value = 'Email';}" onfocus="this.value = '';" value="Email" class="form-control">
										<label for="email" class="fa fa-envelope"></label>
									</div>
								</div>
								<div class="form-group">
									<div class="icon-addon addon-md">
										<input type="text" required="" onblur="if (this.value == '') {this.value = 'Mobile';}" onfocus="this.value = '';" value="Mobile" class="form-control">
										<label for="mobile" class="fa fa-phone"></label>
									</div>
								</div>
								<div class="form-group">
									<div class="icon-addon addon-md">
										<input type="text" value="Password" onclick="this.value='';setAttribute('type', 'password');" onfocus="if (this.value == 'Password') {this.value = ''; setAttribute('type', 'password');}"   onblur="if (this.value == '') {this.value = 'Password';setAttribute('type', 'text');}" name="password" class="form-control"/>
										<label for="password" class="fa fa-key"></label>
									</div>
								</div>
								<div class="form-group">
									<div class="icon-addon addon-md">
										<input type="text" value="Confirm Password" onclick="this.value='';setAttribute('type', 'password');" onfocus="if (this.value == 'Confirm Password') {this.value = ''; setAttribute('type', 'password');}"   onblur="if (this.value == '') {this.value = 'Confirm Password';setAttribute('type', 'text');}" name="password" class="form-control"/>
										<label for="confirmpassword" class="fa fa-key"></label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 no_pad">
										<button type="submit" class="login-btn">Register</button>
									</div>
							    </div>
							</form>
						</div>
			    	</div>
			    </div>
	     	</div>
	    </div>
	</div>
	</div>
</div>
