<!-- Top reveal (slides open, add class "topReveal" to links for open/close toggle ) -->
<div id="ContentPanel">

	<!-- close button -->
	<a href="#" class="topReveal closeBtn">Close</a>
	
	<div class="contentArea">

		<!-- New member registration -->
		<div class="right" style="margin:10px 0 0;">
			<h1>
				Not a member yet?
				<span>Register now and get started.</span>
			</h1>
			<button type="button"><a href="register.php">Register for an account</a></button>
		</div>
		
		<!-- Alternate Login -->				
		<div>
			<form class="loginForm" method="post" action="scripts/login-exec.php" style="height:auto;">
				<div id="loginBg"><img src="images/icons/lock-and-key-110.png" width="110" height="110" alt="lock and key" /></div>
				<h2 style="margin-top: 20px;">Sign in to your account.</h2>
				<fieldset>
					<legend>Account Login</legend>
					<p class="left" style="margin: 0 8px 0 0;">
						<label for="LoginUsername" class="overlabel">Username</label>
						<input id="LoginUsername" name="LoginUsername" type="text" class="loginInput textInput rounded" />
					</p>
					<p class="left" style="margin: 0 5px 0 0;">
						<label for="LoginPassword" class="overlabel">Password</label>
						<input id="LoginPassword" name="LoginPassword" type="password" class="loginInput textInput rounded" />
					</p>
					<p class="left" style="margin: -7px 0 0;">
						<button type="submit" class="btn" style="margin:0;"><span>Sign in</span></button>
					</p>
				</fieldset>
				<p class="left noMargin">
					<?php if( isset($_SESSION['STATUS']) ) {
					echo $_SESSION['STATUS'] . " | ";
					unset($_SESSION['STATUS']);
					?>
					<script type="text/javascript">
					$(document).onload(function() {
						$.scrollTo('#ContentPanel')});
					</script>
					<?php
					}
					?>
					<?php if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
						echo $msg,', '; 
					}
					unset($_SESSION['ERRMSG_ARR']);
					}
					?>
					
					<a href="#">Forgot your password?</a>
				</p>
			</form>		
		</div>
		
		<!-- End of Content -->
		<div class="clear"></div>
	
	</div>
</div>