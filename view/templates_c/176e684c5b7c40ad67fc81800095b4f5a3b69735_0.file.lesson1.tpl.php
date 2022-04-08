<?php
/* Smarty version 4.1.0, created on 2022-04-08 23:19:23
  from 'C:\xampp\htdocs\language_learning_web\view\templates\lesson1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6250a6db3c7e76_35072583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '176e684c5b7c40ad67fc81800095b4f5a3b69735' => 
    array (
      0 => 'C:\\xampp\\htdocs\\language_learning_web\\view\\templates\\lesson1.tpl',
      1 => 1649452384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6250a6db3c7e76_35072583 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="img/panda.png">
    <link rel="stylesheet" href="css/lesson1.css">
    <title>Lesson 1: </title>
</head>
<body>
    <div class="content">
        <h2 class="title">Drag and drop the fruits in the right box</h2>
        <div class="empties">
            <div class="fruit">
                <h3>Apple</h3>
                <div id="apple-1" class="empty"></div>
            </div>
            <div class="fruit">
                <h3>Pear</h3>
                <div id="pear-1" class="empty"></div>
            </div>
            <div class="fruit">
                <h3>Pineapple</h3>
                <div id="pineapple-1" class="empty"></div>
            </div>
        </div>
        <div class="fillings">
            <div class="empty initial">
                <div id="apple-2" class="apple filling" draggable="true">
                    <img src="img/lesson1/apple.png" alt="" draggable="false">
                </div>
            </div>
            <div class="empty initial">
                <div id="pear-2" class="filling" draggable="true">
                    <img src="img/lesson1/pear.png" alt="" draggable="false">
                </div>
            </div>
            <div class="empty initial">
                <div id="pineapple-2" class="filling" draggable="true">
                    <img src="img/lesson1/pineapple.png" alt="" draggable="false">
                </div>
            </div>
        </div>
        <div class="buttons">
            <button class="button" id="check">Check</button>
            <a class="button" href="index.php?action=show_lessons"> Return </a>

        </div>
    </div>

    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
