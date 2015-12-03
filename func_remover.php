<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
	require_once "config.php";

	if (empty($_GET["id"])){
		exit("Algum dado não foi preenchido!");
	}

	/* DELETE FROM `eventos` WHERE `eventos`.`id` = ?*/
	/* Prepara statement */
	if (!($statement = $db->prepare('DELETE FROM `eventos` WHERE `eventos`.`id` = ?'))){
		echo "Erro ao preparar statement SQL: " . $db->error;
	};

	/* Preenche statement */
	if (!$statement->bind_param("i", $_GET["id"])){
		echo "Falha ao preencher statement: " . $statement->error;
	}
	if (!$statement->execute()) {
		echo "Falha ao executar statement: " . $statement->error;
	}

?>
<a href="//localhost/agenda">Retornar à visão de agenda</a>
</body>
</html>
