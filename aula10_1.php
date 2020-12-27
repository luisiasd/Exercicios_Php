<?php
class ContaBanco {
				//atributos
				public $numConta;
				protected $tipo;
				private $dono;
				private $saldo;
				private $status;
				
				//Métodos
				public function abrirConta($t){
								$this->setTipo($t);
								$this->setStatus(true);
								if ($t == "CC") {
												$this->setSaldo(50);
								} elseif ($t == "CP"){
												$this->saldo = 150;
								}
				}
				public function fecharConta() {
								if ($this->getSaldo() > 0) {
												echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
								} elseif ($this->getSaldo() < 0){
												echo "<p>Conta está em débito. Impossível encerrar!</p>";
								} else {
												$this->setStatus(false);
								}
				}
				public function depositar($v) {
								if($this->getStatus()){
												$this->setSaldo($this->getSaldo() + $v);
								}
				}
				public function sacar($v) {
								if ($this->getStatus()){
												if($this->getSaldo() > $v) {
																$this->setSaldo($this->getSaldo() - $v);
																echo "<p>Saque de R$ $v autorizado na conta de ".$this->getDono()."</p>";
												}else{
																echo "<p>Saldo Insuficiente</p>";
												}
								}else{
												echo "não posso sacar de uma conta fechada";
								}
				}
				public function pagarMensal() {
								if ($this -> getTipo() == "CC") {
												$v = 12;
								}elseif ($this->getTipo() == "CP"){
												$v = 20;
								}
								if ($this->getStatus()){
												$this->setSaldo($this->getSaldo() - $v);
												echo "<p>Mensalidade de R$ $v debitada na conta de".$this->getDono()." </p>";
								}else{
												echo "<p>problemas com a conta. Não posso cobrar.</p>";
								}
				}
				
				//metodos especiais
				
				function getNumConta(){
								return $this-> numConta;
				}
				function setNumConta($numConta){
								$this-> numConta = $numConta;
				}
				function getTipo (){
								return $this-> tipo;
				}
				function setTipo($tipo){
								$this-> tipo = $tipo;
				}
				function getDono(){
								return $this-> dono;
				}
				function setDono($dono){
								$this-> dono = $dono;
				}
				function getSaldo() {
								return $this-> saldo;
				}
				function setSaldo($saldo) {
								
								$this->saldo = $saldo;
				}
				function getStatus() {
								return $this->  saldo;
				}
				function setStatus($status){
								$this-> status = $status;
				}
}
