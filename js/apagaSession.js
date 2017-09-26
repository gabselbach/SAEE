$(function(){
	$.ajax({
		type: "POST",
		async: false,
		url:"adm/controller/confereSessao.php",
		data:"exclui="+1,
		success: function(data){

		}
	});
});