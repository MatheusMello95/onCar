<?php

require_once("utilidades.php");

if(isset($_GET['url'])){
    $var = $_GET['url'];
    if($_SERVER['REQUEST_METHOD']=='GET'){

        $numero = intval(preg_replace('/[^0-9]+/', '', $var),10);

        switch($var){
        case "veiculos":
                $resp = getAllCar();
                print_r(json_encode($resp));
                http_response_code(200);
        break;
        case "veiculos/$numero":
                $resp = getCar($numero);
                print_r(json_encode($resp));
                http_response_code(200);
        break;
        default;
        }
    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $postBody = file_get_contents("php://input");
        $convert = json_decode($postBody, true);
        if(json_last_error()==0){
            switch($var){
                case "veiculos":
                        $resp = createCar($convert);
                        print_r(json_encode($resp));
                        http_response_code(200);
                break;
                default;
                }
            http_response_code(200);
        }
    }else if($_SERVER['REQUEST_METHOD']=='PUT'){
        $postBody = file_get_contents("php://input");
        $convert = json_decode($postBody, true);
        $numero = intval(preg_replace('/[^0-9]+/', '', $var),10);

        switch($var){
        case "veiculos/$numero":
                $resp = updateCar($numero, $convert);
                print_r(json_encode($resp));
                http_response_code(200);
        break;
        default;
        }
    }else if($_SERVER['REQUEST_METHOD']=='DELETE'){
        $numero = intval(preg_replace('/[^0-9]+/', '', $var),10);

        switch($var){
        case "veiculos/$numero":
                $resp = deleteCar($numero);
                print_r(json_encode($resp));
                http_response_code(200);
        break;
        default;
        }
    }
}else{

}