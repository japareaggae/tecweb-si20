<div class=content>
<table>
<tr>
	<th>Data <a href="buscar.php?coluna=data">(filtrar)</a></th>
	<th>Hora <a href="buscar.php?coluna=Hora">(filtrar)</a></th>
	<th>Descrição <a href="buscar.php?coluna=descricao">(filtrar)</a></th>
	<th>Local <a href="buscar.php?coluna=local">(filtrar)</a></th>
	<th>Pagamento <a href="buscar.php?coluna=pagamento">(filtrar)</a></th>
	<th>Situação <a href="buscar.php?coluna=situacao">(filtrar)</a></th>
	<th>Remover Item</th>
</tr>
<?php
	while ($row = $results->fetch_assoc()){
		printf("<tr>\n");
		foreach ($detalhes as $info){
			printf ("<td>%s</td>\n", $row["$info"]);
		}
		printf("<td id=remove><a class=\"button remove\" href=\"func_remover.php?id=%s\">Remover</a></td>\n", $row["id"]);
		printf("</tr>\n");
	}
?>
</table>
</div>
