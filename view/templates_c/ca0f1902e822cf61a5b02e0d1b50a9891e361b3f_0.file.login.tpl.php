<?php
/* Smarty version 4.1.0, created on 2022-04-07 18:56:54
  from 'C:\xampp\htdocs\progra3\proyecto2\language_learning_web\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624f17d6f30a91_66649537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca0f1902e822cf61a5b02e0d1b50a9891e361b3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto2\\language_learning_web\\view\\templates\\login.tpl',
      1 => 1649350594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624f17d6f30a91_66649537 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba1.2</title>
    <link rel="stylesheet" href="css/login.css" type="text/css">
</head>
<body>
    <form>
        <h2>SIGN IN</h2>
        <label>Username</label>
        <input type="text" name="txtUsername" placeholder="Username"><br>

        <label>Password</label>
        <input type="password" name="txtPassword" placeholder="Password"><br>

        <button type="button">Sing in</button>
        <a href="index.php?action=show_homepage"> Return </a>
   
    </form>
    
</body>
</html><?php }
}
