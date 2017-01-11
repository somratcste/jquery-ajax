$(document).ready(function(){

	function autosave(){
		var content = $("#content").val();
		var contentID = $("#contentID").val();
		if(content != ''){
			$.ajax({
				url : "check/autosave.php" ,
				method : "post" , 
				data : {content : content, contentID : contentID} ,
				dataType : "text",
				success : function(data){
					if(data != '') {
						$("#contentID").val(data);
					}
					$("#saveStatus").text("Content Save as Draft ... ") ;
					setInterval(function(){
						$("#saveStatus").text("");
					}, 2000);
				}
			});
		}
	}

	setInterval(function(){
		autosave();
	}, 10000);

});