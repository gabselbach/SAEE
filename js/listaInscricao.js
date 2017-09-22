$(function(){
		      	$.ajax({
		      	 type:"POST",
		      	 async: true,
		         url: "../adm/controller/listaInscricao.php",
		         data:"teste=1",
		          success: function(data) {
		          		$("#tabela").html(data);
		    			$(".troca").click(function(){
							var codigo = $(this).val();
							$.ajax({
			      	 			type:"POST",
			      	 			async: true,
			         			url: "../adm/controller/trocaStatus.php",
			         			data:"codigo="+codigo,
			          			success: function(data) {
			          				location.reload(); 
			          			}
		          			});
						});
		          	}
			    });
		     
	});