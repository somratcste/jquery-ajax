$("#autosubmit").click(function(){
	var content = $("#body").val();
	if($.trim(content) != ''){
		$.ajax({
			url : "check/checkrefresh.php",
			method : "POST" ,
			dataType : "text" ,
			data : {body : content} ,
			success : function(data) {
				$("#body").val("");
			}
		});
		return false ;
	}
});