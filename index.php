<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class=nav>
<a class="button add" href="novo.php">Novo Agendamento</a>
</div>
<?php
	require_once "config.php";
	$results = $db->query("SELECT * FROM eventos");

	include "tabela.php" ?>
</body>
</html>
