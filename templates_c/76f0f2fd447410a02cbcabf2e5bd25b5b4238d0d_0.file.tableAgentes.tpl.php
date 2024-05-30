<?php
/* Smarty version 4.3.2, created on 2024-05-25 00:00:08
  from 'C:\xampp\htdocs\Proyectos\tp_especial\templates\tableAgentes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66510de8529440_38652400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76f0f2fd447410a02cbcabf2e5bd25b5b4238d0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\tp_especial\\templates\\tableAgentes.tpl',
      1 => 1716588007,
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
function content_66510de8529440_38652400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:formAddAgentes.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table table-success table-striped mt-2 text-center">
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
        <?php $_smarty_tpl->_assignInScope('class', $_smarty_tpl->tpl_vars['agente']->value->activado ? "activado" : '');?>
        <tr class=<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
>
            <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->saldo;?>
</td>
                                    <td>
            <a href='mostrarAgente/<?php echo $_smarty_tpl->tpl_vars['agente']->value->id_agente;?>
' class='btn btn-primary'>Ver</a>
            <a href='delete/<?php echo $_smarty_tpl->tpl_vars['agente']->value->id_agente;?>
' class='btn btn-danger'>Eliminar</a>
            </td>
            
            
                        
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
