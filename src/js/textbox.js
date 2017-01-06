$(document).ready(function(){
	$("#skill").keyup(function(){
		var skill = $(this).val();
		if(skill != ''){
			$.ajax({
				url : "check/checkskill.php",
				method : "post" ,
				data : {skill : skill} ,
				success : function(data){
					$("#skillStatus").html(data);
				}
			});
		}
		
	});
});