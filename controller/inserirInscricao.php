<?php
include '../conexao.php';
	$nome=$_POST['nome'];
	$email=$_POST['login'];
	$curso=$_POST['curso'];
	$matricula=$_POST['matricula'];
	$instituicao=$_POST['instituicao'];	
	$datahora = date("Y-m-d H:i:s");
	$datahora = explode(" ",$datahora);
 	$data = $datahora[0]; 
 	$hora =$datahora[1];
 	$query= "INSERT INTO inscricao Values" . "(NULL,'$nome','$email','$curso',$matricula,'$instituicao',0,'$data','$hora')";
	echo $mysqli->query($query);
	if($mysqli->affected_rows>0){
			
		}else{
			
		}
?>