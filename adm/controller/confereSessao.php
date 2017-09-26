<?php
session_start();
if(!isset($_SESSION['id'])){
	echo 5;
}else if($_POST['exclui']==1){
 unset($_SESSION['id']);
 echo 0; 
}
?>