<?php
require_once "libs/Smarty.class.php";


class AgenteView
{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarAgentes($agentes)
  {
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("agentes", $agentes);

    $this->smarty->display('tableAgentes.tpl');

  }

  function mostrarAgente($agente)
  {
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("agente", $agente);

    $this->smarty->display('tableAgente.tpl');
  }

}