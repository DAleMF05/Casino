<?php
/* Smarty version 4.3.2, created on 2024-06-03 04:46:57
  from 'C:\xampp\htdocs\proyectos\Casino\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665d2ea1b1cb25_35233748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eef78f905374745fa95ab34e6999c28dbc7ed89c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Casino\\templates\\login.tpl',
      1 => 1717382814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_665d2ea1b1cb25_35233748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="formLogin">


  <form class="formLogin" action="verify" method="POST">
    <legend class="text-center">Login</legend>
    <label class="col-sm-2 col-form-label">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Ingrese email">
    <label class="form-label">Contraseña</label>
    <input type="text" type="password" class="form-control" placeholder="Ingrese contraseña">
    <?php if ($_smarty_tpl->tpl_vars['msj']->value) {?>
      <div class='alert alert-warning'>
        <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

      </div>
    <?php }?>
    <button type="submit" class="btn btn-primary col-12">Ingresar</button>
  </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
