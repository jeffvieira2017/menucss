<?php

require_once 'Config.php';

class Crud extends Config {

    private $config;

    public function __construct() {
        $this->config = new Config();
    }

    // Select
    public function select($table, $campo) {
        $sql = "SELECT {$campo} FROM {$table}";
        $resultado = $this->config->configLocal()->prepare($sql);
        $resultado->execute();
        $resultados = $resultado->fetchAll();
        if($resultados) {
            echo json_encode($resultados);
        } else {
            echo "Erro ao retornar!";
        }
    }

}