<?php
class Servico {
	private $id;
	private $nome;
	private $descricao;
	private $preco;

	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setDescricao($descricao) {
		$this->id = $descricao;
	}

	public function setPreco() {
		$this->preco = $preco;
	}

	public function setId($id) {
		$this->id = $id;
	}

}