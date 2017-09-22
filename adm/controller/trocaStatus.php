<?php
require '../../conexao.php';
$codigo= $_POST['codigo'];

$query="SELECT Status FROM inscricao WHERE id='$codigo'";
$resultado= $mysqli->query($query);
$linha=$resultado->fetch_array();
$valor= $linha['Status'];
if($valor==0){
	$query="UPDATE inscricao set Status='1' WHERE id='$codigo'";
	$resultado= $mysqli->query($query);
}else{
	$query="UPDATE inscricao set Status='0' WHERE id='$codigo'";
	$resultado= $mysqli->query($query);
}
?>