<?php
/* Smarty version 4.1.0, created on 2022-04-07 22:30:14
  from 'C:\xampp\htdocs\language_learning_web\view\templates\lessons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624f49d656f0c4_33517072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbabb8701c3997f4fee8787ee569acc26aedc20d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\language_learning_web\\view\\templates\\lessons.tpl',
      1 => 1649363410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624f49d656f0c4_33517072 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lessons.css">
    <title><Pandas-Lesson></title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/panda.png" alt="">
        </div>
        <nav>
            <ul>
                <li>About</li>
                <li>Home</li>
                <li>Help</li>
                <li><button class="button logout">Log Out</button></li>
            </ul>
        </nav>
    </header> 
    <div class="content">
        <div class="title">
            <h2>Welcome to Pandas!</h2>
        </div>
        <div class="lessons-container">
            <div class="lesson">
                <div class="text">
                    <h2 class="title">Lesson 01: Fruits</h2>
                    <h4 class="subtitle">This is lesson 01. Learn the fruits.</h4>
                    <a href="index.php?action=show_lesson1">Show</a>
                </div>
            </div>
            <div class="lesson">
                <div class="text">
                    <h2 class="title">Lesson 02: Colors</h2>
                    <h4 class="subtitle">This is lesson 01. Learn the colors.</h4>
                    <a  href="index.php?action=show_lesson3">Show</a>
                </div>
            </div>
            <div class="lesson">
                <div class="text">
                 <h2 class="title">Lesson 03: Numbers</h2>
                    <h4 class="subtitle">This is lesson 01. Learn the numbers.</h4>
                    <a  href="index.php?action=show_lesson2">Show</a>
                </div>
            </div>
        </div>
    </div>       
</body>
</html><?php }
}
