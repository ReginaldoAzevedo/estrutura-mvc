<?php 
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
    define("BASE_URL", "https://localhost/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '12345';
} else {
    define("BASE_URL", "https://meusite.com.br/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '12345';

}
global $db;

try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

} catch(PDOException $e) {
    echo "ERRO: " .$e->getMessage();
    exit;
}