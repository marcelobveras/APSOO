<?php
	require_once $_SERVER["DOCUMENT_ROOT"].'/Hotel/Model/Servico.class.php';
class ServicoControl {
	private $Servico;

	public function ServicoControl(){
		$this->Servico = new Servico();
	}
	
	
}