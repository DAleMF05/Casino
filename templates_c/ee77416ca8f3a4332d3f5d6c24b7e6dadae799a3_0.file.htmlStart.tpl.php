<?php
/* Smarty version 4.3.2, created on 2024-05-25 02:17:28
  from 'C:\xampp\htdocs\proyectos\tp_especial\templates\htmlStart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66512e18b15f44_84938668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee77416ca8f3a4332d3f5d6c24b7e6dadae799a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\tp_especial\\templates\\htmlStart.tpl',
      1 => 1716596218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66512e18b15f44_84938668 (Smarty_Internal_Template $_smarty_tpl) {
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
    <a class="navbar-brand" href="#">Casino Bet30</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="agentes">Agentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php }
}
