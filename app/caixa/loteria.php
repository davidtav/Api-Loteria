<?php 

namespace App\Caixa;

class Loteria{
    /**
     * URL base da API de consulta dos resultados das loterias da Caixa Econômica Federal
     * @var string
     */
    const  URL_BASE = "https://servicebus2.caixa.gov.br/portaldeloterias/api";

    /**
     * Método responsável por consultar o resultado de uma loteria específica
     * @param string $loteria - O nome da loteria a ser consultada
     * @param integer $concurso - O número do concurso a ser consultado 
     * @return array - Retorna um array associativo contendo os dados do resultado da loteria, ou um array vazio em caso de falha na consulta
     */
    public static function consultaResultado($loteria,$concurso = null){
        //endpoint completo para consulta do resultado da loteria
        $endpoint= self::URL_BASE . "/" . $loteria. "/" . $concurso;

     
        //inicializa o cURL
        $curl = curl_init();

        //configurações do cURL
        curl_setopt_array($curl, [
           CURLOPT_URL => $endpoint,
           CURLOPT_RETURNTRANSFER => true, 
           CURLOPT_CUSTOMREQUEST => "GET",
        ]);

        //executa o Curl
        $response = curl_exec($curl);

        //não existe mais a necessidade de usar o curl_close, pois o PHP 8.0+ fecha automaticamente a conexão quando a variável é destruída           
        
        //decodifica a resposta JSON para um array associativo
        return strlen($response) ? json_decode($response, true) : [];
    }
}