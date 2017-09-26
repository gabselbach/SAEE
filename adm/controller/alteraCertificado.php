<?php
require '../../conexao.php';
if(isset($_POST['add'])){
	$id = $_POST['add'];
	$sql ="SELECT Certificado from inscricao where id = $id";
	$r = $mysqli->query($sql);
	$linha = $r->fetch_array();
	if($linha['Certificado']==0)
		$query = "UPDATE inscricao set Certificado='1'  where id= '$id'"; 
	else
		$query = "UPDATE inscricao set Certificado='0'  where id= '$id'"; 
	$mysqli->query($query);
}

?>