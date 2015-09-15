/*These will update the ability images in parent window and pass item stats back to parent window*/
document.getElementById("I1").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Blade_of_the_Ruined_King_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="2000400000000000000000";
};
document.getElementById("I2").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Infinity_Edge_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="8020000000000000000000";
};
document.getElementById("I3").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Berserker's_Greaves_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000250000000000000000";
};
document.getElementById("I4").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Frozen_Heart_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000000002040000010000";
};
document.getElementById("I5").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Randuin's_Omen_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000000000000050007000";
};
document.getElementById("I6").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Spirit_Visage_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000000001000040000055";
};
document.getElementById("I7").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Rod_of_Ages_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000000800065065000000";
};
document.getElementById("I8").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Rabadon's_Deathcap_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000001200000000000000";
};
document.getElementById("I9").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Rylai's_Crystal_Scepter_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000001000000040000000";
};
document.getElementById("I10").onclick = function(){ 
	self.close();
	window.opener.document.getElementById("item"+window.name.charAt(4)).src="images/items/Iceborn_Gauntlet_item.png";
	window.opener.document.getElementById("stats"+window.name.charAt(4)).innerHTML="0000000301050000006000";
};