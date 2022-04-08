<?php
/* Smarty version 4.1.0, created on 2022-04-08 08:16:33
  from 'C:\xampp\htdocs\progra3\proyecto2\language_learning_web\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624fd34153ec78_54547981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cefbab5cfe8339148885465ab2e759dca0a3f81d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto2\\language_learning_web\\view\\templates\\header.tpl',
      1 => 1649398588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624fd34153ec78_54547981 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/s.css">
    <link rel="stylesheet" href="css/lessonsall.css">

    <title>Pandas-Login</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/panda.png" alt="">
        </div>
        
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
                <li><a href="index.php?action=show_lessons">Lessons</a></li> 
            <?php }?> 
            <?php if (!$_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>            
                <li><a href="index.php?action=open_login">Login</a></li>
                <li><a href="index.php?action=open_signup">Sign Up</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['isLoggedIn']->value) {?>
                <li><a href="logout.php">Log Out</a></li>
            <?php }?>
        </ul>
    </nav>
<?php }
}
