<?php
				class Caneta{
								public $modelo = $_POST["modelo1"];
								public $cor;
								private $ponta;
								protected $carga;
								protected $tampada;
								
								public function rabiscar() {
												if ($this->tampada == true){
																echo "<p>Não posso rabiscar</p>";
												}else{
																echo "<p>pode rabiscar</p>";
												}
								}
								public function tampar(){
												$this->tampada = true;
								}
								public function destampar(){
												$this->tampada = false;
								}
				}
