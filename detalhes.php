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
							<td><?php echo $cliente->getNome() ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>CPF:</strong></td>
							<td><?php echo $cliente->getCpf() ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>Endereço:</strong></td>
							<td><?php echo $cliente->getRua() . ', '.$cliente->getBairro() . ', '. $cliente->getCidade() . ' - ' .$cliente->getEstado() ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>Sexo:</strong></td>
							<td><?php echo $cliente->getSexo() ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>Celular:</strong></td>
							<td><?php echo $cliente->getCelular() ?></td>
						</tr>
						<tr>
							<td width="10%"><strong>E-mail:</strong></td>
							<td><?php echo $cliente->getEmail() ?></td>
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