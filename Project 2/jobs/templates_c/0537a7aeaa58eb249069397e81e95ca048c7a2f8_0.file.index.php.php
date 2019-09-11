<?php
/* Smarty version 3.1.32, created on 2018-05-07 18:16:24
  from 'D:\xampp\htdocs\jobs\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5af07bd8b7e5c7_84500566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0537a7aeaa58eb249069397e81e95ca048c7a2f8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jobs\\index.php',
      1 => 1525702717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af07bd8b7e5c7_84500566 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php  
';?>include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";  

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('index.tpl'); 
<?php echo '?>';
}
}
