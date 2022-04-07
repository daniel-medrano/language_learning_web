<?php
/* Smarty version 4.1.0, created on 2022-04-07 18:46:34
  from 'C:\xampp\htdocs\progra3\proyecto2\language_learning_web\view\templates\lesson1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624f156a3f1c54_02299683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd319f7e46a0347c18879a9b408c7925c800dbd02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progra3\\proyecto2\\language_learning_web\\view\\templates\\lesson1.tpl',
      1 => 1649349927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624f156a3f1c54_02299683 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lesson.css">
    <title>Lesson 1: </title>
</head>
<body>
    <div class="content">
        <h2>Drag and drop the fruits in the right box.</h2>
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
                    <img src="img/apple.png" alt="" draggable="false">
                </div>
            </div>
            <div class="empty initial">
                <div id="pear-2" class="filling" draggable="true">
                    <img src="img/pear.png" alt="" draggable="false">
                </div>
            </div>
            <div class="empty initial">
                <div id="pineapple-2" class="filling" draggable="true">
                    <img src="img/pineapple.png" alt="" draggable="false">
                </div>
            </div>
        </div>
        <div>
            <button id="check">Check</button>
            <a href="index.php?action=show_lessons"> Return </a>

        </div>
    </div>

    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
