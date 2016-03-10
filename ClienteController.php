<?php 

	include 'Cliente.php';

class ClienteController {

	public $clientes;

	public function getClientes(){

		$this->clientes = array();

		for ($i=1; $i<=10; $i++){
			
			$p = new Cliente();

			$p->id = $i;
			$p->nome = "Cliente {$i}";
			$p->cpf = "000.000.000-0{$i}";
			$p->rua = "Rua {$i}";
			$p->bairro = "Bairro {$i}";
			$p->cidade = "Cidade {$i}";
			$p->estado = "Estado {$i}";
			$p->sexo = "Sexo {$i}";
			$p->celular = "(45)9999-999{$i}";
			$p->email = "{$i}@mail.com";

			$this->clientes[] = $p;
		}

			$p = new Cliente();

			$p->id = 11;
			$p->nome = "Teste ";
			$p->cpf = "000.000.000-99";
			$p->rua = "Av P ";
			$p->bairro = "Bairro ";
			$p->cidade = "Cidade ";
			$p->estado = "Estado ";
			$p->sexo = "Sexo ";
			$p->celular = "(45)9999-999";
			$p->email = "@mail.com";

			$this->clientes[] = $p;

		return $this->clientes;
	}

	public function getCliente($id)
	{
		foreach ($this->getClientes() as $cliente) {
			
			if ($cliente->id == $id){
				return $cliente;
			}
		}

		return new Cliente();
	}

	public function crescente()
	{
		$clientes = $this->getClientes();

		 asort($clientes);

		 return $clientes;
	}

	public function decrescente()
	{
		$clientes = $this->getClientes();

		 rsort($clientes);

		 return $clientes;
	}


}

 ?>
