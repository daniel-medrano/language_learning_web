<?php
/* Smarty version 4.1.0, created on 2022-04-08 23:19:20
  from 'C:\xampp\htdocs\language_learning_web\view\templates\lessons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6250a6d8de6de4_79666495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbabb8701c3997f4fee8787ee569acc26aedc20d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\language_learning_web\\view\\templates\\lessons.tpl',
      1 => 1649450609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6250a6d8de6de4_79666495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                <img class="img" src="img/lessons/fruits.png">
            </div>
            <div class="lesson">
                <div class="text">
                 <h2 class="title">Lesson 02: Numbers</h2>
                    <h4 class="subtitle">This is lesson 02. Learn the numbers.</h4>
                    <a  href="index.php?action=show_lesson2">Show</a>
                </div>
                <img class="img" src="img/lessons/numbers.png">
            </div>
            <div class="lesson">
                <div class="text">
                    <h2 class="title">Lesson 03: Colors</h2>
                    <h4 class="subtitle">This is lesson 03. Learn the colors.</h4>
                    <a  href="index.php?action=show_lesson3">Show</a>
                </div>
                <img class="img" src="img/lessons/colors.png">
            </div>
        </div>
    </div>       
</body>
</html><?php }
}
