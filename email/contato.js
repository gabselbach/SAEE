$(function() {
	$("#contat").submit(function(e){
				e.preventDefault();
		      	$.ajax({
		      		type:"POST",
		      	 	async: true,
		        	url: "../adm/controller/phpemail.php",
		         	data:$("#contat").serialize(),
		          success: function(data){
			            if(data){
			            	$("#msg").html("mensagem enviada");	
			            }
			         }
			      });
				});
});