<?php
require_once '/Hospede.class.php';
require_once '/PDOConnectionFactory.class.php';
require_once '/model.interface.php';
class Hospede implements model {
	private $connection;
	private $id;
	private $nome;
	private $cpf;
	private $sexo;

	public function Hospede(){
		$con = new PDOConnectionFactory();
		$this->connection = $con->getConnection();
		echo "OK esta connectando";
	}
	
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

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function save(){
		// lógica necessária para salvar
	}
	public function delete(){
		// lógica necessária para excluir
	}
	
	public function SelectById($Id){
		// lógica necessária para selecionar
	}
}
new Hospede();
