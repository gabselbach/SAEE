<?php
require '../../conexao.php';
//ini_set('display_errors',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);
$id = $_POST['codigo'];
$sql ="SELECT Nome from inscricao where id = $id";
$r = $mysqli->query($sql);
$linha = $r->fetch_array();
echo $linha['Nome'];
?>