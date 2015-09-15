<div class="row">
    <div id="auto-attk" class="col-md-4">
        <h5>Auto Attack</h5>
        <br>Damage per hit is <?php $ad = $itemdmg+$basedmg; echo $ad ?>.
        <br>Damage per second is <?php $aadps = $ad *$baseas*(1+0.17*$baseasinc+0.01*$itematkspeed)*(1+0.01*$itemcrit); echo $aadps; ?>.
        <br>Total dps is <?php echo $aadps + $qdps + $wdps + $edps + $rdps; ?> </br>
</div>		       
<div class="col-md-6"></div>
<div class="col-md-2"><button id="calculatestats" class="btn btn-default">Calculate it now!</button></div>
</div>