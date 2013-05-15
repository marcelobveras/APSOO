<?php
class Reserva {
	private $id;
	private $recep_id;
	private $hosp_id;
	private $quarto_id;
	private $data_ini;
	private $data_fim;

	public function getId() {
		return $this->id;
	}

	public function getRecep_id() {
		return $this->recep_id;
	}

	public function getHosp_id() {
		return $this->hosp_id;
	}

	public function getQuarto_id() {
		return $this->quarto_id;
	}

	public function getData_fim() {
		return $this->data_fim;
	}

	public function setRecep_id($recep_id) {
		$this->recep_id = $recep_id;
	}

	public function setHosp_id($hosp_id) {
		$this->id = $hosp_id;
	}

	public function setQuarto_id() {
		$this->quarto_id = $quarto_id;
	}

	public function setData_fim() {
		$this->data_fim = $data_fim;
	}

	public function setId($id) {
		$this->id = $id;
	}

}