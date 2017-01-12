$(document).ready(function() {
	$("#username_error_message").hide();
	$("#password_error_message").hide();
	$("#password_again_error_message").hide();
	$("#email_error_message").hide();
	$("#remember_error_message").hide();

	var error_username = false ; 
	var error_password = false ; 
	var error_again_password = false ;
	var error_email = false ;
	var error_remember = false ; 

	$("#username").focusout(function(){
		check_username();
	});

	$("#password").focusout(function(){
		check_password();
	});

	$("#password_again").focusout(function(){
		check_again_password();
	});

	$("#email").focusout(function(){
		check_email();
	});

	function check_username(){
		var username_length = $("#username").val().length;
		if(username_length < 5 || username_length > 20) {
			$("#username_error_message").html("Should be between 5-20 characters");
			$("#username_error_message").show();
			error_username = true ;
		} else {
			$("#username_error_message").hide();
		}
	}

	function check_password(){
		var password_length = $("#password").val().length;
		if(password_length < 5 ) {
			$("#password_error_message").html("Should be minimum 5 characters");
			$("#password_error_message").show();
			error_password = true ;
		} else {
			$("#password_error_message").hide();
		}
	}

	function check_again_password(){
		var password = $("#password").val();
		var password_again_value = $("#password_again").val();
		if(password != password_again_value) {
			$("#password_again_error_message").html("Password Do not match");
			$("#password_again_error_message").show();
			error_again_password = true ;
		} else {
			$("#password_again_error_message").hide();
		}
	}

	function check_email(){
		var pattern = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
		if(pattern.test($("#email").val())) {
			$("#email_error_message").hide();
		} else {
			
			$("#email_error_message").html("Invalid Email");
			$("#email_error_message").show();
			error_email = true ;
		}
	}

	$("#myform").submit(function(){
		var error_username = false ; 
		var error_password = false ; 
		var error_again_password = false ;
		var error_email = false ;
		var error_remember = false ; 
		if (error_username == false && error_password == false && error_again_password == false && error_email == false) {
			return true ;
		} else {
			return false ;
		}
	});

});