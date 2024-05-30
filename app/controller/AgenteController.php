<?php
require_once "app/model/AgenteModel.php";
require_once "app/view/AgenteView.php";

class AgenteController{

    private $model;
    private $view;
    private $err;

    function __construct(){
        $this->model = new AgenteModel();
        $this->view = new AgenteView();
    }

    function mostrarAgentes(){
        $agentes = $this->model->getAll();
        $this->view->mostrarAgentes($agentes);
    }

    function mostrarAgente($id){
        
        $agente = $this->model->getAgent($id);
     
        if($agente){
            $this->view->mostrarAgente($agente);
        }
        // else{
        //      $this->err->showErr("No existe la tarea con id: $id");
        // }
    }

    function delete($id){
        $this->model->delete($id);
        header("Location:".BASE_URL."agentes");
    }

    // function finalize($id){
    //     $this->model->finalize($id);
    //     header("Location:".BASE_URL."agentes");
    // }

    function newAgent(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre']) && !empty($_POST['email'])&&
            isset($_POST['saldo']) && $_POST['saldo'] !== ""
            ){
                $nombre = $_POST['nombre'];
                $saldo = $_POST['saldo'];
                $email = $_POST['email'];
                $activado = $_POST['activado'];

                $this->model->insertAgent($nombre, $saldo, $email, $activado);
                header("Location:".BASE_URL."agentes");             

             }
            // else{
            //     $this->err->showErr("Faltan datos");   
            // }
        }
    }
}