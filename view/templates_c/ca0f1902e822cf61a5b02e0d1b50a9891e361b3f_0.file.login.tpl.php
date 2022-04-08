<?php
/* Smarty version 4.1.0, created on 2022-04-08 08:12:31
  from 'C:\xampp\htdocs\progra3\proyecto2\language_learning_web\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624fd24f694658_59880801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca0f1902e822cf61a5b02e0d1b50a9891e361b3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto2\\language_learning_web\\view\\templates\\login.tpl',
      1 => 1649398346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624fd24f694658_59880801 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba1.2</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/signinup.css" type="text/css">
</head>
<body>
    <form action="index.php" method="post">
        <div class="signin-box">
            <input type="hidden" name="action" value="login_submission">
            <h2 class="title">SIGN IN</h2>          
        
            <div class="input-box">
                <label>Username</label>
                <input class="text-box" type="text" name="username" placeholder="Username">
            </div>
            <div class="input-box">
                <label>Password</label>
                <input class="text-box" type="password" name="password" placeholder="Password">
            </div>
            <input class="button" type="submit" value="Submit">
            <a href="index.php?action=show_home">Return</a>
        </div>  
    </form>    
</body>
</html><?php }
}
