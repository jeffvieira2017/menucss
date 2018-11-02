<?php

require_once "../model/Crud.php";

$action = $_POST['action'];

switch($action) {

    case 'listar':
    $crud = new Crud();
    $crud->select('wp_youtube','*');
    break;

    default:
    echo "Ação inválida!";

}