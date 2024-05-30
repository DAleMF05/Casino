<?php
/* Smarty version 4.3.2, created on 2024-05-25 02:17:38
  from 'C:\xampp\htdocs\proyectos\tp_especial\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66512e22c2c858_90285358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9cb2fd54d6d7f6dab9121cc2254ab32f360273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tp_especial\\templates\\login.tpl',
      1 => 1716596218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_66512e22c2c858_90285358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:htmlStart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Iniciar Sesion</h1>
      <form class="col-3 m-auto" action="verify" method="POST">
      <legend class="text-center">Login</legend>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Ingrese email">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" name="password" class="form-control" placeholder="Ingrese contraseña">
      </div>
    <?php if ($_smarty_tpl->tpl_vars['msj']->value) {?>
        <div class='alert alert-warning'>
            <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

        </div>
    <?php }?>
    
   <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>

<?php $_smarty_tpl->_subTemplateRender('file:htmlEnd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
