<?php
/* Smarty version 4.3.2, created on 2024-06-03 04:31:59
  from 'C:\xampp\htdocs\proyectos\Casino\templates\htmlStart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665d2b1fdb0a21_26270197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b275dda8cddb899722838fff08289947c8fbb7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Casino\\templates\\htmlStart.tpl',
      1 => 1717381910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665d2b1fdb0a21_26270197 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<base href=<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Casino Bet30</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="agentes">Agentes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="clientes">Clientes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login" >Login</a>
  </li>
</ul>
    </div>
</nav>
<?php }
}
