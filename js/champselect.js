document.getElementById("TryndamereSelect").onclick = function(){
	self.close();
/* This is the part I hard code champion data. The textstring gives, in that order and number of digits: health(4) crit strike chance (4)/100%
mana(4) damage (6)/1000 attackspeed(3)/1000 attackspeed increase%(3)/10 armour(5)/1000 magic resist(4)/100 Q cooldown (2) Q base damage(3)
Q ad scaling(3) Q ap scaling(3) W cooldown(3) W base damage(3) W ad scaling (3) W ap scaling (3) E cooldown(3) E base damage (3) E ad scaling (3)
E ap scaling(3) R cooldown(3) R base damage (3) R ad scaling (3) R ap scaling(3)
*/	
	window.opener.document.getElementById("champbase").innerHTML="2292350100115776670493768085335120000000001400000000009000120100090000000000";
	window.opener.document.getElementById("imgselect").src="champions/_Tryndamere/images/Icon.png";
	window.opener.document.getElementById("SelfP").src="champions/_Tryndamere/images/P.png";
	window.opener.document.getElementById("SelfQ").src="champions/_Tryndamere/images/Q.png";
	window.opener.document.getElementById("SelfW").src="champions/_Tryndamere/images/W.png";
	window.opener.document.getElementById("SelfE").src="champions/_Tryndamere/images/E.png";
	window.opener.document.getElementById("SelfR").src="champions/_Tryndamere/images/R.png";
	window.opener.document.getElementById("passiveability").innerHTML="Battle Fury";
	window.opener.document.getElementById("Qability").innerHTML="Bloodlust";
	window.opener.document.getElementById("Wability").innerHTML="Mocking Shout";
	window.opener.document.getElementById("Eability").innerHTML="Spinning Slash";
	window.opener.document.getElementById("Rability").innerHTML="Undying Rage";
};
document.getElementById("AnnieSelect").onclick = function(){
	self.close();
	window.opener.document.getElementById("champbase").innerHTML="1804001184095035579231872203000042000000800825000008510060000020080425000080";
	window.opener.document.getElementById("imgselect").src="champions/_Annie/images/Icon.png";
	window.opener.document.getElementById("SelfP").src="champions/_Annie/images/P.png";
	window.opener.document.getElementById("SelfQ").src="champions/_Annie/images/Q.png";
	window.opener.document.getElementById("SelfW").src="champions/_Annie/images/W.png";
	window.opener.document.getElementById("SelfE").src="champions/_Annie/images/E.png";
	window.opener.document.getElementById("SelfR").src="champions/_Annie/images/R.png";
	window.opener.document.getElementById("passiveability").innerHTML="Pyromania";
	window.opener.document.getElementById("Qability").innerHTML="Disintegrate";
	window.opener.document.getElementById("Wability").innerHTML="Incinerate";
	window.opener.document.getElementById("Eability").innerHTML="Molten Shield";
	window.opener.document.getElementById("Rability").innerHTML="Summon: Tibbers";
};
document.getElementById("AmumuSelect").onclick = function(){
	self.close();
	window.opener.document.getElementById("champbase").innerHTML="2041000967117984638371796445335082800000700108400002006175000050110350000080";
	window.opener.document.getElementById("imgselect").src="champions/_Amumu/images/Icon.png";
	window.opener.document.getElementById("SelfP").src="champions/_Amumu/images/P.png";
	window.opener.document.getElementById("SelfQ").src="champions/_Amumu/images/Q.png";
	window.opener.document.getElementById("SelfW").src="champions/_Amumu/images/W.png";
	window.opener.document.getElementById("SelfE").src="champions/_Amumu/images/E.png";
	window.opener.document.getElementById("SelfR").src="champions/_Amumu/images/R.png";
	window.opener.document.getElementById("SelfR").src="champions/_Amumu/images/R.png";
	window.opener.document.getElementById("passiveability").innerHTML="Cursed Touch";
	window.opener.document.getElementById("Qability").innerHTML="Bandage Toss";
	window.opener.document.getElementById("Wability").innerHTML="Despair";
	window.opener.document.getElementById("Eability").innerHTML="Tantrum";
	window.opener.document.getElementById("Rability").innerHTML="Curse of the Sad Mummy";
};
document.write(window.name);