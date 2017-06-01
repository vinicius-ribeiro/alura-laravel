<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<h1>Listagem de Produtos</h1>
	<table class="table table-striped table-bordered table-hover">
		<?php foreach ($produtos as $p): ?>
		<tr>
			<td><?php echo $p->nome; ?></td>
			<td><?php echo $p->valor; ?></td>
			<td><?php echo $p->descricao; ?></td>
			<td><?php echo $p->quantidade; ?></td>
			<td><a href="/produtos/mostra?id=<?php echo $p->id; ?>">visualizar</span></a></td>
		</tr
		<?php endforeach; ?>
	</table>
</body>
</html>