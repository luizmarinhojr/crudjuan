<?php 
require_once 'crudjuan/controller/clienteController.php';

$page = $_REQUEST['page'] ?? 'index';
switch ($page) {
    case 'novo':
        ClienteController::novoUsuario();
        break;
        case 'listar':
            ClienteController::listar();
            break;

            case 'salvar':
                ClienteController::salvar();
                    break;

                    case 'index':
                        default:
                        ClienteController::index();
                        break;


                    }
                    ?>