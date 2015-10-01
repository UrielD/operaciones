<?php
class Operaciones{
 public $a,$b,$resultado;

 public function asignaValores($a, $b){
   $this->a = $a;
   $this->b = $b;

 }

 private function restar($a, $b){
      $this->resultado = $this->a - $this->b;
    }    

    public function imprimir($resultado){
     $this->restar();
       return $this->resultado;
    }
}
$resta = new Operaciones;
$resta->asignaValores(4,1);
echo "La resta es: ".$resta->imprimir();
?> 