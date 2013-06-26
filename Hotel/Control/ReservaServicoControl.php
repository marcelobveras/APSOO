<?php
date_default_timezone_set("Brazil/East");
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Reserva_servico.class.php';
class ReservaServicoControl {
	private $ReservaServico;
	public static $border = 1;

	public function ReservaServicoControl(){
		$this->ReservaServico = new Reserva_Servico();
	}
	
	
	public function ReservaServicoI($id)
	{
		$hosp = $this->ReservaServico->SelectById($id);
		return $hosp;
	}
	
	public function Add($reserv_id, $servic_id)
	{
		$this->ReservaServico->setReserv_id($reserv_id);
		$this->ReservaServico->setServic_id($servic_id);
		$this->ReservaServico->save();
	}
	
	
	public function Del($id)
	{
		$this->ReservaServico->setId($id);
		$this->ReservaServico->delete();
	}
	
}