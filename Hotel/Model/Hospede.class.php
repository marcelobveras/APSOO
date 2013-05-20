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
		$this->cpf = $cpf;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function setId($id) {
		$this->id = $id;
	}
	
	public function save(){
		
		$stmt = $this->connection->prepare("INSERT INTO hospede (nome, cpf, sexo)
			VALUES (?,?,?)") or die(mysql_error());
		
		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getCpf());
		$stmt->bindValue(3, $this->getSexo());
	
		$stmt->execute();
	}
	public function delete(){
		// lógica necessária para excluir
	}
	
	public function SelectById($Id){
		
	}
}
$h = new Hospede();
$h->setNome("Marcelo");
$h->setCpf("03678242308");
$h->setSexo("M");
$h->save() or die(mysql_error());