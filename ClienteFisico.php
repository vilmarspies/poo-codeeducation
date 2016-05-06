<?php
require_once 'Cliente.php';
require_once 'GrauImportancia.php';
require_once 'EnderecoCobranca.php';

class ClienteFisico extends Cliente implements GrauImportancia, EnderecoCobranca
{
	private $cpf;
	private $sexo;

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
		return $this;
	}
	public function getCpf()
	{
		return $this->cpf;
	}
	

	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
		return $this;
	}
	public function getSexo()
	{
		return $this->sexo;
	}

	public function setGrauImportancia($grau)
	{
		$this->grauImportancia = $grau;
	}

	public function getGrauImportancia()
	{
		return $this->grauImportancia;
	}

	public function setEnderecoCobranca($endereco)
	{
		$this->enderecoCobranca = $enderecoCobranca;
	}

	public function getEnderecoCobranca()
	{
		return $this->enderecoCobranca;
	}
}

/*
- Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endereço, etc.

- Crie um array de objetos de clientes, com 10 clientes dentro.

- Crie uma página e faça a listagem geral dos clientes. Quando clicar sobre o cliente, você deverá mostrar os dados específicos do cliente selecionado.

- Nessa listagem você também deverá ter a opção de ordenar os clientes pelo seu índice de forma ascendente e descendente.

Não se esqueça de caprichar na interface utilizando o twitter bootstrap.
*/