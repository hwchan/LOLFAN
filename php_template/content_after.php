				<?php require "footer.php" ?>
			</div>
		</div><!-- End of middle container -->
		
		<?php require "modal.php" ?>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/base.js"></script>
		<?php
			if(isset($js)) {
				echo "<script src=$js></script>";
			}
		?>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<!--script src="js/ie10-viewport-bug-workaround.js"></script-->

	</body>
</html>