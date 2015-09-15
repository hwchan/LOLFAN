<!-- Sign in modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="signIn" action="php_template/form.php" onsubmit="return validateSignIn()" method="POST">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h1 id="signin-title">Sign in</h1>
				</div>
				<div class="modal-body">
					<!-- Email -->
					<span class="modal-title">Email: <span id="email-star">*</span></span><br>
					<input type="email" placeholder="example@email.com" name="email" size="40" required>
					<br>
					<!-- Submit -->
					<input id="submitButton" type="submit" class="btn btn-primary pull-right" value="Go!">
					<br>
					<!-- Password -->
					<span class="modal-title">Password: <span id="password1-star">*</span></span><br>
					<input type="password" name="password1" size="40" required>
					<!-- Register -->
					<a id="registerLink" href="#" onclick="registerToggle()" class="small pull-right">Register</a>
					<br>
					<!-- Forgot your password -->
					<a href="#" class="small">Forgot your password?</a>
					<!-- Hidden registration area -->
					<div id="registerArea">
						<hr class="hr-white">
						<!-- Repeat password -->
						<span class="modal-title">Repeat password: <span id="password2-star">*</span></span><br>
						<input id="repeat-password" type="password" name="password2" size="40">
						<br>
						<!-- Terms -->
						<input type="checkbox" name="termsConditions">
						<span class="small">I accept the <a href="#" data-toggle="tooltip" data-placement="right" title="By accepting, you forfeit all your assets to us.">terms and conditions</a> <span id="terms-star">*</span></span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div><!-- End of modal -->