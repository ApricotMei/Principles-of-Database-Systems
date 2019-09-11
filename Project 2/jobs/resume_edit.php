<?php  
include "libs/Smarty.class.php";  
$smarty = new Smarty();  
  
$smarty->template_dir = "templates";  
$smarty->compile_dir = "templates_c";  

//这个地方需要查询数据库将已保存的信息assign到tpl去
session_start();
	$semail = $_COOKIE["user"];
    $con = mysqli_connect("localhost","root"); 
    if (!$con) 
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con, "jobs");
    $sql = "select * from Student where semail = '$semail'";  
    $result = mysqli_query($con, $sql); 
    $row = mysqli_fetch_array($result);
    $arr = $row;
    $smarty->assign("arr", $arr);

    $sql = "select * from Resume where semail = '$semail'";  
    $result = mysqli_query($con, $sql); 
    $row = mysqli_fetch_array($result);
    $arr1 = $row;
    $smarty->assign("arr1", $arr1);

$name = isset($_COOKIE["name"])?$_COOKIE["name"]:"NONE";
$type = isset($_COOKIE["type"])?$_COOKIE["type"]:"NONE";
$smarty->assign("name", $name);
$smarty->assign("type", $type);
$smarty->display('resume_edit.tpl'); 
?>