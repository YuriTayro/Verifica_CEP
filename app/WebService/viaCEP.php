<?php

//Definir o namespace da classe App
namespace App\WebService;

class ViaCEP{
    //Método consultar cep na api do viaCEP
    public static function consultarCEP($cep){
        //INICIA O CURL, ABRINDO A CONEXÇÃO
        $curl = curl_init();

        //CONFIGURAÇÕES DO CURL
        CURL_SETOPT_ARRAY($curl, [
            CURLOPT_URL => 'viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true, //vai retornar o response
            CURLOPT_CUSTOMREQUEST => 'GET' //estamos enviando uma requisição get para a url acima e queremos q traga um retorno verdadeiro
        ]);

        //RESPONSE
        $response = curl_exec($curl);

        //FECHANDO A CONEXÇÃO ABERTA
        curl_close($curl);

        //DEBUG
        //var_dump($response);

        //CONVERTE O JSON PARA ARRAY
        $array = json_decode($response, true);

        //RETORNANDO O CONTEUDO EM ARRAY
        return isset($array['cep']) ? $array : null; //se existir um cep dentro de $array, então retorne esse array. Caso contrário, retorne nulo.

    }
}