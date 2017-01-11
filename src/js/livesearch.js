$("#autosearch").keyup(function(){
	var search = $(this).val() ;
	if(search != '') {
		$.ajax({
			url : "check/livesearch.php",
			method : "POST",
			data : {search:search} ,
			dataType : "text" ,
			success : function(data){
				$("#liveStatus").html(data);
			}
		});
	} else {
		$("#liveStatus").html("");
	}
});