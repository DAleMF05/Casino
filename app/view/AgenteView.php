<?php
require_once "view.php";


class AgenteView extends view
{
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
  function showEditAgent($agente){
    $this->smarty->assign("base", BASE_URL);
    $this->smarty->assign("agente", $agente);

    $this->smarty->display('formEditAgent.tpl');
  }
}