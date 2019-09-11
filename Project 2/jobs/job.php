<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('job.tpl'); 
?>