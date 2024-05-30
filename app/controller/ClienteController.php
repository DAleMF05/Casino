<?php
require_once "app/model/ClienteModel.php";
require_once "app/view/ClienteView.php";

class ClienteController{

    private $model;
    private $view;
    private $err;

    function __construct(){
        $this->model = new ClienteModel();
        $this->view = new ClienteView();
    }

    function mostrarClientes($id = null){
      
        $clientes = $this->model->getAll();
        $this->view->mostrarClientes($clientes, $id);
    }

     function cambiarEstado($id){
        $this->model->cambiarEstado($id);
        header("Location:".BASE_URL."clientes");

        $this->view->cambiarEstado($id);
    }

    function delete($id){
        $this->model->delete($id);
        header("Location:".BASE_URL."clientes");
    }

    function newClient(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre']) &&
            isset($_POST['saldo']) && $_POST['saldo'] !== ""
            ){
                $nombre = $_POST['nombre'];
                $saldo = $_POST['saldo'];
                $activado = $_POST['activado'];
                $id_agente = $_POST['id_agente'];

                $this->model->insertClient($nombre, $saldo, $activado, $id_agente);
                header("Location:".BASE_URL."clientes");             

             }
        }
    }

}