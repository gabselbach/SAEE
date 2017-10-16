$(document).ready(function () {
		      	$.ajax({
		      	 	type:"POST",
		      	 	async: true,
		        	url: "../adm/controller/listaInscricao.php",
		         	data:"teste=1",
		          	success: function(data) {
		          		$("#tabela").html(data);
		          		/* foi alterado essa parte */
		          		$(".clicado").click(function (e) {  
		          			var num = $(this).attr('id');
		          			alert(num);
					     		alert(" certificado adicionado a uma pessoa ou retirado, caso ela possua certificado irá aparecer um certo na linha do seu nome");
					      		
					      		$.ajax({
								type: "POST",
								async: false,
								url:"../adm/controller/alteraCertificado.php",
								data: "add="+num, 
								sucess:function(data){
									
								}

			          			}).done(function(data){
			          				location.reload();
			          			});
					  	});
					  	/* ate aqui */
		    			$(".troca").click(function(){
		    				var nome;
							var codigo = $(this).val();
							$.ajax({
								type: "POST",
								async: false,
								url:"../adm/controller/confereNome.php",
								data: "codigo="+codigo, 
								sucess:function(data){
								}
								
							}).done(function(data){
								nome = data;
								var confirmacao = confirm("Você deseja alterar o pagamento de :"+nome);
								if(confirmacao){
								$.ajax({
				      	 			type:"POST",
				      	 			async: false,
				         			url: "../adm/controller/trocaStatus.php",
				         			data:"codigo="+codigo,
				          			success: function(data) {
				          				alert("pagamento alterado");
				          				 
				          			}
			          			}).done(function(data){
			          				location.reload();
			          			});
								}
							});
						});

		    		}
		    	});
		    });