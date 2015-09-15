<?php
	$title = "LCS";
	$css = "css/lcs.css";
	$active = "lcs";
	require "php_template/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->



		<!-- Page heading -->
		<div class="middle-container">
		  	<h1><span class="h1-capital">L</span>EAGUE OF <span class="h1-capital">L</span>EGENDS <span class="h1-capital">C</span>HAMPIONSHIP <span class="h1-capital">S</span>ERIES</h1>
			<h3>North America</h3>

			 <!--*** All of the team information and pictures were taken from 'http://na.lolesports.com/na-lcs/2015/spring/teams' ***-->
			<div class="middle-content">
			
				<!-- Include LCS pages -->
				<?php 	
					if (isset($_GET['p']) && $_GET['p']=="lcs2") {
						$activePage = 2;
						include('lcs2.php');
					} else {
						$activePage = 1;
						include('lcs1.php');
					}
				?>
					
				<!-- Page navigation bar -->
				<nav class="text-center">
					<ul class="pagination">
						<li>
							<a href="lcs.php?p=lcs1" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li <?php echo $activePage==1 ? "class='active'" : "" ?>><a href="lcs.php?p=lcs1">1</a></li>
						<li <?php echo $activePage==2 ? "class='active'" : "" ?>><a href="lcs.php?p=lcs2">2</a></li>
						<li>
							<a href="lcs.php?p=lcs2" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
					
			</div>
			
			
<!-- END OF CONTENT -->
<!-- START OF ENDING TEMPLATE -->	
			
<?php require "php_template/content_after.php" ?>