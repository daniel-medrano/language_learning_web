<?php
/* Smarty version 4.1.0, created on 2022-04-07 19:02:02
  from 'C:\xampp\htdocs\progra3\proyecto2\language_learning_web\view\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624f190a9127f1_93843041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f7c5fe72a2e06a93c3ba1938d6dd626c1e848c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto2\\language_learning_web\\view\\templates\\signup.tpl',
      1 => 1649350880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624f190a9127f1_93843041 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba1.2</title>
    <link rel="stylesheet" href="css/signup.css" type="text/css">
</head>
<body>
    <form>
        <h2>SIGN UP</h2>
        <label>First name</label> <br> 
        <input type="text" name="txtFirstName" placeholder="First Name"><br>

        <label>Last name</label>  <br> 
        <input type="text" name="txtlastname" placeholder="Last Name"><br>

        <label>Mail</label>  <br> 
        <input type="mail" name="txtmail" placeholder="Mail"><br>

        <label>Password</label> <br> 
        <input type="password" name="txtPassword" placeholder="Password"><br>

        <label>Confirm Password</label> <br> 
        <input type="Confirmpassword" name="txtConfirmassword" placeholder="Confirmpassword"><br>
        <br>
        <button type="button">Sign Up</button>
        <a href="index.php?action=show_homepage"> Return </a>
    </form>
    
</body>
</html><?php }
}
