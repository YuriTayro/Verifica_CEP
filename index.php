<?php

require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIAS
use \App\WebService\ViaCEP;

//VERIFICA A EXISTENCIA DO CEP NO COMANDO
if(!isset($argv[1]) || !preg_match('/^\d{8}$/', $argv[1])) {

    die("CEP não definido, por favor revise!!\n");
   

}

$dadosCEP = ViaCEP::consultarCEP($argv[1]); //forma de chamar o método estático 'consultarCEP';

//var_dump($dadosCEP);
print_r($dadosCEP);