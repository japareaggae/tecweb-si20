<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
<a class="button add" href="//localhost/agenda/">Retornar à visualização de agenda</a>
<form action="func_novo.php">
<table class=content>
	<tr>
		<td><label>Data (no formato AAAA-MM-DD)</label></td>
		<td><input name="data"></td>
	</tr>
	<tr>
		<td><label>Hora (no formato HH:MM)</label></td>
		<td><input name="hora"><br></td>
	</tr>
	<tr>
		<td><label>Descrição</label></td>
		<td><input name="descricao"><br></td>
	</tr>
	<tr>
		<td><label>Local</label></td>
		<td><input name="local"><br></td>
	</tr>
	<tr>
		<td><label>Pagamento</label></td>
		<td>
		<select name="pagamento">
			<option value="Sistema Único de Saúde" selected>Sistema Único de Saúde</option>
			<option value="Plano de Saúde" selected>Plano de Saúde</option>
			<option value="Particular">Particular</option>
		</select>
		</td>
	</tr>
	<tr>
		<td><label>Situação</label></td>
		<td>
		<select name="situacao">
			<option value="Em aberto" selected>Em aberto</option>
			<option value="Finalizado">Finalizado</option>
		</select>
		</td>
	</tr>
	<tr>
		<td colspan=2><input type="submit" value="Adicionar"></td>
	</tr>
</table>
</form>
</body>
</html>
