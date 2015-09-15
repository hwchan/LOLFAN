$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//Toggle the registration inputs when ready
$(function () {
  registerToggle();
})

//Toggles the registration inputs
function registerToggle(){
	var display = document.getElementById("registerArea").style.display;
	//Hide registration only div
	if(display == "inline" || display == "" || display == null){
		document.getElementById("registerArea").style.display = "none";
		//document.getElementById("submitButton").value = "Sign in";
		document.getElementById("registerLink").innerHTML = "Register";
		document.getElementById("signin-title").innerHTML = "Sign in";
		document.getElementById("repeat-password").value = '';
	}
	//Show registration only div
	else{
		document.getElementById("registerArea").style.display = "inline";
		//document.getElementById("submitButton").value = "Register";
		document.getElementById("registerLink").innerHTML = "Sign in";
		document.getElementById("signin-title").innerHTML = "Register";
	}
}

//Validates the sign in and register form
function validateSignIn(){
	var valid = true;
	//EMAIL
	var emailIn = document.forms["signIn"]["email"].value;
	//Email must be in "chars@chars.chars"
	if(emailIn.match(/\S+@\S+\.\S+/) == null || emailIn == null || emailIn == ""){
		document.getElementById("email-star").innerHTML = "*Invalid email";
		document.getElementById("email-star").style.display = "inline";
        valid = false;
	} else{
		document.getElementById("email-star").style.display = "none";
	}
	
	//PASSWORD
	var passIn1 = document.forms["signIn"]["password1"].value;
	//Password must be at least 6 chars long
	if(passIn1.match(/[a-zA-Z0-9]{6,}/) == null || passIn1 == null || passIn1 == ""){
		document.getElementById("password1-star").innerHTML = "*Must be at least 6 alphanumeric characters long";
		document.getElementById("password1-star").style.display = "inline";
		valid = false;
	} else{
		document.getElementById("password1-star").style.display = "none";
	}
	
	//REPEAT PASSWORD
	var passIn2 = document.forms["signIn"]["password2"].value;
	//If password2 is filled in, it means we're registering
	if(passIn2 != null && passIn2 != ""){
		//password1 should be the same as password2
		if(passIn1 != passIn2){
			document.getElementById("password2-star").innerHTML = "*Passwords do not match";
			document.getElementById("password2-star").style.display = "inline";
			valid = false;
		}
		//Terms must be accepted
		else if(!document.forms["signIn"]["termsConditions"].checked){
			document.getElementById("terms-star").innerHTML = "*Please accept the Terms & Conditions";
			document.getElementById("terms-star").style.display = "inline";
			valid = false;
		} else{
			document.getElementById("terms-star").style.display = "none";
		}
	}
	return valid;
}