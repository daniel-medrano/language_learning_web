<?php
/* Smarty version 4.1.0, created on 2022-04-07 18:48:35
  from 'C:\xampp\htdocs\progra3\proyecto2\language_learning_web\view\templates\lesson2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624f15e3b74973_36648163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2483285cdaf0bd02106c163381d524147a2ffada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto2\\language_learning_web\\view\\templates\\lesson2.tpl',
      1 => 1649350111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624f15e3b74973_36648163 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2</title>
    <link rel="stylesheet" href="css/numbers.css" type="text/css">
</head>
<body>
    <form> 
        <div class= "numbers"> 
            <div class="title">
                Select the numbers.
            </div>
            <div class="number">
                <img src="img/one.png" alt="">
                <div>
                    <input type="text">
                </div>
            </div>
            <div class="number">
                <img src="img/two.png" alt="">
                <div>
                    <input type="text">
                </div>
            </div>
            <div class="number">
                <img src="img/three.png" alt="">
                <div>
                    <input type="text">
                </div>
            </div>
            <div class="number">
                <img src="img/four.png" alt="">
                <div>
                    <input type="text">
                </div>
            </div>           
            <div> 
                <button type="button">Check</button>
            <a href="index.php?action=show_lessons"> Return </a>
            </div>
        </div>
    </form>          
</body>
</html><?php }
}
