<?php


class Cliente 
{
	private $id;
	private $nome;
	private $rua;
	private $bairro;
	private $cidade;
	private $estado;
	private $celular;
	private $email;
	private $grauImportancia;
	private $enderecoCobranca;


	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function setRua($rua)
	{
		$this->rua = $rua;
		return $this;
	}
	public function getRua()
	{
		return $this->rua;
	}

	public function setBairro($bairro)
	{
		$this->bairro = $bairro;
		return $this;
	}
	public function getBairro()
	{
		return $this->bairro;
	}

	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
		return $this;
	}
	public function getCidade()
	{
		return $this->cidade;
	}

	public function setEstado($estado)
	{
		$this->estado = $estado;
		return $this;
	}
	public function getEstado()
	{
		return $this->estado;
	}


	public function setCelular($celular)
	{
		$this->celular = $celular;
		return $this;
	}
	public function getCelular()
	{
		return $this->celular;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}



}
