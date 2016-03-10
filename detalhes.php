<?php 
	require_once 'ClienteController.php';
	$ctrl = new ClienteController();

	$id = (int) $_GET['id'];

	$cliente = $ctrl->getCliente($id);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detalhes do Cliente</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-4">
				<table class="table table-striped">
					<thead>
						<tr>
							<th colspan="2">Detalhes do Cliente</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td width="10%"><strong>Nome:</strong></td>
							<td><?php echo $cliente->nome ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>CPF:</strong></td>
							<td><?php echo $cliente->cpf ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>Endereço:</strong></td>
							<td><?php echo $cliente->rua . ', '.$cliente->bairro . ', '. $cliente->cidade . ' - ' .$cliente->estado ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>Sexo:</strong></td>
							<td><?php echo $cliente->sexo ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>Celular:</strong></td>
							<td><?php echo $cliente->celular ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>E-mail:</strong></td>
							<td><?php echo $cliente->email ?></td>
						</tr>
					</tbody>
				</table>
				
				<a href="index.php" class="btn btn-primary">Voltar</a>
			</div>
		</div>
	</div>
<?php ?>
	
</body>
</html>