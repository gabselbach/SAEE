<?php
	session_start();
	require '../../conexao.php';
	$email=$_POST['login'];
	$senha= preg_replace('/[^[:alnum:]_]/', '',$_POST['senha']);
	$query = "SELECT id FROM adm WHERE Login='$email' and Senha='$senha'";
	$mysqli->query($query);
 	if($mysqli->affected_rows==1){
		$resultado=$mysqli->query($query);
		while($linha=$resultado->fetch_array()){
			$_SESSION['id']=$linha['id'];	
			echo 0;
		}
	}else{
		echo "Login ou Senha incorretos";	
	}
?>