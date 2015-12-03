<?php
	/* Prepara statement */
	if (!($statement = $db->prepare('SELECT * FROM `eventos` WHERE pagamento = ?;'))){
		echo "Erro ao preparar statement SQL: " . $db->error;
	};
?>
