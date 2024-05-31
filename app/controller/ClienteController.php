<?php
require_once "app/model/ClienteModel.php";
require_once "app/model/AgenteModel.php";
require_once "app/view/ClienteView.php";

class ClienteController{

    private $model;
    private $modelAgente;
    private $view;
    private $err;

    function __construct(){
        $this->model = new ClienteModel();
        $this->modelAgente = new AgenteModel();
        $this->view = new ClienteView();
    }

    function showAllClients($id = null){
        $agentes = $this->modelAgente->getAll();
        $clientes = $this->model->getAllCliete_y_Agente();
        
        $this->view->showAllClients($clientes, $agentes);
    }

    function showClients($id = null){
        $clientes = $this->model->getClients($id);
        $this->view->showClients($clientes);
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