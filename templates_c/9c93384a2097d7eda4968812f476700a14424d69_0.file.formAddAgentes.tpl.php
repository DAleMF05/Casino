<?php
/* Smarty version 4.3.2, created on 2024-06-04 01:52:45
  from 'C:\xampp\htdocs\proyectos\Casino\templates\formAddAgentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665e574d2a7507_51151056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c93384a2097d7eda4968812f476700a14424d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Casino\\templates\\formAddAgentes.tpl',
      1 => 1717458730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e574d2a7507_51151056 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="col-3 m-auto" action="crearAgente" method="POST">
 <div class="formulario">
    
      <legend class="text-center">Crear Agente</legend>
      <div class="mb-3">
        <label class="form-label">Nombre de Agente</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Saldo</label>
        <input type="double" name="saldo" class="form-control" placeholder="Ingrese saldo" required>
      </div>
      <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="text" name="email" class="form-control" placeholder="Ingrese su Email" required>
    </div>
      <div class="mb-3">
        <label class="form-label">Estado de agente</label >
        <select name="activado" class="form-select">
          <option class="options" value="0">Desactivado</option>
          <option class="options" value="1">Activado</option>  
        </select>
      </div>
   </div>

      <button type="submit" class="btn btn-primary col-12">Crear Agente</button>
  </form><?php }
}
