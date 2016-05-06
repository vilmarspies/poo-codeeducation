<?php
require_once 'GrauImportancia.php';
require_once 'EnderecoCobranca.php';

class ClienteJuridico extends Cliente implements GrauImportancia, EnderecoCobranca
{
	private $cnpj;

	public function setCnpj($cnpj)
	{
		$this->cnpj = $cnpj;
		return $this;
	}
	public function getCnpj()
	{
		return $this->cnpj;
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