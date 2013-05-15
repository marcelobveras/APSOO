<?php
class Funcionario {
	private $id;
	private $nome;
	private $cpf;
	private $sexo;

	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setCpf($cpf) {
		$this->id = $cpf;
	}

	public function setSexo() {
		$this->sexo = $sexo;
	}

	public function setId($id) {
		$this->id = $id;
	}

}