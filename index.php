<?php 
require_once 'ClienteController.php';
$ctrl = new ClienteController();

$clientes = $ctrl->getClientes();

$column = isset($_GET['column'])?$_GET['column']:'nome';
$order = isset($_GET['order'])?$_GET['order']:1;


function orderNomeAsc($a, $b)
{
    return strcmp($a->nome, $b->nome);
}
function orderRuaAsc($a, $b)
{
    return strcmp($a->rua, $b->rua);
}

function orderNomeDesc($a, $b)
{
    return strcmp($b->nome, $a->nome);
}
function orderRuaDesc($a, $b)
{
    return strcmp($b->rua, $a->rua);
}

if ($column == 'nome')
{
	if($order ==1){
		usort($clientes, 'orderNomeAsc');
		$order = 0;
	}else{
		usort($clientes, 'orderNomeDesc');
		$order =1;
	}
}
else{
	if($order == 1){
		usort($clientes, 'orderRuaAsc');
		$order = 0;
	}else{
		usort($clientes, 'orderRuaDesc');
		$order =1;
	}
}
/*usort($clientes, function($a, $b)
{
    return strcmp($b->rua, $a->rua);
});*/



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="well">
			<h2>Listagem de clientes</h2>
		</div>
		<div class="row">
			<div class="col-md12">
			
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>
								<a href="index.php?column=nome&order=<?php echo $order ?>">Nome 
									<?php 
										if ($column=='nome' && $order==0){
											echo "<span class='glyphicon glyphicon-sort-by-attributes'></span>";
										} else if ($column=='nome' && $order==1){
											echo "<span class='glyphicon glyphicon-sort-by-attributes-alt'></span>";
										}else {
											echo "<span class='glyphicon glyphicon-sort'></span></a>";
										} 

									?>
								</a>
							</th>
							<th>
								<a href="index.php?column=rua&order=<?php echo $order ?>">Rua 
								<?php 
										if ($column=='rua' && $order==0){
											echo "<span class='glyphicon glyphicon-sort-by-attributes'></span>";
										} else if ($column=='rua' && $order==1){
											echo "<span class='glyphicon glyphicon-sort-by-attributes-alt'></span>";
										}else {
											echo "<span class='glyphicon glyphicon-sort'></span></a>";
										} 

									?>

								</a>
							</th>
							<th>Visualizar</th>
						</tr>
					</thead>
					<tbody>
						<?php  

							foreach ($clientes as $cliente) {	?>
							<tr>
								<td><?php echo $cliente->nome ?></td>
								<td><?php echo $cliente->rua ?></td>
								<td>
									<a href="<?php echo 'detalhes.php?id='.$cliente->id ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
								</td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
			
		</div>
				
	</div>
</body>
</html>