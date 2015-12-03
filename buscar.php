<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<a class="button add" href="//localhost/agenda/">Retornar à visualização de agenda</a>
<div class=content>
<form action='func_buscar.php'>
<input type=hidden name=coluna value=<?php echo $_GET["coluna"] ?>>
<?php
	switch ($_GET["coluna"]){
		case "data":
			printf('<label>Filtro (no formato AAAA-MM-DD)</label> <input name="filtro"> <br>');
			break;
		case "hora":
			printf('<label>Filtro (no formato HH:MM)</label> <input name="filtro"> <br>');
			break;
		case "pagamento":
			printf('<select name="filtro">');
			printf('<option value="Plano de Saúde">Plano de Saúde</option>');
			printf('<option value="Particular">Particular</option>');
			printf('</select>');
			break;
		case "situacao":
			printf('<select name="filtro">');
			printf('<option value="Em aberto">Em aberto</option>');
			printf('<option value="Finalizado">Finalizado</option>');
			printf('</select>');
			break;
		default:
			printf('<label>Filtro:</label> <input name="filtro"> <br>');
			break;
	}
?>
<input type="submit" value="Buscar">
</form>
</div>
</body>
</html>
