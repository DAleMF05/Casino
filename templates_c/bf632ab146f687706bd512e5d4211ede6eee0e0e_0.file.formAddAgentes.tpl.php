<?php
/* Smarty version 4.3.2, created on 2024-05-23 20:15:16
  from 'C:\xampp\htdocs\Proyectos\tp_especial\templates\formAddAgentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664f87b409cd97_82115779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf632ab146f687706bd512e5d4211ede6eee0e0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\tp_especial\\templates\\formAddAgentes.tpl',
      1 => 1716488072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664f87b409cd97_82115779 (Smarty_Internal_Template $_smarty_tpl) {
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
