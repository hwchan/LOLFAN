<?php
    $title = "Calculator";
    $css = "css/calc.css";
    $active = "calculator";
    require "php_template/content_before.php"; 
    require_once('php_template/config.php');
	require_once ('php_template/functions.php');
	$servername = "mysql10.000webhost.com";
	$username = "a8448796_paullol";
	$password = "paul123";
	$dbname = "a8448796_paullol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    if (!isLoggedIn()) {
    include ('php_template/not-logged.php');
	exit();
	}
?>

            <div class="middle-container">
                <h1><span class="h1-capital">C</span>ALCULATOR</h1>
                <div class="middle-content">
                    <form name = "calculator" action = "http://paullol.hostoi.com/G12/calculator.php" method="post">
                    <?php include 'php_template/first-row.php' ?>
                        <!--Champbase is used to store values passed from the child window.-->
                        <br>
                    <?php include 'php_template/calculations.php' ?>
                    <?php include 'php_template/second-row.php' ?>
                        <br>
                    <?php include 'php_template/third-row.php' ?>
                    </form>
                    </div>
							
                        <!--stats1 to stats 6 are used to hold item stats passed from child windows.-->
                        
                        <!--these id's here display their respective values-->	
				<?php require "php_template/content_after.php" ?>