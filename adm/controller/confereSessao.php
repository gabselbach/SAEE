<?php
session_start();
if(!isset($_SESSION['id']))
	echo 5;
?>