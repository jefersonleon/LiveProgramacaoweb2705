<?php
   class Conta{
      public $nomeCliente;
      public $saldo;
    public function creditar($valor){
          $this->saldo += $valor; 
          echo "<h1 style='color:blue; font-size:12pt; text-align:center;'>"
        .$this->nomeCliente.", o valor R$".$valor." foi creditado em
         sua Conta com sucesso! </h1> <br>";
    }  
    public function mostrarSaldo(){
     echo "<h1 style='color:red; font-size:25pt; text-align:center;'>
       E X T R A T O </h1><br> <h2 style='color:blue; font-size:12pt;
        text-align:center;'>
       R$".$this->saldo." </h2>";
    }
    //criar um metodo para debitar
    //criar um metodo para trocar o nome do cliente e tambem informar 
    //novo valor do saldo
}
   $obj = new Conta();//criado o objeto
   $obj->nomeCliente = "Xiru da Silva";
   $obj->saldo = 50;  //inserido um valor para os atributos
   $obj->mostrarSaldo();// mostrei o saldo inicial
   $obj->creditar(150); //creditado em conta o valor de 150 reais
   $obj->mostrarSaldo(); //executado o saldo
   $obj->creditar(300); //creditado em conta o valor de 300 reais
   $obj->mostrarSaldo(); //executado o saldo
   //trocar o cliente para Ametista Fulera e o saldo novo de R$ 1000
    //debitar 250 reais
    //mostrar o saldo
   
?>
