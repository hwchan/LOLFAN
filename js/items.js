//$(function () {
  //$('[data-toggle="popover"]').popover({ trigger: "hover" })
//})

// Adapted from http://stackoverflow.com/questions/13202762/html-inside-twitter-bootstrap-popover
$(function(){
    $("[data-toggle=popover]").popover({
		trigger: "hover",
        html : true,
        content: function() {
          var content = $(this).attr("data-popover-content");
          return $(content).children(".popover-body").html();
        },
        title: function() {
          var title = $(this).attr("data-popover-content");
          return $(title).children(".popover-heading").html();
        }
    });
});

function setDisplayed(){
	var filter1 = document.getElementById("filter1").value;	// FILTER 1
	var filter2 = document.getElementById("filter2").value;	// FILTER 2
	var filter3 = document.getElementById("filter3").value;	// FILTER 3
	$(".item").show()
	$(".item:not(."+filter1+")").hide()
	$(".item:not(."+filter2+")").hide()
	$(".item:not(."+filter3+")").hide()
}



// Check all the filter inputs to see if they're valid
function validateItemFilters(){
	var filter1 = document.getElementById("filter1").value;	// FILTER 1
	var filter2 = document.getElementById("filter2").value;	// FILTER 2
	var filter3 = document.getElementById("filter3").value;	// FILTER 3
	
	if(validateFilter(filter1) && validateFilter(filter2) && validateFilter(filter3)){
		return true;
	}
	return false;
}

// See if the input is a filter
function validateFilter(input){
	// Possible filters:
	var filterTypes = ["null", "attack damage", "critical strike", "attack speed", 
		"ability power", "cooldown", "mana", "health", "armour", "magic resist"]
	
	// Check each filter
	for( i=0; i<filterTypes.length; i++){
		if(input == filterTypes[i]){
			return true;
		}
	}
	return false;
}


