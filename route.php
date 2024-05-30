<?php
require_once "app/controller/AuthController.php";
require_once "app/controller/AgenteController.php";


// definimos la base url de forma dinamica
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (empty($_GET['action'])) {
    $_GET['action'] = 'login';
}

$action = $_GET['action'];
$parametro = explode('/', $action);

//  print_r($parametro);
switch ($parametro[0]) {
    case 'agentes':
        $controller = new AgenteController();
        $controller->mostrarAgentes();
        break;

    case 'mostrarAgente':
        $controller = new AgenteController();
        $controller->mostrarAgente($parametro[1]);
        break;

    case 'crearAgente':
        $controller = new AgenteController();
        $controller->newAgent();
        break;

    case 'delete':
        $controller = new AgenteController();
        $controller->delete($parametro[1]);
        break;

    case 'usuarios':
        echo "Usuarios";
        break;

    case 'login':
        $controller = new AuthController();
        $controller->showLogin();
        break;

    case 'verify':
        $controller = new AuthController();
        $controller->verify();
        break;

    // CASOS DE EJEMPLO
    case 'hash':
        // CASO DE EJEMPLO
        $pass = "12345";
        echo md5($pass);
        echo "<br>";
        echo "<br>";
        // PARA EL MOMENTO DE REGISTRAR UN USUARIO UDS. DEBEN USAR ÉSTE ÚLTIMO
        echo password_hash($pass, PASSWORD_DEFAULT);
        break;
    // case 'addTask':
    //     newTask();
    //     break;

   


    // case 'finalize':
    //     finalizeTask($parametro[1]);
    //     break;



    default:
    //    TODO:: hacer algo
}