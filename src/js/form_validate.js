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

	$("#myform").submit(function(){
		var error_username = false ; 
		var error_password = false ; 
		var error_again_password = false ;
		var error_email = false ;
		var error_remember = false ; 
		if (error_username == false) {
			return true ;
		} else {
			return false ;
		}
	});

});