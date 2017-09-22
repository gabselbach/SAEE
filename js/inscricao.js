$(function() {
$("#formu").submit(function(e){
				e.preventDefault();
		      	$.ajax({
		      		type:"POST",
		      	 	async: true,
		        	url: "controller/inserirInscricao.php",
		         	data:$("#formu").serialize(),
		          	success: function(data) {
		          			$(".saida").html(data);
		          			$(".saida").html('inscricao realizada com sucesso');
							document.getElementById('formu').reset();
		         				$("formu").css("outline:none");
			       	}
			      });
				});
});