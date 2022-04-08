<?php
/* Smarty version 4.1.0, created on 2022-04-08 23:19:09
  from 'C:\xampp\htdocs\language_learning_web\view\templates\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6250a6cd5507c5_92084859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edcb630cda7ba52d78d78874615de8925adf8d4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\language_learning_web\\view\\templates\\signup.tpl',
      1 => 1649450609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6250a6cd5507c5_92084859 (Smarty_Internal_Template $_smarty_tpl) {
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
