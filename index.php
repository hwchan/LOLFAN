<?php
	$title = "News";
	$css = "css/index.css";
	$active = "index";
	require "php_template/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->

		
		
		<!-- Page heading -->
		<div class="middle-container">
			<h1><span class="h1-capital">N</span>EWS</h1>
			
			<!-- News articles are taken from the League of Legends website -->
			<div class="middle-content">
				
				<!-- Include news articles -->
				<?php 	
					if (isset($_GET['p']) && $_GET['p']=="news2") {
						$activeNews = 2;
						include('news2.php');
					} else if (isset($_GET['p']) && $_GET['p']=="news3") {
						$activeNews = 3;
						include('news3.php');
					} else if (isset($_GET['p']) && $_GET['p']=="news4") {
						$activeNews = 4;
						include('news4.php');
					} else {
						$activeNews = 1;
						include('news1.php');
					}
				?>
					
				<!-- Page navigation bar -->
				<nav class="text-center">
					<ul class="pagination">
						<li>
							<a href="index.php?p=news1" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li <?php echo $activeNews==1 ? "class='active'" : "" ?>><a href="index.php?p=news1">1</a></li>
						<li <?php echo $activeNews==2 ? "class='active'" : "" ?>><a href="index.php?p=news2">2</a></li>
						<li <?php echo $activeNews==3 ? "class='active'" : "" ?>><a href="index.php?p=news3">3</a></li>
						<li <?php echo $activeNews==4 ? "class='active'" : "" ?>><a href="index.php?p=news4">4</a></li>
						<li>
							<a href="index.php?p=news4" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
					
			</div>
			
			
			
<!-- END OF CONTENT -->
<!-- START OF ENDING TEMPLATE -->	
			
<?php require "php_template/content_after.php" ?>
