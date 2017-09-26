$(function() {
$("#formu").submit(function(e){
				e.preventDefault();
		      	$.ajax({
		      		type:"POST",
		      	 	async: true,
		        	url: "controller/inserirInscricao.php",
		         	data:$("#formu").serialize(),
		          	success: function(data) {
		          		if(data==2)
		          			$(".saida").html('Matricula já cadastrada');
		          		else if(data)
		          			$(".saida").html('inscricao realizada com sucesso');
		          		else 
		          			$(".saida").html('Não realizada');
						document.getElementById('formu').reset();

			       	}
			      });
				});
});