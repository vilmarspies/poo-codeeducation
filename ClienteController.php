<?php 

	include 'ClienteFisico.php';
	include 'ClienteJuridico.php';

class ClienteController {

	public $clientes;

	public function getClientes(){

		$this->clientes = array();

		for ($i=1; $i<=10; $i++){
			
			$p = new ClienteFisico();

			$p->setId($i);
			$p->setNome("Cliente {$i}");
			$p->setCpf("000.000.000-0{$i}");
			$p->setRua("Rua {$i}");
			$p->setBairro("Bairro {$i}");
			$p->setCidade("Cidade {$i}");
			$p->setEstado("Estado {$i}");
			$p->setSexo("Sexo {$i}");
			$p->setCelular("(45)9999-999{$i}");
			$p->setEmail("{$i}@mail.com");
			$p->setGrauImportancia(rand(1,5));

			$this->clientes[] = $p;
		}

		$j = new ClienteJuridico();
		$j->setId($i);
			$j->setNome("Cliente Juridico 01");
			$j->setCnpj("00.000.000/0001-00");
			$j->setRua("Rua asdfasdf");
			$j->setBairro("Bairro asdf");
			$j->setCidade("Cidade teste");
			$j->setEstado("Estado PR");
			$j->setCelular("(45)9999-9990");
			$j->setEmail("juridico@mail.com");
			$j->setGrauImportancia(rand(1,5));

			$this->clientes[] = $j;

		return $this->clientes;
	}

	public function getCliente($id)
	{
		foreach ($this->getClientes() as $cliente) {
			
			if ($cliente->getId() == $id){
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
