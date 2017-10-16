<?php
require '../../conexao.php';
$query="SELECT * from inscricao";
$resultado=$mysqli->query($query);
while($linha=$resultado->fetch_array()){
	if($linha['Status']==0){
		$frase='Pagar';
	}else{
		$frase='Pago';
	}
	echo"
	<tr>
		<td>" . $linha['Nome'] . "</td>
		<td>" . $linha['Email'] . "</td>
		<td>" . $linha['Matricula'] . "</td>
		<input type=\"hidden\" class=\"nome\" value=\"" . $linha['Nome'] ."\" name=\"nome\">
		<td><button class=\"troca\"  type=\"submit\" value=\"" . $linha['id'] ."\" name=\"trocaStatus\">$frase</button></td><td>";
		if($linha['Certificado']==0){
			echo "<input type=\"checkbox\" id=\"" . $linha['id'] . "\" class=\"clicado\" name=\"clicado\" >";
		}
		else{
			
			echo "<input checked  type=\"checkbox\" id=\"" . $linha['id'] . "\" class=\"clicado\" name=\"clicado\" >";
	}
	echo"</td></tr>";
}
	?>