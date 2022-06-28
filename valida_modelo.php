<?php

if($_POST)
{
    //die(var_dump($_POST));
    switch ($_POST["iModelo"]) {
        case '1':
            $tipo_modelo = "modelo_1_padrao.php";
            break;
        
        default:
            $tipo_modelo = "modelo_1_padrao.php";
            break;
    }

    $url = 'https://alcateiawebdigital.com.br/systememail/assets/modelos_email/'. $tipo_modelo;
    $myvars = $_POST;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // die(var_dump($url));
    $response = curl_exec($ch);
    echo $response;
}
?>

