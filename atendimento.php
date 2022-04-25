

<!DOCTYPE html>
<html>
<head>
	<?php  include ( "conexao.php"); ?>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atendimento</title>

<style>
    div.menu {position: fixed; background: #ccc;}
    div.menu a {float: left; padding: 5px 15px;}
</style>

</head>
<body>
<th>
	<h3 align="center">Tela Atendimento</h3>
</th>
<form align="center" method="post" action="">
	<div class="menu">
<tr>
	<td>
		<label for="id_chamado"> ID do chamado:</label>
		<input id="id_chamado" type="text" name="id_chamado">
	</td>
	<td>
		<label for="nome_atend"> Nome do Atendente:</label>
		<input id="nome_atend" type="text" name="nome_atend"/>
	</td><td>
		<label for="tipo_chamado"> Tipo de chamado:</label>
		<input id="tipo_chamado" type="text" name="tipo_chamado"/>
	</td><td>
		<label for="dia_atendimento"> Data de atendimento:</label>
		<input id="dia_atendimento" type="text" name="dia_atendimento"/>
	</td>
	<td>
		<input type="submit" name="sub" value="Confirma" id="btn">
	</td>
</tr>
	</div>
</form>

<div>
	

</div>



</body>
</html>