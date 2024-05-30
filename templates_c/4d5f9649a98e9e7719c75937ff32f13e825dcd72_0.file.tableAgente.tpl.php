<?php
/* Smarty version 4.3.2, created on 2024-05-30 18:09:08
  from 'C:\xampp\htdocs\proyectos\Casino\templates\tableAgente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6658a4a48acd15_53636523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d5f9649a98e9e7719c75937ff32f13e825dcd72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Casino\\templates\\tableAgente.tpl',
      1 => 1717083750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_6658a4a48acd15_53636523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table table-success table-striped mt-2 text-center">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Saldo</th>
            <th scope="col">Email</th>
            <th scope="col">Activado</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>

        <?php if (!(isset($_smarty_tpl->tpl_vars['agente']->value))) {?>
            <tr>
                <td colspan=5>El agente no existe</td>
            </tr>
        <?php }?> 

        <?php $_smarty_tpl->_assignInScope('class', $_smarty_tpl->tpl_vars['agente']->value->activado ? "activado" : '');?>
        <tr class=<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
>
            <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->saldo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['agente']->value->email;?>
</td>
            <?php $_smarty_tpl->_assignInScope('estado', $_smarty_tpl->tpl_vars['agente']->value->activado ? "Agente activado" : "Agente desactivado");?>
            <td><?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
</td>
            <td>
            <a href='delete/<?php echo $_smarty_tpl->tpl_vars['agente']->value->id_agente;?>
' class=' btn btn-danger'>Eliminar</a>
            
            
            <?php if (!$_smarty_tpl->tpl_vars['agente']->value->activado) {?>
               
                <a href='active/<?php echo $_smarty_tpl->tpl_vars['agente']->value->id_agente;?>
' class=' btn btn-success'>Activar</a>
                
            
            
            <?php } else { ?>
            
                <a href='desactive/<?php echo $_smarty_tpl->tpl_vars['agente']->value->id_agente;?>
' class=' btn btn-success'>Desactivar</a>
                
                
            <?php }?>
            </td>
              

        </tr>


<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
