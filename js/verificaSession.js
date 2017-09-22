$(function() {
		      	$.ajax({
		      	 type:"POST",
		      	 async: true,
		         url: "../adm/controller/confereSessao.php",
		          success: function(data){
			            if(data==5){
			            	location.href='index.html';	
			            }
			         }
			      });
				});