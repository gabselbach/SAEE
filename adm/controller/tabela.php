<?php
require '../../conexao.php';
$sql = "SELECT Nome,Email from inscricao where Certificado = '1'";
$resultado = $mysqli->query($sql);
$arquivo = 'certificado.xls';
$html = '';
$html .= '<table>';
$html .= '<tr>';
$html .= '<td colspan="10">Planilha com nome e email dos que receberam Certificado</tr>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td><b>Nome</b></td>';
$html .= '<td><b>Email</b></td>';
$html .= '</tr>';
while($linha=$resultado->fetch_array()){
// Definimos o nome do arquivo que será exportado
// Criamos uma tabela HTML com o formato da planilha
$html .= '<tr>';
$html .= '<td>' . $linha['Nome'] . '</td>';
$html .= '<td>' . $linha['Email'] . '</td>';
$html .= '</tr>';
}
$html .= '</table>';
// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );
// Envia o conteúdo do arquivo
echo $html;
exit;