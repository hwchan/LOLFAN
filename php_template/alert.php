<!-- Display a warning for disabled Javascript -->
<noscript>
	<div class="alert alert-warning" role="alert"><strong>JavaScript is disabled!</strong> The items page, calculator, and sign in function requires JavaScript. Please reenable JavaScript to access these functions.</div>
</noscript>
<!-- Display error messages thrown by login -->
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<div class="alert alert-danger" role="alert"><strong>';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo $msg."<br>"; 
		}
		echo '</strong></div>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>