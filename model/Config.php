<?php

class Config {

    private $banco;

    public function __construct() {
        $this->banco = '';
    }

    // Local
    public function configLocal() {
        $this->banco = new PDO('mysql:host=localhost;dbname=devplugins','root','');
        $this->banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->banco;
    }

    // Produção
    public function configProducao() {
        $this->banco = new PDO('mysql:host=localhost;dbname=pastoraldoempree_novosite','pastoraldoempree_usernovosite','MXi;uQoFSytd');
        $this->banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->banco;
    }

}