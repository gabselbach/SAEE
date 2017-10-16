<?php
require '../../conexao.php';
$sql = "SELECT COUNT(*) as c FROM inscricao where Certificado = '1'";
$r = $mysqli->query($sql);
$linha = $r->fetch_object();
echo $linha->c;
?>