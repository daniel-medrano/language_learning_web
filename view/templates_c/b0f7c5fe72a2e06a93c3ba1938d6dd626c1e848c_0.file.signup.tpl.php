<?php
/* Smarty version 4.1.0, created on 2022-04-08 07:43:39
  from 'C:\xampp\htdocs\progra3\proyecto2\language_learning_web\view\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624fcb8b6971f1_40849108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f7c5fe72a2e06a93c3ba1938d6dd626c1e848c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto2\\language_learning_web\\view\\templates\\signup.tpl',
      1 => 1649396565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624fcb8b6971f1_40849108 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba1.2</title>
    <link rel="stylesheet" href="css/signinup.css" type="text/css">
</head>
<body>
    <form action="index.php" method="post">
        <div class="signup-box">
            <input type="hidden" name="action" value="signup_submission">
            <h2 class="title">SIGN UP</h2>
            <div class="input-box">
                <label>Name</label>
                <input class="text-box" type="text" name="name" placeholder="name">
            </div>
            <div class="input-box">
                <label>Last name</label>
                <input class="text-box" type="text" name="last_name" placeholder="Last Name">
            </div>
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
