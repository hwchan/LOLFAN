<?php
	$title = "Sign in";
	$css = "css/base.css";
	$active = "";
	require "php_template/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->


		
		<!-- Page heading -->
		<div class="middle-container">
				<h1><span class="h1-capital">S</span>IGN <span class="h1-capital">I</span>N</h1>
				<!-- End of page heading -->
				
			<div class="middle-content">
				
				<form name="signIn" action="php_template/form.php" method="POST">

						<!-- Email -->
						<span class="modal-title">Email: <span id="email-star">*</span></span><br>
						<input type="email" placeholder="example@email.com" name="email" size="40" required>
						<br>
						<!-- Sign in button -->
						<input id="submitButton" type="submit" class="btn btn-primary pull-right" value="Sign in">
						<br>
						<!-- Password -->
						<span class="modal-title">Password: <span id="password1-star">*</span></span><br>
						<input type="password" name="password1" size="40" required>
						<br>
						<!-- Forgot your password -->
						<a href="#" class="small">Forgot your password?</a>

						<hr class="hr-white">
						
						<!-- Repeat password -->
						<span class="modal-title">Repeat password: <span id="password2-star">*</span></span><br>
						<input type="password" name="password2" size="40">
						<!-- Register button -->
						<input id="submitButton" type="submit" class="btn btn-primary pull-right" value="Register">
						<br>
						<!-- Terms -->
						<input type="checkbox" name="termsConditions">
						<span class="small">I accept the terms and conditions *</span>
						<br><br><br>
						<p class="small">*By accepting, you forfeit all your assets to us.</p>

				</form>
				
			</div><!-- End of middle content -->
			
			
			
<!-- END OF CONTENT -->
<!-- START OF ENDING TEMPLATE -->	
			
<?php require "php_template/content_after.php" ?>