<?php
    $title = "Calculator";
    $css = "css/calc.css";
    $active = "calculator";
    require "php_template/content_before.php"; 
    require_once('php_template/config.php');
	require_once ('php_template/functions.php');
    
    if (!isLoggedIn()) {
    include ('php_template/not-logged.php');
	exit();
	}
?>

            <div class="middle-container">
                <h1><span class="h1-capital">C</span>ALCULATOR</h1>
                <div class="middle-content">
                    <div class = "row">
				<form name = "calculator" action = "http://paullol.hostoi.com/G12/calculator.php" method="post">
                            <div class="col-md-4 border-right">
                              
                                <h4>Champion selection</h4>
                                <select name="champions" id="btn-champ">
                                    <?php
						for($i=0; $i < 25; $i++){
						$sql = "SELECT Name FROM championstats LIMIT $i, 1";
						$itemList = $conn->query($sql);
							while($row = $itemList->fetch_assoc()) {
							echo "<option value =$i>" . $row['Name'] . "</option>";
							}
						}
					?>
                                </select>
                            </div>
   
                            <div class="col-md-8">
                                <h4 class="align">Please click to select your items</h4>
                                <div class="btn-group">
                                    <select name="items1" id="items1">
                                        <?php
						for($i=0; $i < 45; $i++){
						$sql = "SELECT Name FROM items LIMIT $i, 1";
						$itemList = $conn->query($sql);
							while($row = $itemList->fetch_assoc()) {
							echo "<option value =$i>" . $row['Name'] . "</option>";
							}
						}
					?>
                                    </select>
                                </div>

                                <div class="btn-group">
                                    <select name="items2" id="items2">
                                       <?php
						for($i=0; $i < 45; $i++){
						$sql = "SELECT Name FROM items LIMIT $i, 1";
						$itemList = $conn->query($sql);
							while($row = $itemList->fetch_assoc()) {
							echo "<option value =$i>" . $row['Name'] . "</option>";
							}
						}
					?>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="items3" id="items3">
                                        <?php
						for($i=0; $i < 45; $i++){
						$sql = "SELECT Name FROM items LIMIT $i, 1";
						$itemList = $conn->query($sql);
							while($row = $itemList->fetch_assoc()) {
							echo "<option value =$i>" . $row['Name'] . "</option>";
							}
						}
					?>
                                    </select>
                                </div>
                                <!--                    </div>-->
                                <br>
                                <!--                        <div class="row">-->
                                <div class="btn-group">
                                    <select name="items4" id="items4">
                                        <?php
						for($i=0; $i < 45; $i++){
						$sql = "SELECT Name FROM items LIMIT $i, 1";
						$itemList = $conn->query($sql);
							while($row = $itemList->fetch_assoc()) {
							echo "<option value =$i>" . $row['Name'] . "</option>";
							}
						}
					?>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="items5" id="items5">
                                       <?php
						for($i=0; $i < 45; $i++){
						$sql = "SELECT Name FROM items LIMIT $i, 1";
						$itemList = $conn->query($sql);
							while($row = $itemList->fetch_assoc()) {
							echo "<option value =$i>" . $row['Name'] . "</option>";
							}
						}
					?>
                                    </select>
                                </div>
                                <div class="btn-group">
                                    <select name="items6" id="items6">
                                        <?php
						for($i=0; $i < 45; $i++){
						$sql = "SELECT Name FROM items LIMIT $i, 1";
						$itemList = $conn->query($sql);
							while($row = $itemList->fetch_assoc()) {
							echo "<option value =$i>" . $row['Name'] . "</option>";
							}
						}
					?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="content">
							<?php
				// define variables and set to empty values
$champion = $item1 = $item2 = $item3 = $item4 = $item5 = $item6 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $champion = test_input($_POST["champions"]);
  $item1 = test_input($_POST["items1"]);
  $item2 = test_input($_POST["items2"]);
  $item3 = test_input($_POST["items3"]);
  $item4 = test_input($_POST["items4"]);
  $item5 = test_input($_POST["items5"]);
  $item6 = test_input($_POST["items6"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>
	<p>Your champion's base stats are:</p>  
				<?php
				if ($champion==null){
					echo 0;
				} else{
					$sql = "SELECT * FROM championstats LIMIT $champion, 1";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
						$basehp = $row["Hitpoints"]+$row[Hpinc]*17;
						echo 'You chose ' . $row["Name"] . "<br>";
						echo  $basehp . " hp, ";
						$basemana = $row["Mana"]+$row[Mpinc]*17;
						echo $basemana . " mana, ";
						$basedmg = $row["Attackdmg"];
						echo $basedmg. " AD, ";
						$baseas = $row["Attackspeed"];
						$baseasinc = $row["Asinc"];
						echo $baseas*(1+0.17*$baseasinc) . " AS, ";
						$basearmour = $row["Armour"]+17*$row["Arinc"];
						echo $basearmour . " armour, ";
						$basemr = $row["Magicresist"] + 17*$row["Mrinc"];
						echo $basemr . " mr. <br>";
					}
				}
				}
				?>
				
				<br>				
				<p>Total item stats are:</p>
				<?php
				 $itemdmg = 0;
				 $itemcrit = 0;
				 $itematkspeed = 0;
				 $itemap = 0;
				 $itemcdr = 0;
				 $itemmana = 0;
				 $itemhp = 0;
				 $itemarmour =  0;
				 $itemmr = 0;
				 $itemcost = 0;
				 

				$sql = "SELECT * FROM items LIMIT $item1, 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo 'Your first item choice was ' . $row["Name"] . "<br>";
						$itemdmg += $row["Damage"];
						$itemcrit += $row["Crit"];
						$itematkspeed += $row["Atkspeed"];
						$itemap += $row["Ap"];
						$itemcdr += $row["Cdr"];
						$itemmana += $row["Mana"];
						$itemhp += $row["Health"];
						$itemarmour += $row["Armour"];
						$itemmr += $row["Mr"];
						$itemcost += $row["Price"];
					}
				}
				
				$sql = "SELECT * FROM items LIMIT $item2, 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo 'Your second item choice was ' . $row["Name"] . "<br>";
						$itemdmg += $row["Damage"];
						$itemcrit += $row["Crit"];
						$itematkspeed += $row["Atkspeed"];
						$itemap += $row["Ap"];
						$itemcdr += $row["Cdr"];
						$itemmana += $row["Mana"];
						$itemhp += $row["Health"];
						$itemarmour += $row["Armour"];
						$itemmr += $row["Mr"];
						$itemcost += $row["Price"];
					}
				}				
				
				$sql = "SELECT * FROM items LIMIT $item3, 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo 'Your third item choice was ' . $row["Name"] . "<br>";
						$itemdmg += $row["Damage"];
						$itemcrit += $row["Crit"];
						$itematkspeed += $row["Atkspeed"];
						$itemap += $row["Ap"];
						$itemcdr += $row["Cdr"];
						$itemmana += $row["Mana"];
						$itemhp += $row["Health"];
						$itemarmour += $row["Armour"];
						$itemmr += $row["Mr"];
						$itemcost += $row["Price"];
					}
				}				

				$sql = "SELECT * FROM items LIMIT $item4, 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo 'Your fourth item choice was ' . $row["Name"] . "<br>";
						$itemdmg += $row["Damage"];
						$itemcrit += $row["Crit"];
						$itematkspeed += $row["Atkspeed"];
						$itemap += $row["Ap"];
						$itemcdr += $row["Cdr"];
						$itemmana += $row["Mana"];
						$itemhp += $row["Health"];
						$itemarmour += $row["Armour"];
						$itemmr += $row["Mr"];
						$itemcost += $row["Price"];
					}
				}

				$sql = "SELECT * FROM items LIMIT $item5, 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo 'Your fifth item choice was ' . $row["Name"] . "<br>";
						$itemdmg += $row["Damage"];
						$itemcrit += $row["Crit"];
						$itematkspeed += $row["Atkspeed"];
						$itemap += $row["Ap"];
						$itemcdr += $row["Cdr"];
						$itemmana += $row["Mana"];
						$itemhp += $row["Health"];
						$itemarmour += $row["Armour"];
						$itemmr += $row["Mr"];
						$itemcost += $row["Price"];
					}
				}

				$sql = "SELECT * FROM items LIMIT $item6, 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo 'Your sixth item choice was ' . $row["Name"] . "<br>";
						$itemdmg += $row["Damage"];
						$itemcrit += $row["Crit"];
						$itematkspeed += $row["Atkspeed"];
						$itemap += $row["Ap"];
						$itemcdr += $row["Cdr"];
						$itemmana += $row["Mana"];
						$itemhp += $row["Health"];
						$itemarmour += $row["Armour"];
						$itemmr += $row["Mr"];
						$itemcost += $row["Price"];
					}
				}

				echo $itemdmg . " AD, ". $itemcrit. "% crit, ".$itematkspeed."% AS, ".$itemap." AP, ".$itemcdr."% CDR, ". $itemmana." mana, ".$itemhp." hp, ".$itemarmour." armour, ".$itemmr." mr, for a total cost of ".$itemcost." gold.";
				echo '<br>';
				?>
				</div>


                        <!--Champbase is used to store values passed from the child window.-->
                        <br><br id="champbase">
                        <div id="ro" class="row">
						<?php
				$sql = "SELECT * FROM championstats LIMIT $champion, 1";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$qb = $row["Qbase"];
						$qad = $row["Qadscale"];
						$qap = $row["Qapscale"];
						$qcd = $row["Qcd"];
						$wb = $row["Wbase"];
						$wad = $row["Wadscale"];
						$wap = $row["Wapscale"];
						$wcd = $row["Wcd"];
						$eb = $row["Ebase"];
						$ead = $row["Eadscale"];
						$eap = $row["Eapscale"];
						$ecd = $row["Ecd"];
						$rb = $row["Rbase"];
						$rad = $row["Radscale"];
						$rap = $row["Rapscale"];
						$rcd = $row["Rcd"];
					}
				}
				?>
                            <!--The compute outcome will be displayed here. Damage per hit is the damage it does in the normal sense.
Damage over time takes into consideration of the ability cooldown and attack speed (for auto-attack)-->

                            <div id="SelfQ" class="col-md-3 col-sm-6">
                                <div id="content">
                                <h5>Bloodlust</h5>
 						<br>Damage per hit is <?php $qdmg = $qb+$qad*$ad+$qap*$itemap; echo $qdmg; ?>. 
						<br>The amage per second is <?php if ($champion == null) {$qdps = 0;} else {$qdps = $qdmg/$qcd;} echo $qdps ?>.
                                    </div>
                            </div>
                            <div id="SelfW" class="col-md-3 col-sm-6">
                                <h5>Mocking Shout</h5>
 						<br>Damage per hit is <?php $wdmg = $wb+$wad*$ad+$wap*$itemap; echo $wdmg; ?>.
						<br>Damage per second is <?php if ($champion == null) {$wdps = 0;} else {$wdps = $wdmg/$wcd;} echo $wdps ?>.
                            </div>
                            <div id="SelfE" class="col-md-3 col-sm-6">
                                <h5>Spinning Slash</h5> 
						<br>Damage per hit is <?php $edmg = $eb+$ead*$ad+$eap*$itemap; echo $edmg; ?>. 
						<br>Damage per second is <?php if ($champion == null) {$edps = 0;} else {$edps = $edmg/$ecd;} echo $edps ?>.
                            </div>
                            <div id="SelfR" class="col-md-3 col-sm-6">
                                <h5>Undying Rage</h5>
  						<br>Damage per hit is <?php $rdmg = $rb+$rad*$ad+$rap*$itemap; echo $rdmg; ?>. 
						<br>Damage per second is <?php if ($champion == null) {$rdps = 0;} else {$rdps = $rdmg/$rcd;} echo $rdps ?>.
                            </div>
                        </div>
                        <br>
                        <div id="row">
                            <div id="auto-attk" class="col-md-4">
                                <h5>Auto Attack</h5>
  						<br>Damage per hit is <?php $ad = $itemdmg+$basedmg; echo $ad ?>.
						<br>Damage per second is <?php $aadps = $ad *$baseas*(1+0.17*$baseasinc+0.01*$itematkspeed)*(1+0.01*$itemcrit); echo $aadps; ?>.
	                    <br>Total dps is <?php echo $aadps + $qdps + $wdps + $edps + $rdps; ?> </br>
							</div>		       
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-2"><button id="calculatestats" class="btn btn-default">Calculate it now!</button></div>
                        </div>
							</form>
                        <!--stats1 to stats 6 are used to hold item stats passed from child windows.-->
                        
                        <!--these id's here display their respective values-->
                </div>	
<?php require "php_template/content_after.php" ?>