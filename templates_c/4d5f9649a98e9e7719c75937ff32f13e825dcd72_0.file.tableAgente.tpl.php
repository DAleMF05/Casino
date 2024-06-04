<?php
/* Smarty version 4.3.2, created on 2024-06-04 04:46:54
  from 'C:\xampp\htdocs\proyectos\Casino\templates\tableAgente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665e801e634346_57788346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5f9649a98e9e7719c75937ff32f13e825dcd72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Casino\\templates\\tableAgente.tpl',
      1 => 1717469213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_665e801e634346_57788346 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table table-success table-striped mt-2 text-center table table-dark">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
     
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->nombre;?>
</td>
            </tr>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
