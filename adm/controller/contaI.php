<?php
require '../../conexao.php';
$sql = "SELECT COUNT(*) as i FROM inscricao";
$r = $mysqli->query($sql);
$linha = $r->fetch_object();
echo $linha->i;
?>