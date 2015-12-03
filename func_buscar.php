<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<a class="button add" href="//localhost/agenda/">Retornar à visualização de agenda</a>
<?php
	require_once "config.php";

	switch ($_GET["coluna"]){
		case "data":
			require "includes/buscar-data.php";
			break;
		case "hora":
			require "includes/buscar-hora.php";
			break;
		case "descricao":
			require "includes/buscar-descricao.php";
			break;
		case "local":
			require "includes/buscar-local.php";
			break;
		case "pagamento":
			require "includes/buscar-pagamento.php";
			break;
		case "situacao":
			require "includes/buscar-situacao.php";
			break;
		default:
			printf('<p style="color:red; font-weight:bold">Coluna não encontrada!</p>');
			exit;
	}

	/* Preenche statement */
	if (!$statement->bind_param("s", $_GET["filtro"])){
		echo "Falha ao preencher statement: " . $statement->error;
	}
	if (!$statement->execute()) {
		echo "Falha ao executar statement: " . $statement->error;
	}
	$results = $statement->get_result();

	include "tabela.php";
?>
</body>
</html>
