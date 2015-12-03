<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
	require_once "config.php";

	foreach ($detalhes as $info){
		if (empty($_GET["$info"])){
			exit("Algum dado não foi preenchido!");
		}
	}
	/* EXEMPLO DE INSERT:
	 * INSERT INTO `eventos` 
	 * (`id`, `data`, `hora`, `descricao`, `local`, `pagamento`, `situacao`)
	 * VALUES
	 * (NULL, '2015-11-11', '11:53', 'Exame de Sangue', 'Laboratório de Análises Clínicas', 'Plano de Saúde', 'Finalizado');*/

	/* Prepara statement */
	if (!($statement = $db->prepare('INSERT INTO `eventos`
(`data`, `hora`, `descricao`, `local`, `pagamento`, `situacao`)
VALUES
(?, ?, ?, ?, ?, ?);'))){
		echo "Erro ao preparar statement SQL: " . $db->error;
	};

	/* Preenche statement */
	if (!$statement->bind_param("ssssss", $_GET["data"], $_GET["hora"], $_GET["descricao"], $_GET["local"], $_GET["pagamento"], $_GET["situacao"])){
		echo "Falha ao preencher statement: " . $statement->error;
	}
	if (!$statement->execute()) {
		echo "Falha ao executar statement: " . $statement->error;
	}

?>
<a href="//localhost/agenda">Retornar à visão de agenda</a>
</body>
</html>
