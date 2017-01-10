$("#showpassword").click(function() {
	var pass = $("#password");
	var fieldType =  pass.attr('type');
	if(fieldType == 'password') {
		pass.attr('type', 'text');
		$(this).text("Hide Password");
		return false;
	} else {
		pass.attr('type' , 'password');
		$(this).text("Show Password") ;
		return false;
	}
});