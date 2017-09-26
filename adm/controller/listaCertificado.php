<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require '../../conexao.php';
$sql = "SELECT Nome from inscricao where Certificado = '1'";
$resultado = $mysqli->query($sql);
while($linha=$resultado->fetch_array()){
	echo $linha['Nome'] . "</br>";
}
//echo "ola";
?>