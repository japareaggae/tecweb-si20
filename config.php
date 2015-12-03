<?php
	$db = new mysqli("localhost", "agenda", "agendamedica", "agenda");
	if ($db->connect_errno){
		echo "Falha ao conectar ao banco de dados: " . $mysqli->connect_error;
	}

	$detalhes = array("data", "hora", "descricao", "local", "pagamento", "situacao");
?>
