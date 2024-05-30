<?php
require_once "libs/Smarty.class.php";


class ClienteView
{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarClientes($clientes, $id)
  {
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("clientes", $clientes);
    $this->smarty->assign("id", $id);

    $this->smarty->display('tableClientes.tpl');

  }

  function cambiarEstado($id){
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("id", $id);

    $this->smarty->display();
  }
}