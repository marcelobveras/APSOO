<?php
class Reserva_Servico {
	private $id;
	private $reserv_id;
	private $servic_id;

	public function getId() {
		return $this->id;
	}

	public function getReserv_id() {
		return $this->reserv_id;
	}

	public function getServic_id() {
		return $this->servic_id;
	}

	public function setReserv_id($reserv_id) {
		$this->reserv_id = $reserv_id;
	}

	public function setServic_id($servic_id) {
		$this->id = $servic_id;
	}

	public function setId($id) {
		$this->id = $id;
	}

}