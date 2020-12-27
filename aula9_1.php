<?php
class Caneta {
				private $modelo;
				private $cor;
				private $ponta;
				private $tampada;
				
				public function Caneta($m, $c, $p) {//O método construct pode ter o mesmo nome da classe ou __
								$this -> modelo = $m;
								$this -> cor    = $c;
								$this -> ponta  = $p;
								$this -> tampar();
				}
				public function tampar() {
								$this->tampada = false;
				}
				public function getModelo(){
								return $this->modelo;
				}
				public function setModelo($m){
								$this->modelo = $m;
				}
				public function getPonta(){
								return $this->ponta;
				}
				public function setPonta($p){
								$this->ponta = $p;
				}
}
?>
