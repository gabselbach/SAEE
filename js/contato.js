$(function() {
	$("#contat").submit(function(e){
				$("#carregando").css("display", "inline");
				e.preventDefault();
		      	$.ajax({
		      		type:"POST",
		      	 	async: true,
		        	url: "adm/controller/phpemail.php",
		         	data:$("#contat").serialize(),
		          success: function(data){
			            if(data){
			            	  $(".saida").css("background-color", "orange");
			            	$("#msg").html("mensagem enviada");	
			            }
			         }
			      });
				});
});