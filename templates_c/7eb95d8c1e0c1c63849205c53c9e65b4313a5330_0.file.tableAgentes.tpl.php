<?php
/* Smarty version 4.3.2, created on 2024-06-03 03:58:49
  from 'C:\xampp\htdocs\proyectos\Casino\templates\tableAgentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665d2359990864_52223307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb95d8c1e0c1c63849205c53c9e65b4313a5330' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Casino\\templates\\tableAgentes.tpl',
      1 => 1717379922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:formAddAgentes.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_665d2359990864_52223307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:formAddAgentes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-success table-striped mt-2 text-center table table-dark">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Saldo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

        <?php if ($_smarty_tpl->tpl_vars['agentes']->value == 0) {?>
            <tr>
                <td colspan=5>No hay agentes para mostrar</td>
            </tr>
        <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agentes']->value, 'agente');
$_smarty_tpl->tpl_vars['agente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['agente']->value) {
$_smarty_tpl->tpl_vars['agente']->do_else = false;
?>
       
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->saldo;?>
</td>
            <td>
            <a href='mostrarClientes/<?php echo $_smarty_tpl->tpl_vars['agente']->value->id_agente;?>
' class='btn btn-primary'>Ver Clientes</a>
            <a href='deleteAgent/<?php echo $_smarty_tpl->tpl_vars['agente']->value->id_agente;?>
' class='btn btn-danger'>Eliminar</a>
            </td>
            
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
