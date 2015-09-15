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
echo 'Your champion\'s base stats are:';
echo '<br>';
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
echo '<br>';
echo 'Total item stats are:';
echo '<br>';
echo $itemdmg . " AD, ". $itemcrit. "% crit, ".$itematkspeed."% AS, ".$itemap." AP, ".$itemcdr."% CDR, ". $itemmana." mana, ".$itemhp." hp, ".$itemarmour." armour, ".$itemmr." mr, for a total cost of ".$itemcost." gold.";
echo '<br><br>';
?>