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
		<td><button class=\"troca\"  type=\"submit\" value=\"" . $linha['id'] ."\" name=\"trocaStatus\">$frase</button></td>
	</tr>";
}
	?>