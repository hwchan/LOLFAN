<?php
	if(isset($_GET['logout'])){
		unset($_SESSION);
		session_destroy();
	}
	if(isset($_GET['unregister'])){
		require('unregister.php');
	}
?>


<!-- Logo -->
<a href="index.php"><img alt="League of Legends logo" src="images/League_of_legends_logo_transparent.png" width="190" height="75"></a>

<!-- Logged in email display -->
<span id="email"><?php  
	if (isset($_SESSION['SESS_USERS_EMAIL'])) {
		echo $_SESSION['SESS_USERS_EMAIL'];
	}
?></span>

<!-- Nav bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<!-- Collapsed navbar hamburger -->
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand"></a>
	</div>
	<div id="navbar" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<?php echo $active == "index" ? '<li class="active">' : '<li>'; ?>
				<a href="index.php">News</a></li>
			<?php echo $active == "intro" ? '<li class="active">' : '<li>'; ?>
				<a href="intro.php">Intro</a></li>
			<?php echo $active == "videos" || $active == "lcs" ? '<li class="active">' : '<li>'; ?>
				<!-- Show the dropdown for Media if Javascript is enabled -->
				<script type="text/javascript">
					document.write(" \
					<a href=\"\" data-toggle=\"dropdown\">Media<span class=\"caret\"></span></a> \
					<ul class=\"dropdown-menu inverse-dropdown\"> \
						<li><a href=\"videos.php\">Videos</a></li> \
						<li><a href=\"lcs.php\">Pro teams</a></li> \
					</ul> \
					")
				</script>
				<!-- Else show plain links -->		
				<noscript>
					<div id="noscript-media">
						<a href="videos.php">Videos</a><br>
						<a href="lcs.php">Pro teams</a>
					</div>
				</noscript>		
			</li>
			<?php echo $active == "champions" ? '<li class="active">' : '<li>'; ?>
				<a href="champions.php">Champions</a></li>
			<?php echo $active == "items" ? '<li class="active">' : '<li>'; ?>
				<a href="items.php">Items</a></li>
			<?php echo $active == "calculator" ? '<li class="active">' : '<li>'; ?>
				<a href="calculator.php">Calculator</a></li>
				
			<li>
				<!-- Use pop up modal if Javascript is enabled -->
				<script type="text/javascript">
					document.write(" \
					<?php
						if(isset($_SESSION['SESS_USERS_EMAIL'])){
							echo '<a href=\"\" data-toggle=\"dropdown\">Options</a> \
				    	<ul class=\"dropdown-menu inverse-dropdown\"> \
						<li><a href=\"index.php?logout=true\">Log Out</a></li> \
						<li><a href=\"index.php?unregister=true\">Un-Register</a></li> \
                        </ul> \
                        ")';
                            
						} else {
							echo '<a href=\"#signin\" data-toggle=\"modal\" data-target=\"#signInModal\">Sign in</a>")';
						}
					?>
					
				</script>
				<!-- Else show plain links -->
				<noscript>
					<div id="noscript-signin">
						<?php echo isset($_SESSION['SESS_USERS_EMAIL'])==true ? '<a href="index.php?logout=true">Log out</a>' :  '<a href="signin.php">Sign In</a>'?>
						<!--a href="signin.php"><?php echo isset($_SESSION['SESS_USERS_EMAIL'])==true ? "Log out" : "Sign in";?></a-->
					</div>
				</noscript>
			</li>
			
		</ul>
	</div><!--/.nav-collapse -->
</nav>

