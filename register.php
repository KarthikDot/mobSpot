<?php
	session_start();
?>
<?php include('header.php'); ?>
<?php include('panel.php'); ?>

<!-- Site Container -->
<div id="Wrapper">
	<div id="PageWrapper">
		<div class="pageTop"></div>
		<div id="Header">
		
			<?php include('navigation.php'); ?>

		<?php include('slideshow.php'); ?>
		
		<div class="pageMain">
		
			<?php include('showcase.php'); ?>
			
			<!-- Page Content -->
			<div class="contentArea">
			
				<div class="two-thirds">
					
					<h1 class="title">
						Sign Up for mobSpot
						<span>Use the simple signup form, and you'll be inside in less than 2 minutes!</span>
					</h1>
					
					<p>Fill up the form and get started quickly!</p>
					
					<form class="cmxform" id="CommentForm" method="post" action="scripts/register-exec.php">
						<fieldset>
							<legend>Registration Form</legend>
							<div>
								<label for="UserFullName" class="overlabel">Your Name</label>
								<input id="UserFullName" name="UserFullName" class="textInput required" />
							</div>
							<div>
								<label for="UserEmail" class="overlabel">E-Mail</label>
								<input id="UserEmail" name="UserEmail" class="textInput required email" />
							</div>
							<div>
								<label for="UserName" class="overlabel">Username</label>
								<input id="UserName" name="UserName" class="textInput required" />
							</div>
							<div>
								<label for="UserPassword" class="overlabel">Password</label>
								<input id="UserPassword" name="UserPassword" class="textInput required" value="" type="password"/>
							</div>
							<div>
								<label for="UserConfirmPassword" class="overlabel">Confirm Password</label>
								<input id="UserConfirmPassword" name="UserConfirmPassword" class="textInput required" value="" type="password"/>
							</div>
							<div>
								<label for="UserPhone" class="overlabel">Phone</label>
								<input id="UserPhone" name="UserPhone" class="textInput digits required" value=""/>
							</div>
							<div>
								<button type="submit" class="btn"><span>Register</span></button>
							</div>
						</fieldset>
					</form>
					
					<?php if( isset($_SESSION['STATUS']) ) {
					echo $_SESSION['STATUS'];
					unset($_SESSION['STATUS']);
					}
					?>
					
					<?php if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					echo '<p>The Following Errors Occurred in Your Registration</p>';
					echo '<ul>';
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
						echo '<li>',$msg,'</li>'; 
					}
					echo '</ul>';
					unset($_SESSION['ERRMSG_ARR']);
					}
					?>
					
				</div>
				
				<?php include('sidebar.php'); ?>
				
				<!-- End of Content -->
				<div class="clear"></div>
			
			</div>
			
		</div>
		
		<?php include('footer.php'); ?>
