<?php
class Recepcionista extends Funcionario {
	private $id;
	private $func_id;

	public function getId() {
		return $this->id;
	}

	public function getFunc_id() {
		return $this->func_id;
	}

	public function setFunc_id($func_id) {
		$this->func_id = $func_id;
	}

	public function setId($id) {
		$this->id = $id;
	}

}