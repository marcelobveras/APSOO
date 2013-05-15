<?php
class Quarto {
	private $id;
	private $nome;
	private $numero;
	private $disponivel;

	public function getId() {
		return $this->id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function getDisponivel() {
		return $this->disponivel;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setNumero($numero) {
		$this->id = $numero;
	}

	public function setDisponivel($disponivel) {
		$this->disponivel = $disponivel;
	}

	public function setId($id) {
		$this->id = $id;
	}

}