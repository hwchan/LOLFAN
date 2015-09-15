<?php
	$title = "Items";
	$css = "css/items.css";
	$active = "items";
	$js = "js/items.js";
	require "php_template/content_before.php"; 
?>

<!-- END OF BEGINNING TEMPLATE -->
<!-- START OF CONTENT -->



		  <div class="middle-container">
			<h1><span class="h1-capital">I</span>TEMS</h1>
			<div class="middle-content">
                <p> Items are objects that your champion can carry in order to boost their attributes ingame. A champion can only carry six items and a Trinket at a time, which makes the selection of items more meaningful. Items can be bought in game from your teams corresponding shop located at the spawn patform.</p>
                <hr class="hr">
				<h3> Filters </h3>
				<p> Here you can use a set of three dropdown menus to filter the items bellow based on the stats that they provide to your character.</p>
				<form action="http://webdevfoundations.net/scripts/formdemo.asp" method="POST" onchange="setDisplayed()" onsubmit="validateItemFilters()">
					<div class="btn-group">
					<select size="1" name="Filter_1" id="filter1">
					  <option value="item">Filter</option>
					  <option value="ad">Attack Damage</option>
					  <option value="crit">Critical Strike</option>
					  <option value="as">Attack Speed</option>
					  
					  <option value="ap">Ability Power</option>
					  <option value="cdr">Cooldown Reduction</option>
					  <option value="mp">Mana</option>

					  <option value="hp">Health</option>
					  <option value="ar">Armor</option>
					  <option value="mr">Magic Resist</option>
					</select>
					</div>
						
					<div class="btn-group">
					<select size="1" name="Filter_2" id="filter2">
					  <option value="item">Filter</option>
					  <option value="ad">Attack Damage</option>
					  <option value="crit">Critical Strike</option>
					  <option value="as">Attack Speed</option>

					  <option value="ap">Ability Power</option>
					  <option value="cdr">Cooldown Reduction</option>
					  <option value="mp">Mana</option>

					  <option value="hp">Health</option>
					  <option value="ar">Armor</option>
					  <option value="mr">Magic Resist</option>
					</select>
					</div>
						
					<div class="btn-group">
					<select size="1" name="Filter_3" id="filter3">
					  <option value="item">Filter</option>
					  <option value="ad">Attack Damage</option>
					  <option value="crit">Critical Strike</option>
					  <option value="as">Attack Speed</option>

					  <option value="ap">Ability Power</option>
					  <option value="cdr">Cooldown Reduction</option>
					  <option value="mp">Mana</option>

					  <option value="hp">Health</option>
					  <option value="ar">Armor</option>
					  <option value="mr">Magic Resist</option>
					</select>
					</div>
				</form>
            <!--This part is where the items will show up after the filters. Right now the icons do nothing but
                for the next milestone JS will be programmed into them so we can have a mouseover effect and it'll
                display individual item's stats-->

			<div class="items">
				<div class="item ad as">
					<a data-placement="bottom" title="Blade of the Ruined King" data-popover-content="#a1" data-toggle="popover" data-trigger="focus">
						<img alt="botrk" src="images/items/botrk.png" height="64" width="64">
					</a>
				</div>
					<!-- http://stackoverflow.com/questions/13202762/html-inside-twitter-bootstrap-popover -->
					<!-- Content for Popover #1 -->
					<div class="hidden" id="a1">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+40% <cite>Attack Speed</cite></p>
							<p class="bot-margin">+10% <cite>Life Steal</cite></p>
							<p><strong>Cost:</strong> 3200 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Basic attacks deal 5% of the target's current Health in bonus physical damage on hit.</p>
							<p class="bot-margin"><strong>Unique Active:</strong> Deals 15% of the target champions maximum health, heals you the same amount, and slows the target by 30% for 3 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #1 -->
					
				<div class="item ad crit">
					<a data-toggle="popover" title="Infinity Edge" data-popover-content="#a2" data-placement="bottom">
						<img alt="IE" src="images/items/ie.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #2 -->
					<div class="hidden" id="a2">
						<div class="popover-body">
							<p class="top-margin">+80 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+20% <cite>Critical Strike Chance</cite></p>
							<p><strong>Cost:</strong> 3800 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Critical strikes deal 250% damage instead of 200%.</p>
						</div>
					</div>
					<!-- End of Popover #2 -->
				<div class="item ap mr">
					<a data-toggle="popover" title="Abyssal Scepter" data-popover-content="#a3" data-placement="bottom">
					<img alt="Abyssal" src="images/items/abyssal.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #3 -->
					<div class="hidden" id="a3">
						<div class="popover-body">
							<p class="top-margin">+70 <cite>Ability Power</cite></p>
							<p class="bot-margin">+50 <cite>Magic Resist</cite></p>
							<p><strong>Cost:</strong> 3800 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Critical strikes deal 250% damage instead of 200%.</p>
						</div>
					</div>
					<!-- End of Popover #3 -->
				<div class="item ap cdr mp">
					<a data-toggle="popover" title="Athene's Unholy Grail" data-popover-content="#a4" data-placement="bottom">
					<img alt="Athene's" src="images/items/unholy_grail.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #4 -->
					<div class="hidden" id="a4">
						<div class="popover-body">
							<p class="top-margin">+60 <cite>Ability Power</cite></p>
							<p class="bot-margin">+25 <cite>Magic Resist</cite></p>
							<p class="bot-margin">+20% <cite>Cooldown Reduction</cite></p>
							<p class="bot-margin">+50% <cite>Base Mana Regen</cite></p>
							<p><strong>Cost:</strong> 2700 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Restores 15% of maximum Mana on kill or assist and restores 2% of missing Mana every 5 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #4 -->
				<div class="item ad">
					<a data-toggle="popover" title="BF Sword" data-popover-content="#a5" data-placement="bottom">
					<img alt="BF" src="images/items/bf_sword.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #5 -->
					<div class="hidden" id="a5">
						<div class="popover-body">
							<p class="top-margin">+50 <cite> Attack Damage</cite></p>
							<p><strong>Cost:</strong> 1550 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin">This item does not have any unique passive or active but it may be used to build into another item.</p>
						</div>
					</div>
					<!-- End of Popover #5 -->
				<div class="item as">
					<a data-toggle="popover" title="Berserker Greaves" data-popover-content="#a6" data-placement="bottom">
					<img alt="ASboots" src="images/items/berserkers_shoes.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #6 -->
					<div class="hidden" id="a6">
						<div class="popover-body">
							<p class="top-margin">+25% <cite>Attack Speed</cite></p>
							<p class="bot-margin">+50% <cite>Base Mana Regen</cite></p>
							<p><strong>Cost:</strong> 1000 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Enhanced Movement: +45 Movement Speed.</p>
						</div>
					</div>
					<!-- End of Popover #6 -->
				<div class="item ad">
					<a data-toggle="popover" title="Bilgewater Cutlass" data-popover-content="#a7" data-placement="bottom">
					<img alt="Cutlass" src="images/items/cutlass.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #7 -->
					<div class="hidden" id="a7">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+8% <cite>Life Steal</cite></p>
							<p><strong>Cost:</strong> 1400 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Active:</strong> Deals 100 magic damage and slows the target champion's Movement Speed by 25% for 2 seconds (90 second cooldown).</p>
						</div>
					</div>
					<!-- End of Popover #7 -->
				<div class="item ad hp">
					<a data-toggle="popover" title="Doran's Blade" data-popover-content="#a8" data-placement="bottom">
					<img alt="DoranBlade" src="images/items/dorans_blade.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #8 -->
					<div class="hidden" id="a8">
						<div class="popover-body">
							<p class="top-margin">+70 <cite>Health</cite></p>
							<p class="bot-margin">+3% <cite>Life Steal</cite></p>
							<p class="bot-margin">+7 <cite>Attack Damage</cite></p>
							<p><strong>Cost:</strong> 440 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin">This item does not have any unique passive or active but it may be used to build into another item.</p>
						</div>
					</div>
					<!-- End of Popover #8 -->
				<div class="item ar cdr mp">
					<a data-toggle="popover" title="Frozen Heart" data-popover-content="#a9" data-placement="bottom">
					<img alt="FrozenHeart" src="images/items/fh.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #9 -->
					<div class="hidden" id="a9">
						<div class="popover-body">
							<p class="top-margin">+100 <cite>Armor</cite></p>
							<p class="bot-margin">+20% <cite>Cooldown Reduction</cite></p>
							<p class="bot-margin">+400 <cite>Mana</cite></p>
							<p><strong>Cost:</strong> 2450 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Aura:</strong> Reduces the Attack Speed of nearby enemies by 15%.</p>
						</div>
					</div>
					<!-- End of Popover #9 -->
				<div class="item hp">
					<a data-toggle="popover" title="Giants Belt" data-popover-content="#a10" data-placement="bottom">
					<img alt="Giants_Belt" src="images/items/giants_belt.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #10 -->
					<div class="hidden" id="a10">
						<div class="popover-body">
							<p class="top-margin">+380 <cite>Health</cite></p>
							<p><strong>Cost:</strong> 1000 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin">This item does not have any unique passive or active but it may be used to build into another item.</p>
						</div>
					</div>
					<!-- End of Popover #10 -->
				<div class="item ad ap">
					<a data-toggle="popover" title="Hextech Gunblade" data-popover-content="#a11" data-placement="bottom">
					<img alt="Gunblade" src="images/items/hextech_gunblade.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #11 -->
					<div class="hidden" id="a11">
						<div class="popover-body">
							<p class="top-margin">+40 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+10% <cite>Life Steal</cite></p>
							<p class="bot-margin">+80 <cite>Ability Power</cite></p>
							<p><strong>Cost:</strong> 2450 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Basic attacks (on hit) and single-target spells against champions reduce the cooldown of this item by 3 seconds. And +20% Spell Vamp.</p>
						</div>
					</div>
					<!-- End of Popover #11 -->
				<div class="item ap">
					<a data-toggle="popover" title="Hextech Revolver" data-popover-content="#a12" data-placement="bottom">
					<img alt="HexRevolver" src="images/items/hextech_revolver.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #12 -->
					<div class="hidden" id="a12">
						<div class="popover-body">
							<p class="top-margin">+40 <cite>Ability Power</cite></p>
							<p><strong>Cost:</strong> 2450 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> +12% Spell Vamp.</p>
						</div>
					</div>
					<!-- End of Popover #12 -->
				<div class="item ap cdr ar">
					<a data-toggle="popover" title="Iceborn Gauntlet" data-popover-content="#a13" data-placement="bottom">
					<img alt="Iceborn" src="images/items/iceborn.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #13 -->
					<div class="hidden" id="a13">
						<div class="popover-body">
							<p class="top-margin">+60 <cite>Armor</cite></p>
							<p class="bot-margin">+30 <cite>Ability Power</cite></p>
							<p class="bot-margin">+10% <cite>Cooldown Reduction</cite></p>
							<p class="bot-margin">+500 <cite>Mana</cite></p>
							<p><strong>Cost:</strong> 2900 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> After using an ability, the next basic attack (on hit) deals bonus physical damage equal to 125% of base Attack Damage to enemies near the target, and creates a field around the target for 2 seconds that slows enemy Movement Speed by 30%.</p>
						</div>
					</div>
					<!-- End of Popover #13 -->
				<div class="item ad">
					<a data-toggle="popover" title="Last Whisper" data-popover-content="#a14" data-placement="bottom">
					<img alt="LW" src="images/items/lw.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #14 -->
					<div class="hidden" id="a14">
						<div class="popover-body">
							<p class="top-margin">+40 <cite>Attack Damage</cite></p>
							<p><strong>Cost:</strong> 2300 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Physical damage ignores 35% of the target's Armor (applies before Armor Penetration).</p>
						</div>
					</div>
					<!-- End of Popover #14 -->
				<div class="item ap hp">
					<a data-toggle="popover" title="Liandry's Torment" data-popover-content="#a15" data-placement="bottom">
					<img alt="Liandrys" src="images/items/liandrys.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #15 -->
					<div class="hidden" id="a15">
						<div class="popover-body">
							<p class="top-margin">+50 <cite>Ability Power</cite></p>
							<p class="bot-margin">+500 <cite>Health</cite></p>
							<p><strong>Cost:</strong> 2900 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Dealing spell damage applies a damage-over-time effect for 3 seconds that deals bonus magic damage equal to 2% of the target's current Health per second.</p>
						</div>
					</div>
					<!-- End of Popover #15 -->
				<div class="item ap">	
					<a data-toggle="popover" title="Lichbane" data-popover-content="#a16" data-placement="bottom">
					<img alt="LichBane" src="images/items/lich_bane.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #16 -->
					<div class="hidden" id="a16">
						<div class="popover-body">
							<p class="top-margin">+80 <cite>Ability Power</cite></p>
							<p class="bot-margin">+5% <cite>Movement Speed</cite></p>
							<p class="bot-margin">+500 <cite>Mana</cite></p>
							<p><strong>Cost:</strong> 3000 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> After using an ability, the next basic attack deals 75% Base Attack Damage (+50% of Ability Power) bonus magic damage on hit (1.5 second cooldown).</p>
						</div>
					</div>
					<!-- End of Popover #16 -->
				<div class="item hp mr cdr">
					<a data-toggle="popover" title="Locket of The Iron Solari" data-popover-content="#a17" data-placement="bottom">
					<img alt="Solari" src="images/items/locket.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #17 -->
					<div class="hidden" id="a17">
						<div class="popover-body">
							<p class="top-margin">+400 <cite>Health</cite></p>
							<p class="bot-margin">+20 <cite>Magic Resistance</cite></p>
							<p class="bot-margin">+10% <cite>Cooldown Reduction</cite></p>
							<p><strong>Cost:</strong> 2800 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Active:</strong> Grants a shield to nearby allies for 5 seconds that absorbs up to 50 damage.</p>
							<p class="bot-margin"><strong >Unique Aura:</strong> Grants nearby allies +20 Magic Resist and +75% Base Health Regen.</p>
						</div>
					</div>
					<!-- End of Popover #17 -->
				<div class="item mp ad">
					<a data-toggle="popover" title="Manamune" data-popover-content="#a18" data-placement="bottom">
					<img alt="Manamune" src="images/items/manamune.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #18 -->
					<div class="hidden" id="a18">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+250 <cite>Mana</cite></p>
							<p class="bot-margin">+25% <cite>Base Mana Regen </cite></p>
							<p><strong>Cost:</strong> 2200 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Grants bonus Attack Damage equal to 2% of maximum Mana. Also grants +4 maximum Mana (max +750 Mana) for each basic attack, spell cast, and Mana expenditure</p>
							<p>Transforms into Muramana at +750 Mana.</p>
						</div>
					</div>
					<!-- End of Popover #18 -->
				<div class="item ad mr">
					<a data-toggle="popover" title="Maw of Malmortius" data-popover-content="#a19" data-placement="bottom">
					<img alt="Maw" src="images/items/malmortius.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #19 -->
					<div class="hidden" id="a19">
						<div class="popover-body">
							<p class="top-margin">+60 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+40 <cite>Magic Resist</cite></p>
							<p><strong>Cost:</strong> 3200 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Grants +1 Attack Damage for every 2% of missing Health, up to a maximum of 35 Attack Damage. Upon taking magic damage that would reduce Health below 30%, grants a shield that absorbs 400 magic damage for 5 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #19 -->
				<div class="item cdr mr mp">
					<a data-toggle="popover" title="Mikael's Crucible" data-popover-content="#a20" data-placement="bottom">
					<img alt="Mikael's" src="images/items/crucible.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #20 -->
					<div class="hidden" id="a20">
						<div class="popover-body">
							<p class="top-margin">+40 <cite>Magic Resist</cite></p>
							<p class="bot-margin">+10% <cite>Cooldown Reduction</cite></p>
							<p class="bot-margin">+100% <cite>Base Mana Regen </cite></p>
							<p><strong>Cost:</strong> 2450 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Restores 2% of missing Mana every 5 seconds.</p>
							<p class="bot-margin"><strong >Unique Active:</strong> Removes all stuns, roots, taunts, fears, silences, and slows on an allied champion and heals that champion for 150.</p>
						</div>
					</div>
					<!-- End of Popover #20 -->
				<div class="item ap cdr mp">
					<a data-toggle="popover" title="Morellonomicon" data-popover-content="#a21" data-placement="bottom">
					<img alt="Morellonomicon" src="images/items/morello.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #21 -->
					<div class="hidden" id="a21">
						<div class="popover-body">
							<p class="top-margin">+80 <cite>Ability Power</cite></p>
							<p class="bot-margin">+20% <cite>Cooldown Reduction</cite></p>
							<p class="bot-margin">+100% <cite>Base Mana Regen </cite></p>
							<p><strong>Cost:</strong> 2300 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Dealing magic damage to enemy champions below 40% Health inflicts Grievous Wounds for 4 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #21 -->
				<div class="item ap">	
					<a data-toggle="popover" title="Needlessly Large Rod" data-popover-content="#a22" data-placement="bottom">
					<img alt="Rod" src="images/items/large_rod.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #22 -->
					<div class="hidden" id="a22">
						<div class="popover-body">
							<p class="top-margin">+80 <cite>Ability Power</cite></p>
							<p><strong>Cost:</strong> 1600 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin">This item does not have any unique passive or active but it may be used to build into another item.</p>
						</div>
					</div>
					<!-- End of Popover #22 -->
				<div class="item mr">
					<a data-toggle="popover" title="Negatron Cloak" data-popover-content="#a23" data-placement="bottom">
					<img alt="Negatron" src="images/items/negatron.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #23 -->
					<div class="hidden" id="a23">
						<div class="popover-body">
							<p class="top-margin">+45 <cite>Magic Resist</cite></p>
							<p><strong>Cost:</strong> 850 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin">This item does not have any unique passive or active but it may be used to build into another item.</p>
						</div>
					</div>
					<!-- End of Popover #23 -->
				<div class="item ar">
					<a data-toggle="popover" title="Ninja Tabi" data-popover-content="#a24" data-placement="bottom">
					<img alt="Tabi" src="images/items/tabi_shoes.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #24 -->
					<div class="hidden" id="a24">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Armor</cite></p>
							<p><strong>Cost:</strong> 1000 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Blocks 10% of the damage from basic attacks and gives the champion +45 Movement Speed.</p>
						</div>
					</div>
					<!-- End of Popover #24 -->
				<div class="item ad hp">
					<a data-toggle="popover" title="Phage" data-popover-content="#a25" data-placement="bottom">
					<img alt="Phage" src="images/items/phage.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #25 -->
					<div class="hidden" id="a25">
						<div class="popover-body">
							<p class="top-margin">+200 <cite>Health</cite></p>
							<p class="bot-margin">+20 <cite>Attack Damage</cite></p>
							<p><strong>Cost:</strong> 1325 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Basic attacks grant 20 Movement Speed for 2 seconds. Kills grant 60 Movement Speed instead. This Movement Speed bonus is halved for ranged champions.</p>
						</div>
					</div>
					<!-- End of Popover #25 -->
				<div class="item as crit">
					<a data-toggle="popover" title="Phantom Dancer" data-popover-content="#a26" data-placement="bottom">
					<img alt="PD" src="images/items/pd.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #26 -->
					<div class="hidden" id="a26">
						<div class="popover-body">
							<p class="top-margin">+20% <cite>Attack Speed</cite></p>
							<p class="bot-margin">+35% <cite>Critical Strike Chance</cite></p>
							<p class="bot-margin">+5% <cite>Movement Speed</cite></p>
							<p><strong>Cost:</strong> 2800 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Champion can move through units.</p>
						</div>
					</div>
					<!-- End of Popover #26 -->
				<div class="item ap">
					<a data-toggle="popover" title="Rabadon's Deathcap" data-popover-content="#a27" data-placement="bottom">
					<img alt="Rabadon's" src="images/items/deathcap.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #27 -->
					<div class="hidden" id="a27">
						<div class="popover-body">
							<p class="top-margin">+120 <cite>Ability Power</cite></p>
							<p><strong>Cost:</strong> 3300 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Increases Ability Power by 30%.</p>
						</div>
					</div>
					<!-- End of Popover #27 -->
				<div class="item hp ar">
					<a data-toggle="popover" title="Randuin's Omen" data-popover-content="#a28" data-placement="bottom">
					<img alt="Randuin" src="images/items/randuins.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #28 -->
					<div class="hidden" id="a28">
						<div class="popover-body">
							<p class="top-margin">+500 <cite>Health</cite></p>
							<p class="bot-margin">+70 <cite>Armor</cite></p>
							<p><strong>Cost:</strong> 2850 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> When hit by basic attacks, reduces the attacker's Attack Speed by 15%.</p>
							<p class="bot-margin"><strong >Unique Active:</strong> Slows the Movement Speed of nearby enemy units by 35% for 2 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #28 -->
				<div class="item ad">
					<a data-toggle="popover" title="Ravenous Hydra (Melee Only)" data-popover-content="#a29" data-placement="bottom">
					<img alt="Hydra" src="images/items/hydra.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #29 -->
					<div class="hidden" id="a29">
						<div class="popover-body">
							<p class="top-margin">+75 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+12% <cite>Life Steal</cite></p>
							<p class="bot-margin">+100% <cite>Base Health Regen</cite></p>
							<p><strong>Cost:</strong> 3300 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Basic attacks deal 20% to 60% of total Attack Damage as bonus physical damage to enemies near the target on hit</p>
							<p class="bot-margin"><strong >Unique Active:</strong> Deals 60% to 100% of total Attack Damage as physical damage to nearby enemy units.</p>
						</div>
					</div>
					<!-- End of Popover #29 -->
				<div class="item hp ap">
					<a data-toggle="popover" title="Rod of Ages" data-popover-content="#a30" data-placement="bottom">
					<img alt="RoA" src="images/items/rod.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #30 -->
					<div class="hidden" id="a30">
						<div class="popover-body">
							<p class="top-margin">+450 <cite>Health</cite></p>
							<p class="bot-margin">+450 <cite>Mana</cite></p>
							<p class="bot-margin">+60 <cite>Ability Power</cite></p>
							<p><strong>Cost:</strong> 2800 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Passive:</strong> B Grants +20 Health, +20 Mana, and +2 Ability Power per stack (max +200 Health, +200 Mana, and +20 Ability Power). Grants 1 stack per minute (max 10 stacks).</p>
							<p class="bot-margin"><strong >Unique Passive:</strong> Upon leveling up, restores 150 Health and 200 Mana over 8 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #30 -->
				<div class="item as">
					<a data-toggle="popover" title="Runaan's Hurricane (Ranged Only)" data-popover-content="#a31" data-placement="bottom">
					<img alt="Runaan's" src="images/items/runaans.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #31 -->
					<div class="hidden" id="a31">
						<div class="popover-body">
							<p class="top-margin">+70% <cite>Attack Speed</cite></p>
							<p><strong>Cost:</strong> 2400 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> When basic attacking, bolts are fired at up to 2 enemies near the target, each dealing 10 (+50% of Attack Damage) physical damage. These bolts apply on-hit effects.</p>
						</div>
					</div>
					<!-- End of Popover #31 -->
				<div class="item ap hp">
					<a data-toggle="popover" title="Rylai's Crystal Scepter" data-popover-content="#a32" data-placement="bottom">
					<img alt="Rylai's" src="images/items/rylais.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #32 -->
					<div class="hidden" id="a32">
						<div class="popover-body">
							<p class="top-margin">+400 <cite>Health</cite></p>
							<p class="bot-margin">+100 <cite>Ability Power</cite></p>
							<p><strong>Cost:</strong> 2400 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Dealing spell damage slows the target's Movement Speed by 35% for 1.5 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #32 -->
				<div class="item ap">
					<a data-toggle="popover" title="Sheen" data-popover-content="#a33" data-placement="bottom">
					<img alt="Sheen" src="images/items/sheen.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #33 -->
					<div class="hidden" id="a33">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Ability Power</cite></p>
							<p class="bot-margin">+200 <cite>Mana</cite></p>
							<p><strong>Cost:</strong> 1200 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> After using an ability, the next basic attack deals bonus physical damage equal to 100% base Attack Damage on hit (1.5 seconds cooldown).</p>
						</div>
					</div>
					<!-- End of Popover #33 -->
				<div class="item">
					<a data-toggle="popover" title="Sorcerer's Shoes" data-popover-content="#a34" data-placement="bottom">
					<img alt="Sorcboots" src="images/items/sorc_shoes.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #34 -->
					<div class="hidden" id="a34">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Magic Penetration</cite></p>
							<p><strong>Cost:</strong> 1000 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Gives the champion +45 Movement Speed.</p>
						</div>
					</div>
					<!-- End of Popover #34 -->
				<div class="item hp mr">
					<a data-toggle="popover" title="Spirit Visage" data-popover-content="#a35" data-placement="bottom">
					<img alt="Visage" src="images/items/spirit.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #35 -->
					<div class="hidden" id="a35">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Ability Power</cite></p>
							<p class="bot-margin">+200 <cite>Mana</cite></p>
							<p><strong>Cost:</strong> 1200 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> After using an ability, the next basic attack deals bonus physical damage equal to 100% base Attack Damage on hit (1.5 seconds cooldown).</p>
						</div>
					</div>
					<!-- End of Popover #35 -->
				<div class="item hp ar">
					<a data-toggle="popover" title="Sunfire Cape" data-popover-content="#a36" data-placement="bottom">
					<img alt="Sunfire" src="images/items/sunfire.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #36 -->
					<div class="hidden" id="a36">
						<div class="popover-body">
							<p class="top-margin">+450 <cite>Health</cite></p>
							<p class="bot-margin">+45 <cite>Armor</cite></p>
							<p><strong>Cost:</strong> 2600 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Deals 25 (+1 per champion level) magic damage per second to nearby enemies.</p>
						</div>
					</div>
					<!-- End of Popover #36 -->
				<div class="item ad cdr hp">	
					<a data-toggle="popover" title="The Black Cleaver" data-popover-content="#a37" data-placement="bottom">
					<img alt="BlackCleaver" src="images/items/black_cleaver.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #37 -->
					<div class="hidden" id="a37">
						<div class="popover-body">
							<p class="top-margin">+200 <cite>Health</cite></p>
							<p class="bot-margin">+50 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+10% <cite>Cooldown Reduction</cite></p>
							<p><strong>Cost:</strong> 3000 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> +10 Armor Penetration</p>
							<p class="bot-margin"><strong >Passive:</strong> Dealing physical damage to an enemy champion reduces their Armor by 5% for 4 seconds (stacks up to 5 times, up to 25%).</p>
						</div>
					</div>
					<!-- End of Popover #37 -->
				<div class="item ad">
					<a data-toggle="popover" title="The Bloodthirster" data-popover-content="#a38" data-placement="bottom">
					<img alt="BT" src="images/items/bloodthirster.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #38 -->
					<div class="hidden" id="a38">
						<div class="popover-body">
							<p class="top-margin">+80 <cite>Attack Damage</cite></p>
							<p><strong>Cost:</strong> 3500 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Your basic attacks can now overheal you. Excess life is stored as a shield that can block 50-350 damage, based on champion level and gives 20% life steal.</p>
						</div>
					</div>
					<!-- End of Popover #38 -->
				<div class="item ad cdr">	
					<a data-toggle="popover" title="The Brutalizer" data-popover-content="#a39" data-placement="bottom">
					<img alt="Brutaliser" src="images/items/brutalizer.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #39 -->
					<div class="hidden" id="a39">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Attack Damage</cite></p>
							<p><strong>Cost:</strong> 3500 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> +10% Cooldown Reduction and +10 Armor Penetration.</p>
						</div>
					</div>
					<!-- End of Popover #39 -->
				<div class="item ar">
					<a data-toggle="popover" title="Thornmail" data-popover-content="#a40" data-placement="bottom">
					<img alt="Thornmail" src="images/items/thornmail.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #40 -->
					<div class="hidden" id="a40">
						<div class="popover-body">
							<p class="top-margin">+100 <cite>Armor</cite></p>
							<p><strong>Cost:</strong> 2100 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Upon being hit by a basic attack, returns 30% of the incoming damage (before being reduced by defenses) to the attacker as magic damage.</p>
						</div>
					</div>
					<!-- End of Popover #40 -->
				<div class="item ad hp ap mp as crit">
					<a data-toggle="popover" title="Trinity Force" data-popover-content="#a41" data-placement="bottom">
					<img alt="TriForce" src="images/items/trinity.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #41 -->
					<div class="hidden" id="a41">
						<div class="popover-body">
							<p class="top-margin">+30 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+30 <cite>Ability Power</cite></p>
							<p class="bot-margin">+30% <cite>Attack Speed</cite></p>
							<p class="bot-margin">+10% <cite>Critical Strike Chance</cite></p>
							<p class="bot-margin">+8% <cite>Movement Speed</cite></p>
							<p class="bot-margin">+250 <cite>Health</cite></p>
							<p class="bot-margin">+200 <cite>Mana</cite></p>
							<p><strong>Cost:</strong> 3703 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Basic attacks grant 20 Movement Speed for 2 seconds. Kills grant 60 Movement Speed instead. This Movement Speed bonus is halved for ranged champions.</p>
						</div>
					</div>
					<!-- End of Popover #41 -->
				<div class="item ad">
					<a data-toggle="popover" title="Vampiric Scepter" data-popover-content="#a42" data-placement="bottom">
					<img alt="VampSceptre" src="images/items/vampiric.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #42 -->
					<div class="hidden" id="a42">
						<div class="popover-body">
							<p class="top-margin">+10 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+8% <cite>Life Steal</cite></p>
							<p><strong>Cost:</strong> 800 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin">This item does not have any unique passive or active but it may be used to build into another item.</p>
						</div>
					</div>
					<!-- End of Popover #42 -->
				<div class="item ap">
					<a data-toggle="popover" title="Void Staff" data-popover-content="#a43" data-placement="bottom">
					<img alt="VoidStaff" src="images/items/void_staff.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #43 -->
					<div class="hidden" id="a43">
						<div class="popover-body">
							<p class="top-margin">+70 <cite>Ability Power</cite></p>
							<p><strong>Cost:</strong> 2295 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Magic damage ignores 35% of the target's Magic Resist (applies before Magic Penetration).</p>
						</div>
					</div>
					<!-- End of Popover #43 -->
				<div class="item hp">
					<a data-toggle="popover" title="Warmog's Armor" data-popover-content="#a44" data-placement="bottom">
					<img alt="Warmog" src="images/items/warmogs.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #44 -->
					<div class="hidden" id="a44">
						<div class="popover-body">
							<p class="top-margin">+800 <cite>Health</cite></p>
							<p><strong>Cost:</strong> 2500 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Restores 1% of maximum Health every 5 seconds. Health restore increases to 3% of maximum Health if damage hasn't been taken within 8 seconds.</p>
						</div>
					</div>
					<!-- End of Popover #44 -->
				<div class="item as crit">
					<a data-toggle="popover" title="Zeal" data-popover-content="#a45" data-placement="bottom">
					<img alt="Zeal" src="images/items/zeal.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #45 -->
					<div class="hidden" id="a45">
						<div class="popover-body">
							<p class="top-margin">+20% <cite>Attack Speed</cite></p>
							<p class="bot-margin">+10% <cite>Critical Strike Chance</cite></p>
							<p class="bot-margin">+5% <cite>Movement Speed</cite></p>
							<p><strong>Cost:</strong> 1100 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin">This item does not have any unique passive or active but it may be used to build into another item.</p>
						</div>
					</div>
					<!-- End of Popover #45 -->
				<div class="item ad as cdr">
					<a data-toggle="popover" title="Zephyr" data-popover-content="#a46" data-placement="bottom">
					<img alt="Zephyr" src="images/items/zephyr.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #46 -->
					<div class="hidden" id="a46">
						<div class="popover-body">
							<p class="top-margin">+25 <cite>Attack Damage</cite></p>
							<p class="bot-margin">+50% <cite>Attack Speed</cite></p>
							<p class="bot-margin">+10% <cite>Movement Speed</cite></p>
							<p class="bot-margin">+10% <cite>Cooldown Reduction</cite></p>
							<p><strong>Cost:</strong> 2850 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Reduces the duration of stuns, slows, taunts, fears, silences, blinds, polymorphs, and immobilizes by 35%.</p>
						</div>
					</div>
					<!-- End of Popover #46 -->
				<div class="item ap ar">
					<a data-toggle="popover" title="Zhonya's Hourglass" data-popover-content="#a47" data-placement="bottom">
					<img alt="Zhonya's" src="images/items/zhonya.png" height = "64" width = "64"></a></div>
					<!-- Content for Popover #47 -->
					<div class="hidden" id="a47">
						<div class="popover-body">
							<p class="top-margin">+120 <cite>Ability Power</cite></p>
							<p class="bot-margin">+50 <cite>Armor</cite></p>
							<p><strong>Cost:</strong> 3300 gold <img src="images/items/gold.png" alt="gold" width="20" height="20"></p>  
							<p class="bot-margin"><strong >Unique Passive:</strong> Champion becomes invulnerable and untargetable for 2.5 seconds, but is unable to move, attack, cast spells, or use items during this time (90 second cooldown).</p>
						</div>
					</div>
					<!-- End of Popover #47 -->
			</div>
			                <hr class="hr-white hrsmall">
			</div>		
			
			
			
<!-- END OF CONTENT -->
<!-- START OF ENDING TEMPLATE -->	
			
<?php require "php_template/content_after.php" ?>
