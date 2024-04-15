<?php

require('constants.php');
require(DIR_BASE.'/vendor/autoload.php');

function load_env()
{
    $dotenv = Dotenv\Dotenv::createImmutable(DIR_BASE);
    $dotenv->load();
}

function dede(string|array $text)
{
    echo '<pre class="bg-secondary-subtle text-primary-emphasis fw-bold shadow-lg rounded fade-in p-5 mb-3">';
        var_export($text);
    echo '</pre>';
}

function get_apit_data()
{
    # Se inicia la sesión de cURL
    $ch = curl_init($_ENV['API_URL']);

    # Indicar que queremos recibir el resultado pero no la mostramos en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    # Ejecutamos la petición
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    # Cerramos cURL
    curl_close($ch);

    return $data;
}

function convert_date(string $date)
{
    $date = explode('-', $date);
    return $date[2] . '-' . $date[1] . '-' . $date[0];
}
