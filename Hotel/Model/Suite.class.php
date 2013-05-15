<?php
class Suite extends Quarto{
	private $id;
	private $quarto_id;
	private $valor_diaria;

	public function getId() {
		return $this->id;
	}

	public function getQuarto_id() {
		return $this->quarto_id;
	}

	public function getValor_diaria() {
		return $this->valor_diaria;
	}

	public function setQuarto_id($quarto_id) {
		$this->quarto_id = $quarto_id;
	}

	public function setValor_diaria($valor_diaria) {
		$this->id = $valor_diaria;
	}

	public function setId($id) {
		$this->id = $id;
	}

}