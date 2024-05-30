<?php
/* Smarty version 4.3.2, created on 2024-05-30 17:45:25
  from 'C:\xampp\htdocs\proyectos\Casino\templates\formAddAgentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66589f15d49db5_29899225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c93384a2097d7eda4968812f476700a14424d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Casino\\templates\\formAddAgentes.tpl',
      1 => 1717083750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66589f15d49db5_29899225 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="col-3 m-auto" action="crearAgente" method="POST">
    
      <legend class="text-center">Crear Agente</legend>
      <div class="mb-3">
        <label class="form-label">Nombre de Agente</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Saldo</label>
        <input type="double" name="saldo" class="form-control" placeholder="Ingrese saldo">
      </div>
      <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="text" name="email" class="form-control" placeholder="Ingrese su Email">
    </div>
      <div class="mb-3">
        <label class="form-label">Estado de agente</label>
        <select  name="activado" class="form-select">
          <option value="0">Desactivado</option>
          <option value="1">Activado</option>  
        </select>
      </div>
      <button type="submit" class="btn btn-primary col-12">Crear Agente</button>
  </form><?php }
}
