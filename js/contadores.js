$(function(){
		$.ajax({
			type:"POST",
		    async: false,
		    url: "../adm/controller/contaI.php",
		    success: function(data) {
		    	
		    	$("#totalI").html(data);
		    }
		});
		$.ajax({
			type:"POST",
			async: false,
			url:"../adm/controller/contaC.php",
			success: function(data) {
		    	$("#totalC").html(data);
		    }
		});
});