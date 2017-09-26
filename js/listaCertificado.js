$(function() {
	$.ajax({
	type :"POST",
	 async: false,
	 url: "../adm/controller/listaCertificado.php",
	}).done(function(data){
		$("#tabela").html(data);
	});
});