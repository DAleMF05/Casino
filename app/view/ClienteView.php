<?php
require_once "libs/Smarty.class.php";


class ClienteView
{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function showAllClients($clientes, $agentes)
  {


    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("clientes", $clientes);
    $this->smarty->assign("agentes", $agentes);

    $this->smarty->display('tableClientes.tpl');

  }

  function cambiarEstado($id_cliente){
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("id", $id_cliente);

    $this->smarty->display();
  }

  function showClients($cliente){
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("clientes", $cliente);
    
    $this->smarty->display('tableClients.tpl');

  }
}