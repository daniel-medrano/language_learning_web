<?php
/* Smarty version 4.1.0, created on 2022-04-08 23:19:04
  from 'C:\xampp\htdocs\language_learning_web\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6250a6c80b60a8_82731147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0febd43ac0d8ed620391d3bbadaf96f41b10dd87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\language_learning_web\\view\\templates\\header.tpl',
      1 => 1649452722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6250a6c80b60a8_82731147 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lessons.css">

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
