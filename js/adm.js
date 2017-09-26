$(function() {
$("#form").submit(function(e){
			 
				e.preventDefault();
		      	$.ajax({
		      	 type:"POST",
		      	 async: true,
		         url: "../adm/controller/confereAdm.php",
		         data:$("#form").serialize(),
		          success: function(data){
			            if(data==0){
			            	location.href='administrativo.html'
			            }else{
			            	$(".erro").html(data);
			            }
			         }
			      });
				});
	});