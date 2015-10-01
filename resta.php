<?php
class Operaciones{
 public $a,$b,$resultado;
 	function __construct($a, $b){
   		$this->a = $a;
   		$this->b = $b;
 	}
 	public function restar($a, $b){
      $this->resultado = $this->a - $this->b;
    }    

    public	function sumar($a, $b){
		$this->resultado = $this->a + $this->b;
    }

    public	function multiplicar($a, $b){
		$this->resultado = $this->a * $this->b;
    }

    public function imprimir(){
    	return $this->resultado;
    }
}
$suma = new Operaciones(5,5);
$suma->sumar();
echo "Suma: ".$suma->imprimir();
echo "<br>";
$resta = new Operaciones(5,1);
$resta->restar();
echo "Resta: ".$resta->imprimir();
echo "<br>";
$multiplica = new Operaciones(5,5);
$multiplica->multiplicar();
echo "Multiplica: ".$multiplica->imprimir();
?>