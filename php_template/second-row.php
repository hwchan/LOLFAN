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
            <h5>First Ability</h5>
            <br>Damage per hit is <?php $qdmg = $qb+$qad*$ad+$qap*$itemap; echo $qdmg; ?>. 
            <br>Damage per second is <?php if ($champion == null) {$qdps = 0;} else {$qdps = $qdmg/$qcd;} echo $qdps ?>.
        </div>
    </div>
    <div id="SelfW" class="col-md-3 col-sm-6">
        <h5>Second Ability</h5>
        <br>Damage per hit is <?php $wdmg = $wb+$wad*$ad+$wap*$itemap; echo $wdmg; ?>.
        <br>Damage per second is <?php if ($champion == null) {$wdps = 0;} else {$wdps = $wdmg/$wcd;} echo $wdps ?>.
    </div>
    <div id="SelfE" class="col-md-3 col-sm-6">
        <h5>Third Ability</h5> 
        <br>Damage per hit is <?php $edmg = $eb+$ead*$ad+$eap*$itemap; echo $edmg; ?>. 
        <br>Damage per second is <?php if ($champion == null) {$edps = 0;} else {$edps = $edmg/$ecd;} echo $edps ?>.
    </div>
    <div id="SelfR" class="col-md-3 col-sm-6">
        <h5>Ultimate Ability</h5>
        <br>Damage per hit is <?php $rdmg = $rb+$rad*$ad+$rap*$itemap; echo $rdmg; ?>. 
        <br>Damage per second is <?php if ($champion == null) {$rdps = 0;} else {$rdps = $rdmg/$rcd;} echo $rdps ?>.
    </div>
</div>